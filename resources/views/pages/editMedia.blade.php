@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Edit Media</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Edit Media</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.media.update', $mediaLists->id)}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
{{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-4">
                                                    <h3>Media</h3>
                                                    <img src="{{url($mediaLists->mediaImage)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="mediaImage"
                                                           name="mediaImage">
                                                </div>
                                                <div class="mb-7">
                                                    <label for="mediaTitle"><h4>Media Title</h4></label>
                                                    <input type="text" class="form-control" id="mediaTitle"
                                                           name="mediaTitle"
                                                           value="{{$mediaLists->mediaTitle}}">
                                                </div>
                                                <div class="mb-7">
                                                    <label for="mediaTitle"><h4>Media By</h4></label>
                                                    <input type="text" class="form-control" id="mediaBy"
                                                           name="mediaBy"
                                                           value="{{$mediaLists->mediaBy}}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="mediaBody">Description</label>
                                                    <textarea name="mediaBody" id="mediaBody" class="form-control" required autocomplete="mediaBody" autofocus>{{$mediaLists->mediaBody}}</textarea>
                                                    <span class="input-filed-error" id="testTypeDescriptionError"></span>
                                                </div>
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
