@extends('teams.layout')
@section('content')
<div class="card">
  <div class="card-header">Teams Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">Name_team : {{ $teams->name_team }}</h5>
        <p class="card-text">Number_mailer : {{ $teams->number_mailer }}</p>

  </div>

    </hr>

  </div>
</div>
