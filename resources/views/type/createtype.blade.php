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
                    <h1 class="display-4 fw-bolder">Create Type</h1>
            </div>
        </header>

<br>
<form method="POST" action="{{route('type.store')}}">
  @csrf
  <div class="form-group">
    <label for="nameofType">Name Of Type</label>
    <input type="text" name="nametype"
            class="form-control" id="nameType"
            aria-describedby="nameHelp" placeholder="Enter Name Of Type">
    <small id="nameHelp" class="form-text text-muted">Please Write Down Your Type.</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button><br>
</form>










        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Complete your gorgeous clothing collection from us</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
@endsection
