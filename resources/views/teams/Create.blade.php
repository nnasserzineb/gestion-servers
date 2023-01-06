@extends('teams.layout')
@section('content')
</br></br></br></br></br></br>
<div class="card">
  <div class="card-header">Team Page</div>
  <div class="card-body">

      <form action="{{ url('team') }}" method="post">
        {!! csrf_field() !!}
        <label>Name_team</label></br>
        <input type="text" name="name_team" id="name" class="form-control"></br>
        <label>Number_mailer</label></br>
        <input type="text" name="number_mailer" id="address" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
