

@extends('layouts.master')
@section('css')

    @section('title')
        Domainproviders
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Edit Domainprovider</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Domainproviders</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">

                        <thead>
                        <form action="{{ route('domainprovider.update',$domainprovider->id) }}" method="post">
                            @csrf
                            @method("PUT")

                            <label>name</label><br>
                            <input type="text" name="name" id="name" value="{{$domainprovider->name}}" class="form-control"><br>
                            <label>DueDate</label><br>
                            <input type="text" name="username" id="name" value="{{$domainprovider->username}}" class="form-control"><br>

                            <label>password</label>
                            <input type="text" name="password" id="name" value="{{$domainprovider->password}}" class="form-control"><br>

                            <input type="submit" value="Update" class="btn btn-success"><br>
                        </form>
                        </thead>


                    </div>            </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection













