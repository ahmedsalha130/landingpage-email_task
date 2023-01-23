<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function index(){
     $contacts  = Contact::count();
      $blogs = Blog::count();
        $services = Service::count();
        return view('admin.dashboard.index',compact('contacts','blogs','services'));
    }

}
