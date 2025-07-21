@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Data Barang</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Meja</td>
                <td>Perabot</td>
                <td>12</td>
            </tr>
            <tr>
                <td>Kursi</td>
                <td>Perabot</td>
                <td>30</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
