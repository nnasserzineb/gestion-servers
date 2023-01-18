
@extends('dominproviders.layout')
@section('content')
    </br></br></br></br></br></br>
<div class="card">
    <div class="card-header">Domain Page</div>
    <div class="card-body">

        <form action="{{route('domainprovider.store')}}" method="post">
            @csrf
            <label>name</label>
            <input type="text" name="name"  class="form-control"></br>
            <label>username</label>
            <input type="text" name="username"  class="form-control"></br>
            <label>password</label>
            <input type="text" name="password"  class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>


@endsection
