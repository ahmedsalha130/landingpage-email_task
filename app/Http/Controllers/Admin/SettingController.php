<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::first();
        return  view('admin.setting.index',compact('settings'));
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
        //
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
    public function update(SettingRequest $request, $id)
    {
        $request->validate([
            'title'=>'required',
        ]);


        $setting =Setting::find($id) ;
        $request_data['title'] = $request->title;
        $request_data['phone'] = $request->phone    ;
        $request_data['email'] = $request->email;
        $request_data['city'] = $request->city;
        $request_data['address'] = $request->address;
        $request_data['count_of_hour_open'] = $request->count_of_hour_open;
        $request_data['count_of_day_open'] = $request->count_of_day_open;
        $request_data['start_open'] = $request->start_open;
        $request_data['start_close'] = $request->start_close;


        if ($request->has('logo')) {

            $the_file_path = uploadImage('uploads', $request->logo);
            $request_data['logo'] = $the_file_path;

        }

        $setting->update($request_data);
        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
