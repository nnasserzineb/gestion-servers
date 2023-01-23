
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
                <h4 class="mb-0"> Servers</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Page Server</li>
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
                        <form action="{{ route('search.server') }}" method="GET">
                            <div class="search">
                                <input type="search" name="search" id="search" placeholder="search here .." class="form-controll">
                                <button class="btn btn-primary">search</button>
                            </div>
                        </form>
                        <div class="card-body">
                            <a href="{{  route('server.create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                    <th style="width: 10px">id</th>
                                    <th>server_Name</th>
                                    <th>Status</th>
                                    <th>IP</th>
                                    <th>Password</th>
                                    <th>Domain</th>
                                    <th>DueDate</th>
                                    <th>datecreation</th>
                                    <th>Price</th>
                                    <th>provider</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($servers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->server_name }}</td>
                                        <td>{{ $item->Status }}</td>
                                        <td>{{ $item->IP }}</td>
                                        <td>{{ $item->Password }}</td>
                                        <td>
                                            {{ $item->domain->domain_name }}


                                        </td>
                                        <td>{{ $item->DueDate}}</td>
                                        <td>{{ $item->datecreation }}</td>
                                        <td>{{ $item->Price }}</td>
                                        <td>
                                            {{ $item->provider->name_provider }}


                                        </td>


                                        <td>
                                            <a href="{{ route('server.show',$item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('server.edit',$item->id ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ route('server.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row closed -->
        @endsection
        @section('js')

        @endsection




































