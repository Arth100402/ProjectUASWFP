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
    <label for="nameofProduct">Name Of Product</label>
    <input type="text" name="nameprod"
            class="form-control" id="nameProduct"
            aria-describedby="nameHelp" placeholder="Enter Name Of Product">
    <small id="nameHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="cateofProduct">Category Of Product</label>
    <select class="form-control" name="cateprod" id="cateProduct">
    @foreach($dataCate as $dc)
        <option value='{{$dc->id}}'>{{$dc->name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="typeofProduct">Type Of Product</label>
    <select class="form-control" name="typeprod" id="typeProduct">
    @foreach($dataType as $dt)
        <option value='{{$dt->id}}'>{{$dt->name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="brandofProduct">Brand Of Product</label>
    <select class="form-control" name="brandprod" id="brandProduct">
    @foreach($dataBrand as $db)
        <option value='{{$db->id}}'>{{$db->name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="priceofProduct">Price Of Product</label>
    <input type="number" name="priceprod" min=1000
            class="form-control" id="priceProduct"
            aria-describedby="priceHelp" placeholder="Enter Price Of Product">
    <small id="priceHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>  

  <div class="form-group">
    <label for="stockofProduct">Stock Of Product</label>
    <input type="number" name="stockprod" min=1
            class="form-control" id="stockProduct"
            aria-describedby="stockHelp" placeholder="Enter Stock Of Product">
    <small id="stockHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="dimensiofProduct">Dimension Of Product</label>  
    <select class="form-control" name="dimensiprod" id="dimensiProduct" placeholder="Enter Dimensi Of Product">
    <option value="XS">Extra Small</option>
    <option value="S">Small</option>
    <option value="M">Medium</option>
    <option value="L">Large</option>
    <option value="XL">Extra Large</option>
    <option value="All Size">All Size</option>
    <option value="30gr">30 Gram</option>
    <option value="50gr">50 Gram</option>
    <option value="100gr">100 Gram</option>
    <option value="150gr">150 Gram</option>
    <option value="200gr">200 Gram</option>
    <option value="250gr">250 Gram</option>
    <option value="500gr">500 Gram</option>
    <option value="30ml">30 Mililiter</option>
    <option value="50ml">50 Mililiter</option>
    <option value="100ml">100 Mililiter</option>
    <option value="150ml">150 Mililiter</option>
    <option value="200ml">200 Mililiter</option>
    <option value="250ml">250 Mililiter</option>
    <option value="500ml">500 Mililiter</option>
    </select>
  </div>

  <!-- <div class="form-group">
    <label for="imageofProduct">File Image Title Of Product</label>
    <input type="text" name="imageprod" min=1
            class="form-control" id="imageProduct"
            aria-describedby="imageHelp" placeholder="Enter File Image Title example:Hat1.jpg">
    <small id="imageHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div> -->

  <div class="form-group">
	  <label>Image of Product</label>
	  <input type="file" class="form-control"
	  id='image' name='image'>
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
