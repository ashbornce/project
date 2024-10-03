@extends('layouts.main')

@section('content')
<div id="banner" class="container-fluid p-0">
    <div class="position-relative w-100 h-100">
        <img src="{{ asset('img/banner-anyaman-bambu.jpg') }}" class="banner-image img-fluid" alt="Banner Image">
        <div class="banner-text">
            <h1>Amboo
                <br>Traditional Tools
            </h1>
        </div>
    </div>
</div>

<div class="desk mt-3">

</div>
<style>
    #banner {
        position: relative;
        width: 100%;
        height: 100vh;
        /* Menjamin tinggi 100% dari viewport */
        overflow: hidden;
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
        /* Menjaga proporsi gambar */
        display: block;
        filter: brightness(20%);
        /* Mengurangi kecerahan gambar */
    }

    .banner-image::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 1);
        /* Overlay hitam penuh */
        z-index: 1;
    }

    .banner-image::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        /* Overlay transparan */
        z-index: 2;
    }

    .banner-text {
        position: absolute;
        top: 50%;
        /* Pusatkan vertikal */
        left: 50%;
        /* Pusatkan horizontal */
        transform: translate(-50%, -50%);
        /* Menjaga elemen tetap di tengah */
        width: 80%;
        /* Mengatur lebar menjadi 80% dari container */
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        text-align: center;
        z-index: 3;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    h1 {
        font-family: 'Raleway', sans-serif;
        text-shadow: 3px black;
        font-size: 5rem;
        /* Ukuran font default */
        margin: 0;
        /* Menghilangkan margin default pada h1 */
    }

    /* Responsif untuk perangkat lebih kecil */
    @media (max-width: 768px) {
        .banner-text {
            width: 90%;
            /* Mengatur lebar menjadi 90% dari container */
        }

        h1 {
            font-size: 4rem;
            /* Mengurangi ukuran font untuk perangkat kecil */
        }
    }

    /* Responsif untuk perangkat lebih kecil dari ponsel */
    @media (max-width: 576px) {
        h1 {
            font-size: 3rem;
            /* Mengurangi ukuran font untuk ponsel */
        }
    }
</style>
@endsection