@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">About</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">About</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.about.update')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="form-group col-md-10 mt-10">
                                                <div class="mb-4">
                                                    <h3>Display Image</h3>
                                                    @if(is_null($about))
                                                        No Display Image Available
                                                    @else
                                                        <img src="{{url($about->display_img)}}"
                                                             class="img-thumbnail">
                                                    @endif
                                                    <input class="mt-2" type="file" id="display_img"
                                                           name="display_img">
                                                </div>
                                                <div class="form-group">
                                                    <label for="body">Body</label>
                                                    @if(is_null($about))
                                                        <textarea name="body" id="body" class="form-control" required autocomplete="body" autofocus></textarea>
                                                    @else
                                                        <textarea name="body" id="body" class="form-control" required autocomplete="body" autofocus>{{$about->body}}</textarea>
                                                    @endif
                                                    <span class="input-filed-error" id="testTypeDescriptionError"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="sub_body">Sub Body</label>
                                                    @if(is_null($about))
                                                        <textarea name="sub_body" id="sub_body" class="form-control" required autocomplete="sub_body" autofocus></textarea>
                                                    @else
                                                        <textarea name="sub_body" id="sub_body" class="form-control" required autocomplete="sub_body" autofocus>{{$about->sub_body}}</textarea>
                                                    @endif
                                                    <span class="input-filed-error" id="testTypeDescriptionError"></span>
                                                </div>
                                                <div class="col-3">
                                                    <input type="submit" name="submit"
                                                           class="btn btn-outline-primary primary btn-block btn-rounded mt3">
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
