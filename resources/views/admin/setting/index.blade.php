@extends('admin.layout.dashboard.app')

@section('title')
    الإعدادت
@endsection
@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.settings')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">@lang('site.settings')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                @include('partials._errors')


                <div class="box-body">

                <form class="col-12 row"  action="{{route('settings.update',$settings->id)}}" method="post" enctype="multipart/form-data" >
                @csrf
                    @method('put')
                <div class="col-12 px-3">
                </div>
                <div class="col-12 col-lg-4 px-3 py-5">


                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                            اسم الموقع
                        </div>
                        <div class="col-9 px-2">
                            <input type="text" required name="title" class="form-control" value="{{$settings->title}}" required="" min="3" max="255">
                        </div>
                    </div>




                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                            لوجو الموقع
                        </div>
                        <div class="col-9 px-2">
                            <input type="file" name="logo"  class="form-control image" >
                            <div class="col-12 p-2">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <img src="{{ $settings->logo }}"  style="width: 100px" class="img-thumbnail image-preview" alt="">
                    </div>



                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                    عدد ساعات الدوام
                        </div>
                        <div class="col-9 px-2">
                            <input required type="number" name="count_of_hour_open" class="form-control" value="{{$settings->count_of_hour_open}}" >
                        </div>
                    </div>



                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                           عدد ايام الدوام
                        </div>
                        <div class="col-9 px-2">
                            <input required type="number" name="count_of_day_open" class="form-control" value="{{$settings->count_of_day_open}}" >
                        </div>
                    </div>


                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                    ساعة بداية الدوام
                        </div>
                        <div class="col-9 px-2">
                            <input  type="time" name="start_open" class="form-control" value="{{$settings->start_open}}" >
                        </div>
                    </div>
                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                    ساعة نهاية الدوام
                        </div>
                        <div class="col-9 px-2">
                            <input type="time" name="start_close" class="form-control" value="{{$settings->start_close}}" >
                        </div>
                    </div>
                    <div class="col-12 px-0 d-flex mb-3">
                        <br>
                        <hr>
                    </div>

                    <div class="col-9 px-2">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                    </div>





                </div>
                <div class="col-12 col-lg-8 px-3 py-5">
                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                            رقم الهاتف
                        </div>
                        <div class="col-9 px-2">
                            <input type="text" required name="phone" class="form-control" value="{{$settings->phone}}" >
                        </div>
                    </div>




                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                            بريد التواصل
                        </div>
                        <div class="col-9 px-2">
                            <input type="email" required name="email" class="form-control" value="{{$settings->email}}" >
                        </div>
                    </div>


                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
                         المدينة
                        </div>
                        <div class="col-9 px-2">
                            <input type="text" required name="city" class="form-control" value="{{$settings->city}}" >
                        </div>
                    </div>
                    <div class="col-12 px-0 d-flex mb-3">
                        <div class="col-3 px-2 text-end pt-1">
             العنوان
                        </div>
                        <div class="col-9 px-2">
                            <input type="text" required  name="address" class="form-control" value="{{$settings->address}}" >
                        </div>
                    </div>





                    </div>









            </form>
                </div>
            </div>
        </section>
    </div>
@endsection
