<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Total Transaction</th>
        <th>Transaction Date</th>
        {{-- <th>Detailed Transaction</th> --}}
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $d )
            <tr>
                <td>{{ $d->user->name }}</td>
                <td>{{ $d->transactions->totalprice }}</td>
                <td>{{ $d->transactions->created_at }}</td>
                {{-- <td><a class="btn btn-default" data-toggle="modal" href="#basic"
                    onclick="getDetailTransaction({{ $d->id }});">Rincian Transaksi</a></td> --}}
            </tr>
        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
