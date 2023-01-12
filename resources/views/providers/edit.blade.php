@extends('providers.layout')
@section('content')
<div class="card">
  <div class="card-header">Providers Page</div>
  <div class="card-body">

      <form action="{{ route('provider.update',$provider->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$provider->id}}" id="id" />
        <label>Name_provider</label><br>
        <input type="text" name="name_team" id="name" value="{{$provider->name_provider}}" class="form-control"></br>
        <label>Link</label></br>
        <input type="text" name="name_team" id="name" value="{{$provider->link}}" class="form-control"></br>
        <label>User</label></br>
        <input type="text" name="name_team" id="name" value="{{$provider->user}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="name_team" id="name" value="{{$provider->password}}" class="form-control"></br>


        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
