<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\MainSection;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public  function  index(){

        $main_section = MainSection::first();
        $about_us  = About::get();
        $services  = Service::get();
        $blogs  = Blog::get();
        $setting = Setting::first();
        return view('frontend.index',compact('setting','main_section','about_us','services','blogs'));
    }
}
