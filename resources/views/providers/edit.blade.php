

@extends('layouts.master')
@section('css')

    @section('title')
       Providers
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit Provider</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Provider</li>
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
                        <form action="{{ route('provider.update',$provider->id) }}" method="post">
                            {!! csrf_field() !!}
                            @method("PATCH")
                            <input type="hidden" name="id" id="id" value="{{$provider->id}}" id="id" />
                            <label>Name_provider</label><br>
                            <input type="text" name="name_team" id="name" value="{{$provider->name_provider}}" class="form-control"></br>
                            <label>Link</label></br>
                            <input type="text" name="name_team" id="name" value="{{$provider->link}}" class="form-control"></br>
                            <label>User</label></br>
                            <input type="text" name="name_team" id="name" value="{{$provider->user}}" class="form-control"></br>
                            <label>Password</label></br>
                            <input type="text" name="name_team" id="name" value="{{$provider->password}}" class="form-control"></br>


                            <input type="submit" value="Update" class="btn btn-success"></br>
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




















