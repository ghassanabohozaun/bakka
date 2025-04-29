<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SupportCenterRequest;
use App\Models\Course;
use App\Models\FAQ;
use App\Models\Slider;
use App\Models\SupportCenter;
use App\Models\Testimonial;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    use GeneralTrait;
    // index
    public function index()
    {
        $title = __('site.home');
        $sliders = $this->getSliders();
        $courses = $this->getCourses();
        $testimonials = $this->getTestimonials();

        return view('site.index', compact('title', 'sliders', 'courses', 'testimonials'));
    }

    // get sliders
    public function getSliders()
    {
        if (Lang() == 'ar') {
            // Slider
            $sliders = Slider::withoutTrashed()
                ->whereStatus('on')
                ->orderBy('order', 'asc')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->get();
        } else {
            //Slider
            $sliders = Slider::withoutTrashed()
                ->whereStatus('on')
                ->orderBy('order', 'asc')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->get();
        }

        return $sliders;
    }

    // get courses
    public function getCourses()
    {
        if (Lang() == 'ar') {
            // course
            $courses = Course::withoutTrashed()
                ->whereStatus('on')
                ->orderByDesc('created_at')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->take(6)
                ->get();
        } else {
            //course
            $courses = Course::withoutTrashed()
                ->whereStatus('on')
                ->orderByDesc('created_at')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->take(6)
                ->get();
        }

        return $courses;
    }

    // get sliders
    public function getTestimonials()
    {
        if (Lang() == 'ar') {
            // Testimonial
            $testimonials = Testimonial::withoutTrashed()
                ->whereStatus('on')
                ->orderByDesc(column: 'created_at')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->get();
        } else {
            //Testimonial
            $testimonials = Testimonial::withoutTrashed()
                ->whereStatus('on')
                ->orderByDesc(column: 'created_at')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->get();
        }

        return $testimonials;
    }

    //////////////////////////////////////////////////////////////////////////////////////////
    /// Courses
    public function courses()
    {
        $title = trans('site.courses');

        if (Lang() == 'ar') {
            //////  Courses
            $courses = Course::withoutTrashed()
                ->orderByDesc('id')
                ->where('status', 'on')
                ->where('active', 'on')
                ->where(function ($q) {
                    $q->where('language', 'ar')->orWhere('language', 'ar_en');
                })
                ->paginate(perPage: 6);

            ///// English
        } else {
            //////  Courses
            $courses = Course::withoutTrashed()
                ->orderByDesc('id')
                ->where('status', 'on')
                ->where('active', 'on')
                ->where(function ($q) {
                    $q->where('language', 'en')->orWhere('language', 'ar_en');
                })
                ->paginate(6);
        }
        return view('site.courses', compact('title', 'courses'));
    }
    //////////////////////////////////////////////////////////////////////////////////////////
    /// courses Paging
    public function coursesPaging(Request $request)
    {
        if ($request->ajax()) {
            if (Lang() == 'ar') {
                //////  Courses
                $courses = Course::withoutTrashed()
                    ->orderByDesc('id')
                    ->where('status', 'on')
                    ->where('active', 'on')
                    ->where(function ($q) {
                        $q->where('language', 'ar')->orWhere('language', 'ar_en');
                    })
                    ->paginate(perPage: 6);
            } else {
                //////  Courses
                $courses = Course::withoutTrashed()
                    ->orderByDesc('id')
                    ->where('status', 'on')
                    ->where('active', 'on')
                    ->where(function ($q) {
                        $q->where('language', 'en')->orWhere('language', 'ar_en');
                    })
                    ->paginate(6);
            }
            return view('site.courses-paging', compact('courses'))->render();
        }
    }


        // get faqs
        public function faq()
        {
            $title = __('site.faq');

            if (Lang() == 'ar') {
                // faqs
                $faqs = FAQ::withoutTrashed()
                    ->whereStatus('on')
                    ->orderByDesc('created_at')
                    ->where(function ($q) {
                        $q->where('language', 'ar')->orWhere('language', 'ar_en');
                    })
                    ->take(6)
                    ->get();
            } else {
                //faqs
                $faqs = FAQ::withoutTrashed()
                    ->whereStatus('on')
                    ->orderByDesc('created_at')
                    ->where(function ($q) {
                        $q->where('language', 'en')->orWhere('language', 'ar_en');
                    })
                    ->take(6)
                    ->get();
            }

            return view('site.faq', compact('title' , 'faqs'));
        }
    //sendContact
    public function sendContact(SupportCenterRequest $request)
    {
        if (setting()->disabled_forms_button == 'on') {
            $contact = SupportCenter::create([
                'name' => $request->name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'title' => $request->title,
                'message' => $request->message,
            ]);

            if ($contact) {
                return $this->returnSuccessMessage(__('site.contact_success'));
            } else {
                return $this->returnError(__('site.contact_failed'), 500);
            }
        } else {
            return $this->returnError(__('site.contact_failed'), 500);
        }
    }

    // reload Captcha
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }
}
