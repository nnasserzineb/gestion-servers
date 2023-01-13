@extends('domains.layout')
@section('content')<br><br><br><br>
<div class="container">
<div class="card">
  <div class="card-header">Domain Page</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-title">domain_name : {{ $domain->domain_name }}</h5>
        <p class="card-text"> : {{ $domain->DueDate}}</p>
            <p class="card-text"> : {{ $domain->server_id}}</p>

  </div>

    <hr>

  </div>
</div>
</div>
