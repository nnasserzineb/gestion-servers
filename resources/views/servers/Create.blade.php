@extends('servers.layout')
@section('content')
</br></br></br></br></br></br>
<div class="card">
  <div class="card-header">Server Page</div>
  <div class="card-body">

      <form action="{{ route('server.store') }}" method="post">
       @csrf
        <label>Server_name</label></br>
        <input type="text" name="server_name"  class="form-control"></br>
          <label>Status</label></br>
          <input type="text" name="Status"  class="form-control"></br>
          <label>IP</label></br>
          <input type="number" name="IP"  class="form-control"></br>
          <label>Password</label></br>
          <input type="text" name="Password"  class="form-control"></br>
          <label>Domain</label></br>
          <select name="domain_id">
              <option selected>slect domain</option>
              @foreach($domains as $item)

                  <option value="{{$item->id}}">{{$item->domain_name}}</option>

              @endforeach
          </select><br><br><br>


          <label>DueDate</label></br>
          <input type="date" name="DueDate"  class="form-control"></br>

        <label>datecreation</label></br>
        <input type="date" name="datecreation"  class="form-control"></br>
          <label>Price</label></br>
          <input type="number" name="Price"  class="form-control"></br>
          <label>name_in_provider</label></br>
         <select name="provider_id">
             <option selected>slect provider</option>
             @foreach($providers as $item)

                 <option value="{{$item->id}}">{{$item->name_provider}}</option>

             @endforeach
         </select><br><br><br>

        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop
