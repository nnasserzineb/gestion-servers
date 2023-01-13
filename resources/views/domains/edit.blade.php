@extends('domains.layout')
@section('content')<br><br><br><br>
<div class="card">
  <div class="card-header">Domain Edit  Page</div>
  <div class="card-body">

      <form action="{{ route('domain.update',$domain->id) }}" method="post">
    @csrf
        @method("PUT")

        <label>domain_name</label><br>
        <input type="text" name="domain_name" id="name" value="{{$domain->domain_name}}" class="form-control"><br>
          <label>DueDate</label><br>
          <input type="date" name="server_name" id="name" value="{{$domain->DueDate}}" class="form-control"><br>

          <label>name_in_server</label></br>
          <select name="server_id">
          <option selected>slect servers</option>
          @foreach($servers as $item)

              <option value="{{$item->id}}">{{$item->server_name}}</option>

              @endforeach
              </select><br><br>

          <input type="submit" value="Update" class="btn btn-success"><br>
    </form>

  </div>
</div>
@stop
