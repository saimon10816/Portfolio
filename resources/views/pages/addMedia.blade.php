@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Create Media</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Create Media</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.media.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
{{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-4">
                                                    <h3>Media</h3>
                                                    @if(is_null($addMedia))
                                                        No Media Image Found
                                                    @else
                                                    <img src="{{url($addMedia->mediaImage)}}"
                                                         class="img-thumbnail">
                                                    @endif
                                                    <input class="mt-2" type="file" id="mediaImage"
                                                           name="mediaImage">
                                                </div>
                                                <div class="mb-7">
                                                    <label for="mediaTitle"><h4>Media Title</h4></label>
                                                    @if(is_null($addMedia))
                                                        <input type="text" class="form-control" id="mediaTitle"
                                                               name="mediaTitle">
                                                    @else
                                                    <input type="text" class="form-control" id="mediaTitle"
                                                           name="mediaTitle"
                                                           value="{{$addMedia->mediaTitle}}">
                                                    @endif
                                                </div>
                                                <div class="mb-7">
                                                    <label for="mediaTitle"><h4>Media By</h4></label>
                                                    @if(is_null($addMedia))
                                                        <input type="text" class="form-control" id="mediaBy"
                                                               name="mediaBy">
                                                    @else
                                                    <input type="text" class="form-control" id="mediaBy"
                                                           name="mediaBy"
                                                           value="{{$addMedia->mediaBy}}">
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="mediaBody">Description</label>
                                                    @if(is_null($addMedia))
                                                        <textarea name="mediaBody" id="mediaBody" class="form-control" required autocomplete="mediaBody" autofocus></textarea>
                                                    @else
                                                    <textarea name="mediaBody" id="mediaBody" class="form-control" required autocomplete="mediaBody" autofocus>{{$addMedia->mediaBody}}</textarea>
                                                    @endif
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
