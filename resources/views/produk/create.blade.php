@extends('layouts.main')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container mt-4 mb-5">
        <h1 class="mb-4">{{ $title }}</h1>

        <div class="container w-50">
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Nama Produk -->
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control">
                </div>

                <!-- Harga Produk -->
                <div class="mb-3">
                    <label for="harga_produk" class="form-label">Harga Produk</label>
                    <input type="number" id="harga_produk" name="harga_produk" class="form-control">
                </div>

                <!-- Gambar Produk -->
                <div class="mb-3">
                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                    <input type="file" id="gambar_produk" name="gambar_produk" class="form-control" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary mt-3 w-100">Kembali</a>
        </div>
    </div>

</body>

</html>

<style>
    input[type='file']{
        width: 40%;
    }
</style>
@endsection