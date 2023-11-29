<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>

<h1>Tambah Barang</h1>

<form action="{{ route('barang.store') }}" method="post">
    @csrf
    <label for="KodeBarang">Kode Barang:</label>
    <input type="text" name="KodeBarang" required><br>

    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" name="NamaBarang" required><br>

    <label for="Satuan">Satuan:</label>
    <input type="text" name="Satuan" required><br>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="text" name="HargaSatuan" required><br>

    <label for="Stok">Stok:</label>
    <input type="text" name="Stok" required><br>

    <button type="submit">Tambah</button>
</form>

</body>
</html>
