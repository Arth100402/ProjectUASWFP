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
        <p>
            <!-- Navigation-->
            <!-- Header-->
        <header class="bg-dark py-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">Find Your Skincare, Make-up, and Outfit</p>
            </div>
        </header><br>

        @cannot('access-backend')
            <!-- Section-->
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($data as $d)
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name -->
                                            <h5 class="fw-bolder">
                                                <a href="{{ route('product.bycategory', $d->id) }}">{{ $d->name }}</a>
                                            </h5>
                                            <p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endcannot

        @can('access-backend')
            <a href="{{ route('category.create') }}" class="btn btn-success">+ New Category</a>
            <p>

            <table id="myTable" class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $category)
                        <tr id="tr_{{ $category->id }}">
                            <td id="td_name_{{ $category->id }}">{{ $category->id }}</td>
                            <td id="td_name_{{ $category->id }}">{{ $category->name }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('category.edit', $category->id) }}">Ubah</a>
                                <p>

                                <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Hapus" class="btn btn-danger"
                                        onclick="return confirm('Do You Agree to Delete {{ $category->id }} - {{ $category->name }} ?')">
                                </form>
                            </td>
                        </tr>
                    @endforeach
            </table>
        @endcan
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
    <script>
        $('#myTable').DataTable();
    </script>

    </html>
@endsection
