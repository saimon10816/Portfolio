@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Books</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Books</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.book.update')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{method_field('PUT')}}
                                        <div class="row">
                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                <h3>Book 1</h3>
                                                <img src="{{url($book->book1)}}"
                                                     class="img-thumbnail">
                                                <input class="mt-2" type="file" id="book1"
                                                       name="book1">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Book 2</h3>
                                                    <img src="{{url($book->book2)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="book2"
                                                           name="book2">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Book 3</h3>
                                                    <img src="{{url($book->book3)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="book3"
                                                           name="book3">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Book 4</h3>
                                                    <img src="{{url($book->book4)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="book4"
                                                           name="book4">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Book 5</h3>
                                                    <img src="{{url($book->book5)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="book5"
                                                           name="book5">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-3 mt-3">
                                                <div class="mb-4">
                                                    <h3>Book 6</h3>
                                                    <img src="{{url($book->book6)}}"
                                                         class="img-thumbnail">
                                                    <input class="mt-2" type="file" id="book6"
                                                           name="book6">
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
