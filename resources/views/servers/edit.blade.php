@extends('teams.layout')
@section('content')
<div class="card">
  <div class="card-header">Servers Edit  Page</div>
  <div class="card-body">

      <form action="{{ route('server.update',$serve->id) }}" method="post">
    @csrf
        @method("PUT")

        <label>server_name</label><br>
        <input type="text" name="server_name" id="name" value="{{$serve->server_name}}" class="form-control"><br>
          <label>Status </label><br>
          <input type="text" name="server_name" id="name" value="{{$serve->Status }}" class="form-control"><br>
          <label>IP</label><br>
          <input type="number" name="server_name" id="name" value="{{$serve->IP}}" class="form-control"><br>
          <label>Password </label><br>
          <input type="text" name="server_name" id="name" value="{{$serve->Password }}" class="form-control"><br>
          <label>Domain</label><br>
          <input type="text" name="server_name" id="name" value="{{$serve->Domain}}" class="form-control"><br>
          <label>DueDate</label><br>
          <input type="date" name="server_name" id="name" value="{{$serve->DueDate}}" class="form-control"><br>
          <label>datecreation</label><br>
          <input type="date" name="server_name" id="name" value="{{$serve->datecreation}}" class="form-control"><br>
          <label>Price</label><br>
          <input type="date" name="server_name" id="name" value="{{$serve->Price}}" class="form-control"><br>
          <select name="provider_id">
              <option selected>slect provider</option>
              @foreach($providers as $item)

                  <option value="{{$item->id}}">{{$item->name_provider}}</option>

              @endforeach
          </select><br><br><br>

          <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>
@stop
