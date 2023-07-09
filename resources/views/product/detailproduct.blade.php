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
                <h1 class="display-4 fw-bolder">{{ $data->name }}</h1>
                <p class="lead fw-normal text-white-50 mb-0">{{ $data->brand ? $data->brand->name : 'No brand' }} - {{ $data->dimensi }}</p>
            </div>
        </header>
        <!-- Section-->
        <section>
            <div>
                <div>
                    <div>
                        @can('access-backend')
                            <div>
                                <div>
                                    <a class="btn btn-info" href="{{ route('product.edit', $data->id) }}">Ubah</a>
                                </div>

                                <div >
                                    <form method="POST" action="{{ route('product.destroy', $data->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Hapus" class="btn btn-danger"
                                            onclick="return confirm('Do You Agree to Delete with {{ $data->id }} - {{ $data->name }} ?')">
                                    </form>
                                </div>
                            </div>
                        @endcan
                        <div>
                            <!-- Product image-->
                            <div>
                                <img src="{{ asset('images/' . $data->image) }}" display='flex' margin-left='auto'
                                    margin-right='auto' width='50%' />
                            </div>
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder">Detail Product</h5>
                                    Category : {{ $data->category ? $data->category->name : 'No category' }} <br>
                                    Type : {{ $data->type ? $data->type->name : 'No category' }} <br>
                                    Stock : {{ $data->stock }} <br>
                                    Rp. {{ $data->price }}
                                </div>
                            </div>
                            @can('add-to-cart-permission')
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                                    href="{{ route('addToCart', $data->id) }}">Add To Cart</a></div>
                                </div>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </section>
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
