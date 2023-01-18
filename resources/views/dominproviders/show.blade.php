@extends('dominproviders.layout')
@section('content')<br><br><br><br>
<div class="container">
<div class="card">
  <div class="card-header">Domain Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">name : {{ $domainprovider->name }}</h5>
        <p class="card-text"> username: {{ $domainprovider->username}}</p>
            <p class="card-text"> password: {{$domainprovider->password}}</p>

  </div>

    <hr>

  </div>
</div>
</div>
