@extends('layouts.admin_layout')

@section('content')
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">List of Books</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item active">List of Books</li>
            </ol>
            <div id="layoutSidenav_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-50">
                            <div class="card">
                                <div class="card-header">{{ __('Edit Contents') }}
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                    <a href="{{route('admin.award.create')}}" class="btn btn-primary">{{'Create'}}</a>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle">
                                            <thead>
                                            <tr>
                                                <th scope="col">Id</th>
                                                <th scope="col">Award</th>
                                                <th scope="col">Award Title</th>
                                                <th scope="col">Award Description</th>
                                                <th scope="col">Updated At</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(count($listAwards) > 0)
                                                @foreach($listAwards as $listAward)
                                                    <tr>
                                                        <th scope="row">{{$listAward->id}}</th>
                                                        <td>
                                                            <div class="form-group col-md-3 mt-3">
                                                                <div class="mb-4">
                                                                    <img src="{{url($listAward->award)}}"
                                                                         class="img-thumbnail">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mb-7">
                                                                <p class="p-heading">{{$listAward->awardTitle}}</p>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="mb-4">
                                                                <p class="p-heading">{{$listAward->awardDescription}}</p>
                                                            </div>
                                                        </td>
                                                        <td>{{$listAward->updated_at}}</td>
                                                        <td>
                                                            <div class="row-cols-lg-auto">

                                                                <div class="col-sm-2">

                                                                        <a href="{{route('admin.award.edit', $listAward->id)}}" class="btn btn-primary">{{'Edit'}}</a>

                                                                </div>
                                                                {!! "&nbsp;" !!}
                                                                <div class="col-sm-2">
                                                                    <form action="{{route('admin.award.delete', $listAward->id)}}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
