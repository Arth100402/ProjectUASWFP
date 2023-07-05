@extends('utama')
@section('isi')
@if (session('status'))
<div class="alert alert-success">{{session('status')}}</div>
@endif

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <!-- Header-->
        <header class="bg-dark py-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Member List</h1>
            </div>
        </header><br>

<a href="{{ route('user.create') }}" class="btn btn-success">+ New Member</a><p>
    
<table id="myTable" class="table table-striped table-bordered">
    <thead class="thead-dark">
    <tr>
        <th>Member's Name</th>
        <th>Member's Email</th>
        <th>Member's Points</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($queryRaw as $d)
    <tr id="tr_{{$d->id}}">
        <td id="td_name_{{$d->id}}">{{ $d->name }}</td>
        <td id="td_email_{{$d->email}}">{{ $d->email}}</td>
        <td id="td_poin_{{$d->poin}}">{{ $d->poin }}</td>
        <td>
            <form method="POST" action="{{ route('user.destroy',$d->id) }}">
              @csrf
              @method('DELETE')
              <input type="submit" value="Hapus" class="btn btn-danger"
                      onclick="return confirm('Do You Agree to Delete with {{$d->id}} - {{$d->name}} ?')"></input>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog modal-wide">
     <div class="modal-content" id="msg">
     </div>
  </div>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Complete your gorgeous collection from us</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection

@section('javascript')

<script src="{{ asset('js/jquery.editable.min.js')}}" type="text/javascript"></script>
<script>$('#myTable').DataTable();</script>

@endsection