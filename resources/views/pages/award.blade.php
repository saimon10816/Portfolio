@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Awards</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Awards</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.award.update')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <div class="row">

                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                <h3>Award 1</h3>
                                                <img src="{{url($award->award1)}}"
                                                     class="img-thumbnail">
                                                <input class="mt-2" type="file" id="award1"
                                                       name="award1">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Award 2</h3>
                                                    <img src="{{url($award->award2)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="award2"
                                                           name="award2">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Award 3</h3>
                                                    <img src="{{url($award->award3)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="award3"
                                                           name="award3">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Award 4</h3>
                                                    <img src="{{url($award->award4)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="award4"
                                                           name="award4">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Award 5</h3>
                                                    <img src="{{url($award->award5)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="award5"
                                                           name="award5">
                                                </div>
                                            </div>

                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Award 6</h3>
                                                    <img src="{{url($award->award6)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="award6"
                                                           name="award6">
                                                </div>
                                            </div>

                                            <input type="submit" name="submit" class="btn btn-outline-primary primary btn-block btn-rounded mt-3">
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
