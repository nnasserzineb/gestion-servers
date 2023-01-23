

@extends('layouts.master')
@section('css')

    @section('title')
        Domains
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0"> Edit Domain</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Domains</li>
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

                        <form action="{{ route('domain.update',$domain->id) }}" method="post">
                            @csrf
                            @method("PUT")

                            <label>domain_name</label><br>
                            <input type="text" name="domain_name" id="name" value="{{$domain->domain_name}}" class="form-control"><br>
                            <label>DueDate</label><br>
                            <input type="date" name="server_name" id="name" value="{{$domain->DueDate}}" class="form-control"><br>

                            <label>name_in_server</label><br>
                            <select name="server_id">
                                <option selected>slect servers</option>
                                @foreach($servers as $item)

                                    <option value="{{$item->id}}">{{$item->server_name}}</option>

                                @endforeach
                            </select><br><br>

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



























