<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use DB;
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


    public function store(Request $request){

    }
    public function destroy(Request $request)
    {
        if ($request->ajax()) {
            $courseStudent = CourseStudent::findOrFail($request->id);

            if (!$courseStudent) {
                return redirect()->route('admin.not.found');
            }
            if ($courseStudent->delete()) {
                return $this->returnSuccessMessage(__('general.delete_success_message'));
            } else {
                return $this->returnError(__('general.delete_error_message'), 404);
            }
        }
    }

    public function getAllStudentsName(Request $request)
    {
        $data = [];
        if ($request->has('q')) {
            $search = $request->q;
            $requestData = ['name_ar','name_en'];
            $data = DB::table("students")
                ->select("id", "name_ar",'name_en')
                ->where(function ($q) use ($requestData, $search) {
                    foreach ($requestData as $field)
                        $q->orWhere($field, 'like', "%{$search}%");
                })->where('deleted_at',null)
                ->get();
        }
        return response()->json($data);
    }
}
