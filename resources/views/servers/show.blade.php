@extends('teams.layout')
@section('content') <br><br><br><br>
    <div class="container">
<div class="card">
  <div class="card-header">show servers </div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">server_name: {{$server->server_name }}</h5>
            <p class="card-text">Status : {{$server->Status }}</p>
            <p class="card-text">IP : {{ $server->IP}}</p>
            <p class="card-text">Password  : {{ $server->Password  }}</p>
            <p class="card-text">Domain: {{ $server->Domain }}</p>
            <p class="card-text">DueDate : {{$server->DueDate }}</p>
            <p class="card-text">datecreation  : {{ $server->datecreation  }}</p>
            <p class="card-text">Price: {{ $server->Price }}</p>
            <p class="card-text">provider : {{ $server->provider_id }}</p>

  </div>

    <hr>

  </div>
</div>
    </div>
