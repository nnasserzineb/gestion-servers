@extends('providers.layout')
@section('content') <br/>
    <div class="container p-3" style="margin: 10%">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Providers</div></br>
                   <form action="{{ url('/search') }}" method="GET">
                        <div class="search">
                            <input type="search" name="search" id="search" placeholder="search here .." class="form-controll">
                              <button class="btn btn-primary">search</button>
                         </div>
                    </form>
                    <div class="card-body">
                        <a href="{{ route('provider.create') }}" class="btn btn-success btn-sm" title="Add New Provider">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Name_provider</th>
                                        <th>Link</th>
                                        <th>User</th>
                                        <th>Password</th>
                                        <th>teams</th>
                                    </tr>
                                </thead>

                                @foreach($providers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name_provider }}</td>
                                        <td>{{ $item->link }}</td>
                                        <td>{{ $item->user }}</td>
                                        <td>{{ $item->password }}</td>
                                        <td>
                                            @foreach ($item->teams as $test )
                                            {{ $test->name_team }}

                                            @endforeach
                                        </td>



                                        <td>
                                            <a href="{{ route('provider.show',$item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('provider.edit',$item->id) }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ route('provider.destroy',$item->id) }}" accept-charset="UTF-8" style="display:inline">
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
