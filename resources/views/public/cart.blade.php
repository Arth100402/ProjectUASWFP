@extends('utama')
@section('isi')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Store - eCommerce HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="eCommerce HTML Template Free Download" name="keywords">
    <meta content="eCommerce HTML Template Free Download" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{asset('ecommercewfp/lib/slick/slick.css')}}" rel="stylesheet">
    <link href="{{asset('ecommercewfp/lib/slick/slick-theme.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('ecommercewfp/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active">Cart</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Cart Start -->
    <div class="cart-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-page-inner">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody class="align-middle">
                                    @if(session('cart'))
                                    @foreach (session('cart') as $id =>$details)
                                    <tr>
                                        <td>
                                            <div class="img">
                                                <p>{{$details['name']}}</p>
                                            </div>
                                        </td>
                                        <td>{{$details['price']}}</td>
                                        <td>
                                            <div class="qty">
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <input type="text" value="{{$details['quantity']}}">
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td class="price">{{$details['price'] *$details['quantity']}}</td>
                                        <td><button><i class="fa fa-trash"></i></button></td>
                                    </tr>
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cart-page-inner">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cart-summary">
                                    <div class="cart-content">
                                        <h1>Cart Summary</h1>
                                        @if(session('cart'))
                                        <?php
                                            $sum = array();
                                        ?>
                                        @foreach (session('cart') as $id =>$details)
                                        <?php
                                            array_push($sum,$details['price'] *$details['quantity'])
                                        ?>
                                            
                                        @endforeach
                                        <p>Sub Total<span>
                                        <?php
                                            echo array_sum($sum);
                                        ?>
                                        @endif
                                    </span></p>
                                    </div>
                                    <div class="cart-btn">
                                        <button action="{{route('checkout')}}">Checkout</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->
    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('ecommercewfp/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('ecommercewfp/lib/slick/slick.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('ecommercewfp/js/main.js')}}"></script>
</body>

</html>
@endsection