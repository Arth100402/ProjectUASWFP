@extends('utama')
@section('isi')
    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet" />
    </head>

    <body>
        <!-- Navigation-->
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Transaction List</h1>
            </div>
        </header><br>
        <p>

        <table id="myTable" class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Transaction Date</th>
                    <th>Customer Name</th>
                    <th>Total Transaction</th>
                    <th>Detailed Transaction</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $transaction->created_at }}</td>
                        <td>{{ $transaction->user ? $transaction->user->name : 'deleted customer' }}</td>
                        <td>Rp{{ $transaction->totalprice }}</td>
                        <td>
                            <a class="btn btn-default" data-toggle="modal" data-target='#myModalTransaction'
                                href='{{ route('transaction.show', $transaction->id) }}'>
                                Rincian Transaksi</a>
                        </td>
                    </tr>
                @endforeach
        </table>
    </body>

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
    @can('access_backend')
        <script>
            $('#myTable').DataTable();
        </script>
    @endcan

    </html>
@endsection
