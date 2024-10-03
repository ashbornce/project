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
            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Nama Produk -->
                <div class="mb-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control"
                        value="{{ $produk->nama_produk }}" required>
                </div>

                <!-- Harga Produk -->
                <div class="mb-3">
                    <label for="harga_produk" class="form-label">Harga Produk</label>
                    <input type="number" id="harga_produk" name="harga_produk" class="form-control"
                        value="{{ $produk->harga_produk }}" required>
                </div>

                <!-- Gambar Produk -->
                <div class="mb-3">
                    <label for="gambar_produk" class="form-label">Gambar Produk</label>
                    <div class="d-flex align-items center">
                        <input type="file" id="gambar_produk" name="gambar_produk" class="form-control"
                            accept="image/*">
                        @if($produk->gambar_produk)
                        <div class="rounded">
                            <img src="{{ asset('storage/storage/' . $produk->gambar_produk) }}"
                                alt="{{ $produk->nama_produk }}" class="img-fluid mt-3" style="max-width: 100px;">
                        </div>
                        @endif
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Simpan</button>
            </form>
            <a href="{{ route('produk.index') }}" class="btn btn-secondary mt-3 w-100">Kembali</a>
        </div>
    </div>

</body>

</html>

<style>
    input[type='file'] {
        width: 40%;
        height: 2%;
        margin-right: 3rem;
    }
</style>
@endsection