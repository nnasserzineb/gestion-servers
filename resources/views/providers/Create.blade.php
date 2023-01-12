@extends('providers.layout')
@section('content')
</br></br></br></br></br></br>
<div class="card">
  <div class="card-header">Provider Page</div>
  <div class="card-body">

      <form action="{{route('provider.store') }}" method="post">
        {!! csrf_field() !!}
        <label>Name_provider</label></br>



         <label for="exampleFormControlSelect1"> select Team</label>
        @foreach($teams as $team)


        <input type="checkbox" name="teams[]"value="{{ $team->id }}" id="">{{ $team['name_team'] }}


       @endforeach
    </br>

        <label>Link</label></br>
        <input type="text" name="link" id="address" class="form-control"></br>
        <label>User</label></br>
        <input type="text" name="user" id="address" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="address" class="form-control"></br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
