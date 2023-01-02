@extends('teams.layout')
@section('content')
<div class="card">
  <div class="card-header">Teams Page</div>
  <div class="card-body">

      <form action="{{ url('team/' .$teams->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$teams->id}}" id="id" />
        <label>Name_team</label></br>
        <input type="text" name="name_team" id="name" value="{{$teams->name_team}}" class="form-control"></br>
        <label>Number_mailer</label></br>
        <input type="text" name="number_mailer" id="address" value="{{$teams->number_mailer}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
