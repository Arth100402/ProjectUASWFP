@extends('utama')
@section('isi')
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
                    <h1 class="display-4 fw-bolder">Create Your Product</h1>
            </div>
        </header>

<br>

<form enctype="multipart/form-data" role="form" method="POST" action="{{route('product.store')}}">
  @csrf
  <div class="form-group">
    <label for="nameofMember">Name Of Member</label>
    <input type="text" name="namemember"
            class="form-control" id="nameMember"
            aria-describedby="nameHelp" placeholder="Enter Name Of Member">
    <small id="nameHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="emailofMember">Email Of Member</label>
    <input type="text" name="emailmember"
            class="form-control" id="emailMember"
            aria-describedby="emailHelp" placeholder="Enter Email Of Member">
    <small id="emailHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="passofMember">Password Of Member</label>
    <input type="text" name="passmember"
            class="form-control" id="passMember"
            aria-describedby="passHelp" placeholder="Enter Password Of Member">
    <small id="passHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="poinofMember">Poin Of Member</label>
    <input type="number" name="poinmember" min=1
            class="form-control" id="poinMember"
            aria-describedby="poinHelp" placeholder="Enter Poin Of Member">
    <small id="poinHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="roleofMember">Role Of Member</label>
    <select class="form-control" name="rolemember" id="roleMember">
    @foreach($dataRole as $dr)
        <option value='{{$dr->id}}'>{{$dr->name}}</option>
    @endforeach
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button><p>
</form>        
        
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
