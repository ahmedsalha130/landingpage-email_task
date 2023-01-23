@extends('admin.layout.dashboard.app')

@section('content')
    <style>

    </style>
    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.contacts')</h1>

            <ol class="breadcrumb">
                <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
                <li class="active">@lang('site.contacts')</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title" style="margin-bottom: 15px">@lang('site.contacts') <small>
{{--                            @if($contacts->total() == null)--}}
{{--                                0--}}
{{--                            @else--}}
{{--                                {{$contacts->total()}}--}}
{{--                            @endif--}}

                        </small></h3>

                    <form action="{{ route('contacts.index') }}" method="get">

                        <div class="row">





                        </div>
                    </form><!-- end of form -->

                </div><!-- end of box header -->

                <div class="box-body">

                    @if ($data->count() > 0)

                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>@lang('site.name')</th>
                                <th>@lang('site.email')</th>
                                <th>@lang('site.phone')</th>
                                <th>@lang('site.subject')</th>
                                <th>@lang('site.details')</th>
                                <th>@lang('site.action')</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($data as $contact)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $contact->name }}</td>

                                    <td>{{ $contact->email     }}</td>
                                    <td>{{ $contact->phone     }}</td>
                                    <td>{{ $contact->subject     }}</td>
                                    <td>{{ $contact->body     }}</td>

                                    <td>
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="post" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> @lang('site.delete')</button>
                                        </form>
                                        <!-- end of form -->
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>

                        </table><!-- end of table -->

                        {{ $data->links() }}
                        {{-- {{ $contacts->links() }}--}}

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div><!-- end of box body -->


            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->


@endsection
