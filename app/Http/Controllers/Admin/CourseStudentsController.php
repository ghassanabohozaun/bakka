<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Notification;
use App\Models\Revenue;
use App\Models\Student;
use App\Traits\GeneralTrait;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CourseStudentsController extends Controller
{
    use GeneralTrait;

    //index
    public function index($id = null)
    {
        $title = __('courses.enrolled_list');
        $course = Course::findOrFail($id);
        //$courseStudents = $course->students->id;
        $courseStudents = $course->students()->paginate(perPage: 15);
        return view('admin.courses.enroll-list.index', compact('title', 'course', 'courseStudents'));
    }

    public function store(Request $request)
    {
        $course = Course::findOrFail($request->id);
        if (!$course) {
            return redirect()->route('admin.not.found');
        }

        // check student enrolled on course
        $courseStudents = $course->students->where('id', $request->student_id);

        if ($courseStudents->isEmpty()) {
            //enroll student
            $courseStudent = $course->students()->attach($request->student_id, ['enrolled_date' => Carbon::now()->format('Y-m-d')]);
            // add revenue
            $this->addRevenue($request->id, $request->student_id);

            // add notifications
            $this->addAdminNotification($course, $request->student_id);
            $this->addStudentNotification($course, $request->student_id);

            return $this->returnSuccessMessage(__('general.add_success_message'));
        } else {
            return $this->returnError(__('courses.student_enrolled_course'), 404);
        }
    }

    //add revenue
    public function addRevenue($course_id, $student_id)
    {
        $coureCost = Course::find($course_id)->cost;
        $coureDiscount = Course::find($course_id)->discount;

        if ($coureDiscount == '' || $coureDiscount == 0) {
            $value = $coureCost;
        } else {
            $value = $coureDiscount;
        }

        Revenue::create([
            'student_id' => $student_id,
            'date' => Carbon::now()->format('Y-m-d'),
            'value' => $value,
            'revenue_for' => $course_id,
            'details' => 'enroll_course',
            'payment_method' => 'dashboard',
        ]);
    }

    // add admin notification

    public function addAdminNotification($course, $student_id)
    {
        Notification::create([
            'title_ar' => 'تنبيه التسجيل في دورة',
            'title_en' => 'Enrolled In Course Notification',
            'details_ar' => ' قام الطالب   ' . Student::find($student_id)->name_ar . ' بالتسجيل في الدورة التالية  ' . $course->title_ar,
            'details_en' => ' The Student  ' . Student::find($student_id)->name_en . ' Enrolled In This Course   ' . $course->title_en,
            'notify_status' => 'send',
            'notify_class' => 'unread',
            'notify_for' => 'admin',
            'admin_id'=>admin()->user()->id,
            'student_id' => $student_id,
        ]);
    }

    // add student notification
    public function addStudentNotification($course, $student_id)
    {
        Notification::create([
            'title_ar' => 'تنبيه التسجيل في دورة',
            'title_en' => 'Enrolled In Course Notification',
            'details_ar' => ' قمت بالتسجيل في الدورة التالية ' . $course->title_ar,
            'details_en' => ' You Enrolled In This Course  ' . $course->title_en,
            'notify_status' => 'send',
            'notify_class' => 'unread',
            'notify_for' => 'student',
            'admin_id'=>admin()->user()->id,
            'student_id' => $student_id,
        ]);
    }

    //destroy
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $courseStudent = CourseStudent::findOrFail($request->id);

            if (!$courseStudent) {
                return redirect()->route('admin.not.found');
            }
            if ($courseStudent->delete()) {
                $revenue = Revenue::where('revenue_for' ,$courseStudent->course_id )->where('student_id' , $courseStudent->student_id)->first();
                $revenue->delete();
                return $this->returnSuccessMessage(__('general.delete_success_message'));
            } else {
                return $this->returnError(__('general.delete_error_message'), 404);
            }
        }
    }

    //get all students name
    public function getAllStudentsName(Request $request)
    {
        $data = [];
        if ($request->has('q')) {
            $search = $request->q;
            $requestData = ['name_ar', 'name_en'];
            $data = DB::table('students')
                ->select('id', 'name_ar', 'name_en')
                ->where(function ($q) use ($requestData, $search) {
                    foreach ($requestData as $field) {
                        $q->orWhere($field, 'like', "%{$search}%");
                    }
                })
                ->where('deleted_at', null)
                ->get();
        }
        return response()->json($data);
    }
}
