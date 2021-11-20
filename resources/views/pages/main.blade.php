@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Main</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Main</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.main.update')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="form-group col-md-10 mt-10">
{{--                                                <div class="mb-4">--}}
{{--                                                <h3>Background Image</h3>--}}
{{--                                                    @if(is_null($main))--}}
{{--                                                        No Background Info Found--}}
{{--                                                    @else--}}
{{--                                                <img src="{{url($main->background_img)}}"--}}
{{--                                                     class="img-thumbnail">--}}
{{--                                                    @endif--}}
{{--                                                <input class="mt-2" type="file" id="background_img"--}}
{{--                                                       name="background_img">--}}
{{--                                                </div>--}}
                                                <div class="mb-7">
                                                    <label for="typography"><h4>Typography</h4></label>
                                                    @if(is_null($main))
                                                        <input type="text" class="form-control" id="typography"
                                                               name="typography">
                                                    @else
                                                    <input type="text" class="form-control" id="typography"
                                                           name="typography"
                                                           value="{{$main->typography}}">
                                                    @endif
                                                </div>
                                                <div class="mb-4">
                                                    <label for="sub_title"><h4>Sub Title</h4></label>
                                                    @if(is_null($main))
                                                        <input type="text" class="form-control" id="sub_title"
                                                               name="sub_title"
                                                    @else
                                                    <input type="text" class="form-control" id="sub_title"
                                                           name="sub_title"
                                                           value="{{$main->sub_title}}">
                                                    @endif
                                                </div>
{{--                                                <div class="mb-4">--}}
{{--                                                    <h4>Upload Resume</h4>--}}
{{--                                                    <input class="mt-2" type="file" id="resume" name="resume">--}}
{{--                                                </div>--}}
                                                <div class="col-3">
                                                    <input type="submit" name="submit" class="btn btn-outline-primary primary btn-block btn-rounded mt3">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
