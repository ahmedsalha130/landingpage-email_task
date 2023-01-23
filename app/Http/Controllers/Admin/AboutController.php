<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutRequest;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::get();

        return view('admin.about.index',compact('data'));
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
    public function store(AboutRequest $request)
    {
        try {


            $data['title'] = $request->title;
            $data['body'] = $request->body;




            $data =   About::create($data);



            if ($data){
                session()->flash('success', __('site.added_successfully'));
                return redirect()->route('about_us.index');

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
    public function update(AboutRequest $request, $id)
    {

        try {

            $about =   About::find($request->id);
            $data['title'] = $request->title;
            $data['body'] = $request->body;




           $about->update($data);


            if ($data){
                session()->flash('success', __('site.added_successfully'));
                return redirect()->route('about_us.index');

            }else {

                session()->flash('error', 'Something went wrong');
            }




        }catch (\Exception $ex ){


            session()->flash('error', 'Something went wrong');

            return redirect()->back()->with('error',$ex->getMessage()) ;




        }
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

            $data = About::find($id);

            $data->delete();

            DB::commit();

            if ($data){
                session()->flash('success', __('site.deleted_successfully'));
                return redirect()->route('about_us.index');

            }else {

                session()->flash('danger', 'Something went wrong');
                }




        }catch (\Exception $ex ){

            session()->flash('danger', 'Something went wrong');


            DB::rollBack();


        }
    }
}
