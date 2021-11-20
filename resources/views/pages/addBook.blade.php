@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Add Books</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">Add Books</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}</div>

                                <div class="card-body">
                                    <form action="{{route('admin.book.store')}}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        {{--                                        {{method_field('PUT')}}--}}
                                        <div class="row">
                                            <div class="form-group col-md-12 mt-12">
                                                <div class="col-md-3 mt-3">
                                                    <div class="mb-4">
                                                        <h3>Book</h3>
                                                        @if(is_null($addBook))
                                                            No Book Info Found
                                                        @else
                                                            <img src="{{url($addBook->book)}}"
                                                                 class="img-thumbnail">
                                                        @endif
                                                        <input class="mt-2" type="file" id="book"
                                                               name="book">
                                                    </div>
                                                </div>


                                                <div class="col-md-3 mt-3">
                                                    <div class="mb-4">
                                                        <h3>Book Info</h3>
                                                        @if(is_null($addBook))
                                                            No Book Info Found
                                                        @else
                                                            <img src="{{url($addBook->bookInfo)}}"
                                                                 class="img-thumbnail">
                                                        @endif
                                                        <input class="mt-2" type="file" id="bookInfo"
                                                               name="bookInfo">
                                                    </div>
                                                </div>


                                                <div class="mb-4">
                                                    <h3>Book Author</h3>
                                                    @if(is_null($addBook))
                                                        <input type="text" class="form-control" id="bookAuthor"
                                                               name="bookAuthor">
                                                    @else
                                                        <input type="text" class="form-control" id="bookAuthor"
                                                               name="bookAuthor"
                                                               value="{{$addBook->bookAuthor}}">
                                                    @endif
                                                </div>

                                                <div class="mb-4">
                                                    <h3>Book Publisher</h3>
                                                    @if(is_null($addBook))
                                                        <input type="text" class="form-control" id="bookPublisher"
                                                               name="bookPublisher">
                                                    @else
                                                        <input type="text" class="form-control" id="bookPublisher"
                                                               name="bookPublisher"
                                                               value="{{$addBook->bookPublisher}}">
                                                    @endif
                                                </div>

                                                <div class="mb-4">
                                                    <h3>ISBN</h3>
                                                    @if(is_null($addBook))
                                                        <input type="text" class="form-control" id="isbn"
                                                               name="isbn">
                                                    @else
                                                        <input type="text" class="form-control" id="isbn"
                                                               name="isbn"
                                                               value="{{$addBook->isbn}}">
                                                    @endif
                                                </div>

                                                <div class="mb-4">
                                                    <h3>Order At</h3>
                                                    @if(is_null($addBook))
                                                        <input type="text" class="form-control" id="orderAt"
                                                               name="orderAt">
                                                    @else
                                                        <input type="text" class="form-control" id="orderAt"
                                                               name="orderAt"
                                                               value="{{$addBook->orderAt}}">
                                                    @endif
                                                </div>

                                                <div class="mb-4">
                                                    <label for="bookPublishingDate"><h3>Publishing Date</h3></label>

                                                    <input class="mt-2" type="date" id="bookPublishingDate"
                                                           name="bookPublishingDate">
                                                </div>

                                                <div class="mb-4">
                                                    <label for="bookShopUrl"><h3>Shop URL</h3></label>
                                                    @if(is_null($addBook))
                                                        <textarea name="bookShopUrl" id="bookShopUrl"
                                                                  class="form-control" required
                                                                  autocomplete="bookShopUrl" autofocus></textarea>
                                                    @else
                                                        <textarea name="bookShopUrl" id="bookShopUrl"
                                                                  class="form-control" required
                                                                  autocomplete="bookShopUrl"
                                                                  autofocus>{{$addBook->bookShopUrl}}</textarea>
                                                    @endif
                                                    <span class="input-filed-error"
                                                          id="testTypeDescriptionError"></span>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="bookDetails"><h3>Details</h3></label>
                                                    @if(is_null($addBook))
                                                        <textarea name="bookDetails" id="bookDetails"
                                                                  class="form-control" required
                                                                  autocomplete="bookDetails" autofocus></textarea>
                                                    @else
                                                        <textarea name="bookDetails" id="bookDetails"
                                                                  class="form-control" required
                                                                  autocomplete="bookDetails"
                                                                  autofocus>{{$addBook->bookDetails}}</textarea>
                                                    @endif
                                                    <span class="input-filed-error"
                                                          id="testTypeDescriptionError"></span>
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
