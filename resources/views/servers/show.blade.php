
@extends('layouts.master')
@section('css')

    @section('title')
       Servers
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Show server</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page servers</li>
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
                            <h5 class="card-title">server_name: {{$server->server_name }}</h5>
                            <p class="card-text">Status : {{$server->Status }}</p>
                            <p class="card-text">IP : {{ $server->IP}}</p>
                            <p class="card-text">Password  : {{ $server->Password  }}</p>
                            <p class="card-text">Domain: {{ $server->domain_id }}</p>
                            <p class="card-text">DueDate : {{$server->DueDate }}</p>
                            <p class="card-text">datecreation  : {{ $server->datecreation  }}</p>
                            <p class="card-text">Price: {{ $server->Price }}</p>
                            <p class="card-text">provider : {{ $server->provider_id }}</p>

                            </thead>


                    </div>            </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection














