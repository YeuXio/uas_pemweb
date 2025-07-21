<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <form method="POST" action="{{ url('/barang') }}">
        @csrf
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Kode:</label>
        <input type="text" name="kode" required><br>

        <label>Stok:</label>
        <input type="number" name="stok" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
