<!-- resources/views/produk.blade.php -->
@extends('layout.master')

@section('content')
    <h1>Selamat datang di produk kami</h1>
    <div class="card mt-4">
        <div class="card-header">
            Daftar Produk
        </div>
        <div class="card-body">
            <button class="btn btn-primary mb-3">Tambah Data</button>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Laptop</td>
                        <td>25</td>
                        <td>Rp 5.000.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection