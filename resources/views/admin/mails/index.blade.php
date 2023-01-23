@extends('admin.layout.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>الايميلات  </h1>

            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">@lang('site.add')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">
                @include('partials._errors')

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">@lang('site.add') <small>
{{--                            @if($data->total() == null)--}}
{{--                                0--}}
{{--                            @else--}}
{{--                                {{$data->total()}}--}}
{{--                            @endif--}}

                        </small></h3>


                        <div class="row">



                            <div class="col-md-4">
                                <a href="#"  data-toggle="modal" data-target="#create_model"  class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</a>
                                {{--                                    <a href="#" class="btn btn-primary disabled"><i class="fa fa-plus"></i> @lang('site.add')</a>--}}
                            </div>

                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($data->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان الايميل</th>
                                <th>الرسالة</th>
                                <th>@lang('site.date')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($data as $info)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $info->title }}</td>
                                    <td>{{ $info->message }}</td>
                                    <td>{{ $info->created_at }}</td>
                                    <td>
                                        {{--                                            <a href="#" class="btn btn-info btn-sm disabled"><i class="fa fa-edit"></i> @lang('site.edit')</a>--}}
                                        <form action="{{ route('admin.emails_destory', $info->id) }}" method="post" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                        </form><!-- end of form -->
                                        {{--                                            <button class="btn btn-danger btn-sm disabled"><i class="fa fa-trash"></i> @lang('site.delete')</button>--}}
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table><!-- end of table -->


                        {{-- {{ $data->links() }}--}}

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->

                <!-- Edit--->

                <div class="modal fade" id="edit_model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">@lang('site.edit') </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form  class="was-validated" enctype="multipart/form-data" novalidate action="{{route('services.update','update')}}" method="post" id="#">
                                    {{csrf_field()}}
                                    @method('put')

                                    <input type="hidden" name="id" id="id">
                                    <div class="form-group">
                                        <label for="name">@lang('site.name')</label>
                                        <input type="text" name="title" class="form-control" value="" id="title">
                                        @error('title')

                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>


                                    <div class="form-group">
                                        <label for="icon">الايقونة</label>
                                        <input type="text" name="icon" class="form-control" value="" id="icon">
                                        @error('icon')

                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>

                                    <div class="form-group">
                                        <label for="body">@lang('site.body')</label>
                                        <textarea  name="body" class="form-control" value="{{old('body')}}" id="body"> </textarea>
                                        @error('body')

                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                        @enderror

                                    </div>





                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary" >@lang('site.add')</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('site.close')</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div><!-- end of box -->

                <!-- Create--->



                <div class="modal fade" id="create_model" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">@lang('site.create')</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form  class="was-validated" enctype="multipart/form-data" novalidate action="{{route('admin.send-bulk-mail')}}" method="post" id="#">
                                {{csrf_field()}}
                                @method('post')

                                <div class="form-group">
                                    <label for="name">@lang('site.title')</label>
                                    <input type="text" name="title" class="form-control" value="" id="title">
                                    @error('title')

                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>



                                <div class="form-group">
                                    <label for="body">@lang('site.body')</label>
                                    <textarea  name="body" class="form-control" value="{{old('body')}}" id="body"> </textarea>
                                    @error('body')

                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                    @enderror

                                </div>



                                    <div class="modal-footer">

                                        <button type="submit" class="btn btn-primary" >@lang('site.add')</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('site.close')</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                </div><!-- end of box -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


    @section('scripts')
        <script>
            $(document).ready(function() {

                // Model Edit
                $('#edit_model').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')
                    var title = button.data('title')
                    var body = button.data('body')
                    var link = button.data('link')
                    var image = button.data('image')
                    var icon = button.data('icon')

                    var modal = $(this)
                    modal.find('.modal-body #id').val(id);
                    modal.find('.modal-body #body').val(body);
                    modal.find('.modal-body #title').val(title);
                    modal.find('.modal-body #link').val(link);
                    modal.find('.modal-body #icon').val(icon);
                    modal.find('.modal-body #image').attr('src',image);
                }) ;
            });
            $(document).ready(function() {

                // Model create
                $('#create_model').on('show.bs.modal', function(event) {
                    var button = $(event.relatedTarget)
                    var id = button.data('id')

                    var modal = $(this)
                    modal.find('.modal-body #id').val(id);
                }) ;
            });

        </script>
    @endsection

@endsection
