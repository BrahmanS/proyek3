<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
</head>
<body>

<h1>Edit Barang</h1>

<form action="{{ route('barang.update', $barang->KodeBarang) }}" method="post">
    @csrf
    @method('PUT')
    
    <label for="NamaBarang">Nama Barang:</label>
    <input type="text" name="NamaBarang" value="{{ $barang->NamaBarang }}" required><br>

    <label for="Satuan">Satuan:</label>
    <input type="text" name="Satuan" value="{{ $barang->Satuan }}" required><br>

    <label for="HargaSatuan">Harga Satuan:</label>
    <input type="text" name="HargaSatuan" value="{{ $barang->HargaSatuan }}" required><br>

    <label for="Stok">Stok:</label>
    <input type="text" name="Stok" value="{{ $barang->Stok }}" required><br>

    <button type="submit">Simpan Perubahan</button>
</form>

</body>
</html>
