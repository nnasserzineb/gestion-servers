@extends('providers.layout')
@section('content')
<div class="card">
  <div class="card-header">Providers Page</div>
  <div class="card-body">

      <form action="{{ url('provider/' .$providers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$providrs->id}}" id="id" />
        <label>Name_provider</label></br>
        <input type="text" name="name_team" id="name" value="{{$providers->name_provider}}" class="form-control"></br>
        <label>Link</label></br>
        <input type="text" name="name_team" id="name" value="{{$providers->link}}" class="form-control"></br>
        <label>User</label></br>
        <input type="text" name="name_team" id="name" value="{{$providers->user}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="name_team" id="name" value="{{$providers->password}}" class="form-control"></br>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
