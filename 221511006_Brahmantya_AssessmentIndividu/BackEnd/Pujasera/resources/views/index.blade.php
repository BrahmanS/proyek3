<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Barang</a>
              <a class="nav-link" href="{{ route('kasir.index') }}">Kasir</a>
              <a class="nav-link" href="{{ route('tenan.index') }}">Tenan</a>
            </div>
          </div>
        </div>
      </nav>
<h1>Daftar Barang</h1>

<table class="table">
    <tr>
        <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Satuan</th>
        <th>Harga Satuan</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>
    @foreach ($barangs as $barang)
    <tr>
        <td>{{ $barang->KodeBarang }}</td>
        <td>{{ $barang->NamaBarang }}</td>
        <td>{{ $barang->Satuan }}</td>
        <td>{{ $barang->HargaSatuan }}</td>
        <td>{{ $barang->Stok }}</td>
        <td>
            <a class="btn btn-primary" role="button" href="{{ route('barang.show', $barang->KodeBarang) }}">Lihat</a>
            <a class="btn btn-warning" role="button" href="{{ route('barang.edit', $barang->KodeBarang) }}">Edit</a>
            <form action="{{ route('barang.destroy', $barang->KodeBarang) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<a class="btn btn-success" role="button" href="{{ route('barang.create') }}">tambah</a>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
