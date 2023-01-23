<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\SendUserMails;
use App\Mail\UserMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function send_mail()
    {
      User::chunk(50,function($data){

        dispatch(new SendUserMails($data));
       });

    return "Mails Sent in Background";
    }
}
