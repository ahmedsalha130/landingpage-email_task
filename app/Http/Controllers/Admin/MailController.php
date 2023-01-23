<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MailRequest;
use App\Jobs\SendUserMails;
use App\Mail\UserMail;
use App\Models\Email;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function index()
    {  $data = Email::get();
       return view('admin.mails.index',compact('data'));
    }
    public function send_mail( MailRequest $request)
    {
        try {
            DB::beginTransaction();

        $data['title'] = $request->title;
        $data['body'] = $request->body;

        $email = Email::create($data);
        User::chunk(50,function($data){

        dispatch(new SendUserMails($data));
       });
       DB::commit();
       if ($data){
        session()->flash('success', 'تم ارسال الايميلات عبر خدمة mailtrip');
        return redirect()->route('admin.emails');

    }else {

        session()->flash('danger', 'Something went wrong');
    }
        }catch (\Exception $ex ){

            DB::rollBack();
            session()->flash('danger', 'Something went wrong');

            return redirect()->back()->with('danger',$ex->getMessage()) ;




        }
    }


    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Email::find($id);
            $the_old_path = $data->getRawOriginal('image');

            $data->delete();

            DB::commit();

            if ($data){
                session()->flash('success', __('site.deleted_successfully'));
                return redirect()->route('admin.emails');

            }else {

                session()->flash('danger', 'Something went wrong');
                return redirect()->back()->with('danger',$ex->getMessage()) ;

                }




        }catch (\Exception $ex ){

            session()->flash('danger', 'Something went wrong');
            return redirect()->back()->with('danger',$ex->getMessage()) ;


            DB::rollBack();


        }
    }
}
