<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Contact::paginate(10);

        return view('admin.contact.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {

        try {


            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['phone'] = $request->phone;
            $data['subject'] = $request->subject;
            $data['body'] = $request->message;



            $data =   Contact::create($data);



            if ($data){
                session()->flash('success', __('site.added_successfully'));
                return redirect()->route('frontend.index');

            }else {

                session()->flash('danger', 'Something went wrong');
            }




        }catch (\Exception $ex ){


            session()->flash('danger', 'Something went wrong');

            return redirect()->back()->with('danger',$ex->getMessage()) ;




        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();

            $data = Contact::find($id);
            $the_old_path = $data->getRawOriginal('image');

            $data->delete();

            DB::commit();

            if ($data){
                session()->flash('success', __('site.deleted_successfully'));
                return redirect()->route('contacts.index');

            }else {

                session()->flash('danger', 'Something went wrong');
                }




        }catch (\Exception $ex ){

            session()->flash('danger', 'Something went wrong');


            DB::rollBack();


        }
    }
    }

