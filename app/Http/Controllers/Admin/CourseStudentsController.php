<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Notification;
use App\Models\Revenue;
use App\Models\Student;
use App\Traits\GeneralTrait;
use DB;
use Illuminate\Http\Request;
use File;
use Carbon\Carbon;
use PHPUnit\Framework\Constraint\FileExists;

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

            // add notifications
            $this->notificationToAdminForStudentEnrollCourse($course, $request->student_id);
            $this->notificationToStudentFromEnrolledCourse($course, $request->student_id);
            return $this->returnSuccessMessage(__('general.add_success_message'));
        } else {
            return $this->returnError(__('courses.student_enrolled_course'), 404);
        }
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
                // delete notifications
                $notifications = Notification::where('notify_to', $courseStudent->course_id)->where('student_id', $courseStudent->student_id)->get();
                if (count($notifications) > 0) {
                    foreach ($notifications as $notification) {
                        $notification->delete();
                    }
                }

                // delete revenue
                $revenue = Revenue::where('revenue_for', $courseStudent->course_id)->where('student_id', $courseStudent->student_id)->first();
                if ($revenue) {
                    $revenue->delete();
                }

                // delete certification
                $certification = Certification::where('course_id', $courseStudent->course_id)->where('student_id', $courseStudent->student_id)->first();
                if ($certification) {
                    $certificatoinPath = public_path('/adminBoard/uploadedFiles/certifications//') . $certification->file;
                    if (File::exists($certificatoinPath)) {
                        File::delete($certificatoinPath);
                    }
                    $certification->delete();
                }

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
                // ->where('freeze',  '!=','')
                ->where('deleted_at', null)
                ->get();
        }
        return response()->json($data);
    }

    public function enrollAgreementStatus(Request $request)
    {
        if ($request->ajax()) {
            $courseStudent = CourseStudent::findOrFail($request->id);
            if (!$courseStudent) {
                return redirect()->route('admin.not.found');
            }

            if ($request->enrollAgreementStatusSwitch == 'true') {
                // change enroll agreement status
                $courseStudent->enroll_agreement = 'on';
                $courseStudent->save();
                // add revenue
                $this->addRevenue($courseStudent->course_id, $courseStudent->student_id);
                // add notification
                $this->notificationToStudentForOrderAgreement($courseStudent->course_id, $courseStudent->student_id);

                return $this->returnSuccessMessage(__('general.change_status_success_message'));

            } else {
                $courseStudent->enroll_agreement = '';
                $courseStudent->save();
                //delete revenue
                $this->deleteRevenue($courseStudent->course_id, $courseStudent->student_id);

                // add notification
                $this->notificationToStudentForOrderAgreementCancled($courseStudent->course_id, $courseStudent->student_id);

                return $this->returnError(__('general.change_status_success_message' ),404);
            }
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

    //delete revenue
    public function deleteRevenue($course_id, $student_id)
    {
        // delete revenue
        $revenue = Revenue::where('revenue_for', $course_id)->where('student_id', $student_id)->first();
        if ($revenue) {
            $revenue->delete();
        }
    }
}
