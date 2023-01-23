<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MainSectionRequest;
use App\Models\MainSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = MainSection::get();

      return view('admin.main_section.index',compact('data'));
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
    public function store(Request $request)
    {

        try {


            $data['title'] = $request->title;
            $data['body'] = $request->body;
            $data['link'] = $request->link;


            if ($request->has('image')) {

                $the_file_path = uploadImage('uploads', $request->image);
                $data['image'] = $the_file_path;

            }

            $data =   MainSection::create($data);



            if ($data){
                session()->flash('success', __('site.added_successfully'));
                return redirect()->route('main_section.index');

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
    public function update(MainSectionRequest $request, $id)
    {

        try {

            $section =   MainSection::find($request->id);
            $data['title'] = $request->title;
            $data['body'] = $request->body;
            $data['link'] = $request->link;

            if ($request->has('image')) {


                $the_old_path = $section->getRawOriginal('image');
               if (file_exists('uploads/' . $the_old_path) and !empty($the_old_path)) {
                   unlink('uploads/' . $the_old_path);
               }
               $the_file_path = uploadImage('uploads', $request->image);
               $data['image'] = $the_file_path;

           }


           $section->update($data);


            if ($data){
                session()->flash('success', __('site.added_successfully'));
                return redirect()->route('main_section.index');

            }else {

                session()->flash('danger', 'Something went wrong');
            }




        }catch (\Exception $ex ){


            session()->flash('danger', 'Something went wrong');

            return redirect()->back()->with('danger',$ex->getMessage()) ;




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

            $data = MainSection::find($id);
            $the_old_path = $data->getRawOriginal('image');
            if (file_exists('uploads/' . $the_old_path) and !empty($the_old_path)) {
                unlink('uploads/' . $the_old_path);
            }
            $data->delete();

            DB::commit();

            if ($data){
                session()->flash('success', __('site.deleted_successfully'));
                return redirect()->route('main_section.index');

            }else {

                session()->flash('danger', 'Something went wrong');
                }




        }catch (\Exception $ex ){

            session()->flash('danger', 'Something went wrong');


            DB::rollBack();


        }
    }
}
