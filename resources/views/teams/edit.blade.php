
@extends('layouts.master')
@section('css')

    @section('title')
  Teams
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Edit Team</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Teams</li>
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
                            <form action="{{ url('team/' .$teams->id) }}" method="post">
                                {!! csrf_field() !!}
                                @method("PATCH")
                                <input type="hidden" name="id" id="id" value="{{$teams->id}}" id="id" />
                                <label>Name_team</label><br>
                                <input type="text" name="name_team" id="name" value="{{$teams->name_team}}" class="form-control"><br>
                                <label>Number_mailer</label><br>
                                <input type="text" name="number_mailer" id="address" value="{{$teams->number_mailer}}" class="form-control"></br>

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











