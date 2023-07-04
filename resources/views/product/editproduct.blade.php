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
                    <h1 class="display-4 fw-bolder">Edit Your Product</h1>
            </div>
        </header>

<br>

<form method="POST" action="{{route('product.update',$data->id)}}">
  @csrf
  @method("PUT")
  <div class="form-group">
    <label for="nameofProduct">Name Of Product</label>
    <input type="text" name="nameprod"
            class="form-control" id="nameProduct" value="{{$data->name}}"
            aria-describedby="nameHelp" placeholder="Enter Name Of Product">
    <small id="nameHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="cateofProduct">Category Of Product</label>
    <select class="form-control" name="cateprod" id="cateProduct" value="{{$data->category_id}}">
    @foreach($dataCate as $dc)
    @php($selected = '')
    @if ($data->category_id == $dc->id)
        @php($selected = 'selected="selected"')
    @endif
    <option value='{{$dc->id}}' {{$selected}}>{{$dc->name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="typeofProduct">Type Of Product</label>
    <select class="form-control" name="typeprod" id="typeProduct" value="{{$data->type_id}}">
    @foreach($dataType as $dt)
    @php($selected = '')
    @if ($data->type_id == $dt->id)
        @php($selected = 'selected="selected"')
    @endif
    <option value='{{$dt->id}}' {{$selected}}>{{$dt->name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="typeofProduct">Brand Of Product</label>
    <select class="form-control" name="brandprod" id="brandProduct" value="{{$data->brand_id}}">
    @foreach($dataBrand as $db)
    @php($selected = '')
    @if ($data->brand_id == $db->id)
        @php($selected = 'selected="selected"')
    @endif
    <option value='{{$db->id}}' {{$selected}}>{{$db->name}}</option>
    @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="priceofProduct">Price Of Product</label>
    <input type="number" name="priceprod" min=1
            class="form-control" id="priceProduct" value="{{$data->price}}"
            aria-describedby="priceHelp" placeholder="Enter Price Of Product">
    <small id="priceHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="stockofProduct">Stock Of Product</label>
    <input type="number" name="stockprod" min=1
            class="form-control" id="stockProduct" value="{{$data->stock}}"
            aria-describedby="stockHelp" placeholder="Enter Stock Of Product">
    <small id="stockHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="dimensiofProduct">Dimension Of Product</label>
    <input type="text" name="dimensiprod"
            class="form-control" id="dimensiProduct" value="{{$data->dimensi}}"
            aria-describedby="dimensiHelp" placeholder="Enter Name Of Product">
    <small id="dimensiHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>

  <div class="form-group">
    <label for="imageofProduct">File Image Title Of Product</label>
    <input type="text" name="imageprod" min=1
            class="form-control" id="imageProduct" value="{{$data->image}}"
            aria-describedby="imageHelp" placeholder="Enter File Image Title example:Hat1.jpg">
    <small id="imageHelp" class="form-text text-muted">Please Write Down Your Data Here.</small>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <p>
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
