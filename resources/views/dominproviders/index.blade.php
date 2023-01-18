@extends('dominproviders.layout')
@section('content') <br/>
    <div class="container p-3" style="margin: 10%">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Servers</div><br>
                    <form action="" method="GET">
                        <div class="search">
                            <input type="search" name="search" id="search" placeholder="search here .." class="form-controll">
                            <button class="btn btn-primary">search</button>
                        </div>
                    </form>
                    <div class="card-body">
                        <a href="{{ route('domainprovider.create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>username</th>
                                        <th>password</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody >
                                @foreach($domainproviders as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->username}}</td>
                                        <td>{{ $item->password}}</td>



                                        <td>
                                            <a href="{{ route('domainprovider.show',$item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('domainprovider.edit',$item->id ) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ route('domainprovider.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
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
    </div>

@endsection