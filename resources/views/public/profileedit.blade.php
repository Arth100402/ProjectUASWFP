@extends('utama')
@section('isi')
<form method="POST" action="{{route('profile.update')}}">
    @csrf
    @method("PUT")
  <div class="form-group">
    <label >User Name</label>
    <input type="text" class="form-control" id="nameUser" name="nameuser" value="{{$data->name}}">
  </div>
  <div class="form-group">
    <label >User Email</label>
    <input type="text" class="form-control" id="emailUser" name="emailuser" value="{{$data->email}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection