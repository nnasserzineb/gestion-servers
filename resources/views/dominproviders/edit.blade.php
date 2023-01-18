@extends('dominproviders.layout')
@section('content')<br><br><br><br>
<div class="card">
  <div class="card-header">Edit  Page</div>
  <div class="card-body">

      <form action="{{ route('domainprovider.update',$domainprovider->id) }}" method="post">
    @csrf
        @method("PUT")

        <label>name</label><br>
        <input type="text" name="name" id="name" value="{{$domainprovider->name}}" class="form-control"><br>
          <label>DueDate</label><br>
          <input type="text" name="username" id="name" value="{{$domainprovider->username}}" class="form-control"><br>

         <label>password</label>
          <input type="text" name="password" id="name" value="{{$domainprovider->password}}" class="form-control"><br>

          <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>
@stop
