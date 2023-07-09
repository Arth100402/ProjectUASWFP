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
            <h1 class="display-4 fw-bolder">Create Staff</h1>
        </div>
    </header>

    <br>

    <form enctype="multipart/form-data" role="form" method="POST" action="{{route('staff.store')}}">
        @csrf
        <div class="form-group">
            <label for="nameofstaff">Name Of Staff</label>
            <input type="text" name="namestaff" class="form-control" id="namestaff" aria-describedby="nameHelp" placeholder="Enter Name Of staff">
            <small id="nameHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
        </div>

        <div class="form-group">
            <label for="emailofstaff">Email Of staff</label>
            <input type="text" name="emailstaff" class="form-control" id="emailstaff" aria-describedby="emailHelp" placeholder="Enter Email Of staff">
            <small id="emailHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
        </div>

        <div class="form-group">
            <label for="passofstaff">Password Of staff</label>
            <input type="text" name="passstaff" class="form-control" id="passstaff" aria-describedby="passHelp" placeholder="Enter Password Of staff">
            <small id="passHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
        </div>

        <div class="form-group">
            <label for="poinofstaff">Poin Of staff</label>
            <input type="number" name="poinstaff" min=0 class="form-control" id="poinstaff" aria-describedby="poinHelp" placeholder="Enter Poin Of staff">
            <small id="poinHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
        </div>

        <div class="form-group">
            <label for="roleofstaff">Role Of staff</label>
            <select class="form-control" name="rolestaff" id="rolestaff">
                <option value='{{$data->id}}'>{{$data->name}}</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <p>
    </form>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Complete your gorgeous collection from us</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
@endsection