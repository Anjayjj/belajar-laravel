<!-- resources/views/about.blade.php -->
@extends('layout.master')

@section('content')
    <h1>Halaman About</h1>
    <div class="alert alert-primary" role="alert">
        Halo, selamat datang {{ $nama }}! Umurmu {{ $umur }} dari {{ $alamat }}.
    </div>
@endsection