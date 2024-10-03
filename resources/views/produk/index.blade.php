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

    <div class="container-fluid">
        <div class="row">
            <!-- Main Content -->
            <div class="col-md-4 col-lg-10">
                <div class="container mt-4">
                    <h1 class="text-center">Semua {{ $title }}</h1>

                    @if(Auth::user())
                    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>
                    @endif

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="row">
                        @foreach($produk as $item)
                        <div class="col-sm-4 mb-4">
                            <div class="card">
                                @if($item->gambar_produk)
                                <img src="{{ asset('storage/storage/' . $item->gambar_produk) }}" class="card-img-top"
                                    alt="{{ $item->nama_produk }}">
                                @else
                                <div class="card-img-top bg-secondary text-white text-center py-5">
                                    No image
                                </div>
                                @endif
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                    <p class="card-text">Harga: Rp {{ number_format($item->harga_produk, 0, ',', '.') }}
                                    </p>
                                    @if(Auth::user())
                                    <a href="{{ route('produk.edit', $item->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('produk.destroy', $item->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                    @endif
                                    <a href="https://wa.me/085291239658?text=Apakah {{ $item->nama_produk }} masih ada?"
                                        class="btn btn-sm btn-success">Pesan</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    {{ $produk->links() }}
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar">
                <h3 class="ms-2 mt-5"><a class="navbar-brand" href="#">Kategori</a></h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Alat masak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Alat Berkebun</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fashion</a>
                    </li>
                </ul>
            </div>
            <!-- End of Sidebar -->
        </div>
    </div>

</body>

</html>

<style>
    /* General Styles */
    .card {
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card-img-top {
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        flex: 1;
    }

    .card-img-top.bg-secondary {
        height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }

    .sidebar {
        background-color: #f8f9fa;
        padding: 1rem;
        border-left: 1px solid #dee2e6;
        height: 100vh;
        position: sticky;
        top: 0;
        width: auto;
    }

    .sidebar h3 {
        margin-top: 0;
    }

    .sidebar .nav-link {
        color: #000;
    }

    .sidebar .nav-link.active {
        font-weight: bold;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 992px) {
        .col-md-4 {
            display: none;
            /* Hide sidebar on medium screens and below */
        }

        .col-lg-10 {
            width: 100%;
            /* Full width for content area */
        }

        .card-img-top {
            height: 150px;
            /* Adjust image height for smaller screens */
        }

        .sidebar {
            display: none;
            /* Hide sidebar on medium screens and below */
        }
    }

    @media (max-width: 768px) {
        .card-img-top {
            height: 120px;
            /* Adjust image height for smaller screens */
        }

        .container-fluid {
            padding: 0 10px;
            /* Adjust container padding */
        }

        .col-md-4,
        .col-lg-10 {
            width: 100%;
            /* Full width for columns */
            padding: 0;
            /* Remove padding */
        }

        .sidebar {
            position: relative;
            /* Make sidebar relative */
            height: auto;
            /* Auto height for sidebar */
            border-left: none;
            /* Remove left border */
        }

        .sidebar ul {
            padding-left: 0;
            /* Remove padding on sidebar list */
        }

        .sidebar .nav-link {
            font-size: 0.9rem;
            /* Adjust font size */
        }
    }

    @media (max-width: 576px) {
        .card-img-top {
            height: 100px;
            /* Further adjust image height for very small screens */
        }

        .container-fluid {
            padding: 0 5px;
            /* Adjust container padding */
        }

        .sidebar .nav-link {
            font-size: 0.8rem;
            /* Further adjust font size */
        }

        .card-body {
            font-size: 0.9rem;
            /* Adjust font size in card body */
        }
    }
</style>


@endsection