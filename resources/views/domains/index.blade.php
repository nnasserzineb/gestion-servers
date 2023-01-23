
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
                <h4 class="mb-0"> Domain</h4>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                    <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                    <li class="breadcrumb-item active">Domain</li>
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
                        <form action="{{ route('search.domaine') }}" method="GET">
                            <div class="search">
                                <input type="search" name="search" id="search" placeholder="search here .." class="form-controll">
                                <button class="btn btn-primary">search</button>
                            </div>
                        </form>
                        <div class="card-body">
                            <a href="{{ route('domain.create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                                <i class="fa fa-plus" aria-hidden="true"></i> Add New
                            </a>
                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                    <th style="width: 10px">id</th>
                                    <th>domain_name</th>
                                    <th>DueDate</th>
                                    <th>domainprovider</th>
                                    <th>Actions</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($domains as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->domain_name }}</td>
                                        <td>{{ $item->DueDate}}</td>
                                        <td>{{$item->domainprovider->name}}</td>

                                        <td>
                                            <a href="{{ route('domain.show',$item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('domain.edit',$item->id ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ route('domain.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
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



















