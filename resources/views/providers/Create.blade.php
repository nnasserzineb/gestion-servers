

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
                <h4 class="mb-0"> create Provider</h4>
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
                        <form action="{{route('provider.store') }}" method="post">
                            {!! csrf_field() !!}
                            <label>Name_provider</label><br>

                            <input type="text" name="name_provider" id="name" class="form-control"></br>

                            <label for="exampleFormControlSelect1"> select Team</label>
                            @foreach($teams as $team)


                                <input type="checkbox" name="teams[]"value="{{ $team->id }}" id="">{{ $team['name_team'] }}


                                @endforeach
                                </br>

                                <label>Link</label></br>
                                <input type="text" name="link" id="address" class="form-control"></br>
                                <label>User</label></br>
                                <input type="text" name="user" id="address" class="form-control"></br>
                                <label>Password</label></br>
                                <input type="text" name="password" id="address" class="form-control"></br>

                                <input type="submit" value="Save" class="btn btn-success"></br>
                        </form>

                        </thead>
                        <tbody>


                        </tbody>

                    </div>            </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
    @endsection
    @section('js')

    @endsection
































