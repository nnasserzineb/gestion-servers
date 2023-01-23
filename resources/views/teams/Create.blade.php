
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
                <h4 class="mb-0"> create Team</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Team</li>
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
                            <form action="{{ route('team.store')  }}" method="post">
                                {!! csrf_field() !!}
                                <label>Name_team</label><br>
                                <input type="text" name="name_team" id="name" class="form-control"></br>
                                <label>Number_mailer</label></br>
                                <input type="text" name="number_mailer" id="address" class="form-control"></br>

                                <input type="submit" value="Save" class="btn btn-success"></br>
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















