
@extends('layouts.master')
@section('css')

    @section('title')
       Dommains
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> create Domain</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Domain</li>
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
                        <form action="{{ route('domain.store') }}" method="post">
                            @csrf
                            <label>domain_name</label></br>
                            <input type="text" name="domain_name"  class="form-control"></br>
                            <label>DueDate</label></br>
                            <input type="date" name="DueDate"  class="form-control"></br>

                            <label>domainprovider</label></br>
                            <select name="domainprovider_id">
                                <option selected>slect domainprovider</option>
                                @foreach($domainproviders as $item)

                                    <option value="{{$item->id}}">{{$item->name}}</option>

                                @endforeach
                            </select><br><br><br>



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


























