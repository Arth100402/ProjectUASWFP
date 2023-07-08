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
            <p style="margin: auto; text-align: center;" class="lead fw-normal">{{ $brand_name ?? ''}}</p>
            <!-- Section-->
            <section class="py-5">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach ($data as $product)
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" style="object-fit: cover;"
                                        src="{{ asset('images/' . $product->image) }}" height='200px' />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name -->
                                            <h5 class="fw-bolder"><a
                                                    href="{{ route('product.show', $product->id) }}">{{ $product->name }}</a>
                                            </h5>
                                            <!-- Product price-->
                                            <p>Rp{{ $product->price }}</p>
                                            @can('access-backend')
                                                <p>
                                                    <a class="btn btn-info"
                                                        href="{{ route('product.edit', $product->id) }}">Ubah</a>
                                                <p>

                                                <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" value="Hapus" class="btn btn-danger"
                                                        onclick="return confirm('Do You Agree to Delete with {{ $product->id }} - {{ $product->name }} ?')">
                                                </form>
                                            @endcan
                                        </div>
                                    </div>
                                    @can('add-to-cart-permission')
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="{{ route('addToCart', $product->id) }}">Add To Cart</a></div>
                                        </div>
                                    @endcan
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endcannot

        @can('access-backend')
            <a href="{{ route('product.create') }}" class="btn btn-success">+ New Products</a>
            <p>

            <table id="myTable" class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Product Brand</th>
                        <th>Product Category</th>
                        <th>Product Type</th>
                        <th>Product Price</th>
                        <th>Product Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $product)
                        <tr id="tr_{{ $product->id }}">
                            <td id="td_name_{{ $product->id }}">{{ $product->id }}</td>
                            <td id="td_name_{{ $product->id }}"><img class="card-img-top" style="object-fit: cover;"
                                    src="{{ asset('images/' . $product->image) }}" height='200px' /></td>
                            <td id="td_name_{{ $product->id }}">{{ $product->name }}</td>
                            <td id="td_name_{{ $product->id }}">{{ $product->brand?->name }}</td>
                            <td id="td_name_{{ $product->id }}">{{ $product->category?->name }}</td>
                            <td id="td_name_{{ $product->id }}">{{ $product->type?->name }}</td>
                            <td id="td_name_{{ $product->id }}">{{ $product->price }}</td>
                            <td id="td_name_{{ $product->id }}">{{ $product->stock }}</td>
                            <td>
                                <a class="btn btn-info" href="{{ route('product.edit', $product->id) }}">Ubah</a>

                                <form method="POST" action="{{ route('product.destroy', $product->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" value="Hapus" class="btn btn-danger"
                                        onclick="return confirm('Do You Agree to Delete with {{ $product->id }} - {{ $product->name }} ?')">
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

    </html>
@endsection
