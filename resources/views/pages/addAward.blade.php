@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Award</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Award</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.award.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
{{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="mb-4">
                                                    <h3>Award</h3>
                                                    @if(is_null($addAward))
                                                        No Image Available
                                                    @else
                                                    <img src="{{url($addAward->award)}}"
                                                         class="img-thumbnail">
                                                    @endif
                                                    <input class="mt-2" type="file" id="award"
                                                           name="award">
                                                </div>
                                                <div class="mb-7">
                                                    <label for="awardTitle"><h4>Award Title</h4></label>
                                                    @if(is_null($addAward))
                                                        <input type="text" class="form-control" id="awardTitle"
                                                               name="awardTitle">
                                                    @else
                                                    <input type="text" class="form-control" id="awardTitle"
                                                           name="awardTitle"
                                                           value="{{$addAward->awardTitle}}">
                                                    @endif
                                                </div>
                                                <div class="mb-4">
                                                    <label for="awardDescription"><h4>Award Description</h4></label>
                                                    @if(is_null($addAward))
                                                        <input type="text" class="form-control" id="awardDescription"
                                                               name="awardDescription">
                                                    @else
                                                    <input type="text" class="form-control" id="awardDescription"
                                                           name="awardDescription"
                                                           value="{{$addAward->awardDescription}}">
                                                    @endif
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
