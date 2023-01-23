







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
                <h4 class="mb-0"> create Server</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page server</li>
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
                        <form action="{{ route('server.store') }}" method="post">
                            @csrf
                            <label>Server_name</label></br>
                            <input type="text" name="server_name"  class="form-control"></br>
                            <label>Status</label></br>
                            <input type="text" name="Status"  class="form-control"></br>
                            <label>IP</label></br>
                            <input type="text" name="IP"  class="form-control"></br>
                            <label>Password</label></br>
                            <input type="text" name="Password"  class="form-control"></br>
                            <label>Domain</label></br>
                            <select name="domain_id">
                                <option selected>slect domain</option>
                                @foreach($domains as $item)

                                    <option value="{{$item->id}}">{{$item->domain_name}}</option>

                                @endforeach
                            </select><br><br><br>


                            <label>DueDate</label></br>
                            <input type="date" name="DueDate"  class="form-control"></br>

                            <label>datecreation</label></br>
                            <input type="date" name="datecreation"  class="form-control"></br>
                            <label>Price</label></br>
                            <input type="number" name="Price"  class="form-control"></br>
                            <label>name_in_provider</label></br>
                            <select name="provider_id">
                                <option selected>slect provider</option>
                                @foreach($providers as $item)

                                    <option value="{{$item->id}}">{{$item->name_provider}}</option>

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
















































