<!-- resources/views/barangs/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
</head>
<body>
    <h1>Detail Barang</h1>

    <table border="1">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Satuan</th>
            <th>Harga Satuan</th>
            <th>Stok</th>
        </tr>
        <tr>
            <td>{{ $barang->KodeBarang }}</td>
            <td>{{ $barang->NamaBarang }}</td>
            <td>{{ $barang->Satuan }}</td>
            <td>{{ $barang->HargaSatuan }}</td>
            <td>{{ $barang->Stok }}</td>
        </tr>
    </table>

    <a href="{{ route('barang.index') }}">Kembali ke Daftar Barang</a>
</body>
</html>
