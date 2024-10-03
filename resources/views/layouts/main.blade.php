<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Welcome' }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/ceritane_logo-removebg-preview.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="h-100">
    @include('layouts.navbar')

    @yield('content')

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

<style>
    body {
        padding-bottom: 50px;
        background-color: #F9F5F0;
        height: 100vh;
    }

    /* banner */
    #banner {
        position: relative;
        width: 100%;
        height: 80vh;
        /* Atur tinggi sesuai kebutuhan */
        overflow: hidden;
        background-color: #000000;
    }

    .banner-image {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .banner-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        /* Memastikan gambar mengisi area tanpa mengubah rasio aspek */
        opacity: 0.3;
        /* Mengatur opacity gambar menjadi 50% */
        display: block;
    }

    .banner-text {
        position: absolute;
        width: 100%;
        color: white;
        /* Ganti warna teks sesuai kebutuhan */
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        /* Memberi bayangan pada teks agar lebih jelas terlihat di gambar */
        text-align: center;
        /* Pusatkan teks */
        font-size: 7rem;
        /* Ukuran font untuk teks */
        left: 50%;
        transform: translateX(-50%);
        /* Pusatkan teks secara horizontal */
        z-index: 1;
        /* Teks berada di atas gambar */
        text-shadow: 3px black;
    }

    .banner-text:first-of-type {
        top: 15%;
        /* Posisi teks pertama (di atas) */
    }

    .banner-text:last-of-type {
        top: 30%
            /* Posisi teks kedua (di bawah) */
    }
    /* endbanner */
</style>