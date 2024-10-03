@extends('layouts.main')

@section('content')
<div class="container w-75 mt-5 pt-3 ps-3" id="container">
    <div class="title-a">
        <div class="row text-white mx-1">
            <div class="col-md-2">
                <h1>About</h1>
            </div>
        </div>
    </div>
    <div class="about_content px-1 m-2">
        <div class="col d-flex justify-content-start">
            <div class="coll w-75 p-3">
                <p>Amboo, toko UMKM yang mengkhususkan diri dalam anyaman bambu handmade dengan sentuhan tradisional dan
                    keahlian lokal. Kami dengan bangga menawarkan berbagai produk anyaman bambu yang diproduksi oleh
                    pengrajin berbakat di komunitas kami. Setiap item, mulai dari dekorasi rumah hingga peralatan
                    sehari-hari, dibuat dengan penuh perhatian terhadap detail dan kualitas, memastikan keindahan dan
                    ketahanan yang tak tertandingi. Kami percaya bahwa setiap anyaman bambu bukan hanya sekadar barang,
                    melainkan juga karya seni yang membawa kehangatan dan keunikan ke dalam rumah Anda.
                </p>
            </div>
            <div class="coll p-3 mx-auto">
                <div class="img">
                    <img src="{{ asset('img/gambar.jpeg') }}" alt="about image">
                </div>
            </div>
        </div>
        <div class="col colm">
            <div class="colo p-3">
                <p>Kami mengutamakan bahan-bahan berkualitas tinggi dan proses produksi yang ramah lingkungan. Dengan
                    menggunakan bambu sebagai bahan utama, kami tidak hanya menciptakan produk yang estetik dan
                    fungsional, tetapi juga berkontribusi pada pelestarian lingkungan. Produk kami dirancang untuk
                    memenuhi kebutuhan sehari-hari Anda dengan gaya yang elegan, sambil mengedepankan keberlanjutan dan
                    tanggung jawab sosial. Melalui setiap anyaman, kami ingin Anda merasakan sentuhan keaslian dan
                    kearifan lokal yang kami usung.</p>
                <p>
                    Sebagai toko UMKM, kami sangat menghargai dukungan Anda terhadap usaha kecil dan pengrajin lokal.
                    Dengan membeli produk dari kami, Anda tidak hanya mendapatkan barang berkualitas tinggi, tetapi juga
                    turut mendukung ekonomi lokal dan melestarikan tradisi kerajinan tangan yang berharga. Kami
                    mengundang Anda untuk menjelajahi koleksi kami dan menemukan berbagai produk anyaman bambu yang
                    dirancang untuk menambah sentuhan alami dan kehangatan dalam kehidupan Anda. Terima kasih telah
                    mendukung usaha kami dan bergabung dalam perjalanan kami untuk merayakan keindahan bambu dan
                    kerajinan lokal.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="visi-misi">
        <div class="title-vm px-2">
            <h1>Visi-Misi</h1>
        </div>
        <div class="isi px-3 m-2 mb-4">
            <div class="visi pb-3">
                <h4>Visi</h4>
                <p>Menjadi pemimpin dalam industri anyaman bambu handmade dengan menghadirkan produk berkualitas tinggi
                    yang
                    memadukan keindahan tradisional. Kami berkomitmen untuk memajukan kerajinan bambu lokal dan menjadi
                    inspirasi dalam desain yang ramah lingkungan serta estetika, sambil mendukung perekonomian komunitas
                    kami dan melestarikan tradisi budaya yang berharga.</p>
            </div>
            <div class="misi pb-2">
                <h4>Misi</h4>
                <p>1. Mendukung Pengrajin Lokal: Kami berusaha untuk memberdayakan pengrajin lokal dengan memberikan
                    kesempatan kerja yang adil dan mendukung pengembangan keterampilan mereka, sehingga setiap produk
                    yang kami tawarkan adalah hasil karya tangan yang berharga.
                </p>
                <p>2. Berkomitmen pada Keberlanjutan: Dengan memanfaatkan bahan bambu yang ramah lingkungan, kami
                    berupaya
                    untuk mengurangi dampak lingkungan dan mempromosikan praktik berkelanjutan dalam setiap aspek
                    produksi kami.
                </p>
                <p>3. Merayakan Tradisi dan Inovasi: Kami menggabungkan teknik anyaman tradisional dengan desain modern
                    untuk menciptakan produk yang tidak hanya menghormati warisan budaya tetapi juga memenuhi kebutuhan
                    dan selera masa kini.
                </p>
                <p>4. Memberikan Layanan Pelanggan Terbaik: Kami berkomitmen untuk menyediakan layanan pelanggan yang
                    ramah dan profesional, memastikan kepuasan pelanggan dan pengalaman berbelanja yang menyenangkan.
                </p>
            </div>
        </div>
    </div>

</div>

<style>
    /* General Styles */
    #container {
        background-color: #BF935E;
        border: solid 2px #684821;
        border-radius: 20px;
        padding: 15px;
        /* Add padding for better spacing */
    }

    .title-a,
    .title-vm {
        background-color: #684821;
        border: none solid;
        border-radius: 20px;
        padding: 10px;
        width: max-content;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        text-align: center;
        margin: 10px 0;
        /* Add margin for better spacing */
    }

    h1 {
        color: white;
        font-family: 'Raleway', sans-serif;
        font-size: 2.5rem;
        /* Adjust font size */
        margin: 0;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
    }

    .about_content {
        padding: 20px;
        border: none solid;
        border-radius: 20px;
        background-color: #F2E5D5;
    }

    .coll {
        width: 60%;
        margin: 0 auto;
        /* Center align */
    }

    img[alt="about image"] {
        width: 100%;
        /* Make image responsive */
        height: auto;
        /* Maintain aspect ratio */
        margin-left: 0;
        /* Remove margin for better alignment on smaller screens */
        border: none solid;
        border-radius: 10px;
    }

    .isi {
        padding: 20px;
        border: none solid;
        border-radius: 20px;
        background-color: #F2E5D5;
    }

    /* Media Queries for Responsiveness */
    @media (max-width: 992px) {
        .coll {
            width: 80%;
            /* Adjust width for tablets and smaller screens */
            margin: 0 auto;
            /* Center align */
        }

        img[alt="about image"] {
            width: 100%;
            height: auto;
            margin-left: 0;
        }

        .title-a,
        .title-vm {
            padding: 8px;
            /* Adjust padding */
        }

        h1 {
            font-size: 2rem;
            /* Adjust font size */
        }
    }

    @media (max-width: 768px) {
        #container {
            padding: 10px;
            /* Adjust padding for smaller screens */
        }

        .coll {
            width: 100%;
            /* Full width on smaller screens */
            margin: 0;
            /* Remove margin */
        }

        .about_content,
        .isi {
            padding: 15px;
            /* Adjust padding for smaller screens */
        }

        h1 {
            font-size: 1.8rem;
            /* Further adjust font size */
        }
    }

    @media (max-width: 576px) {

        .title-a,
        .title-vm {
            padding: 6px;
            /* Adjust padding */
        }

        h1 {
            font-size: 1.5rem;
            /* Further adjust font size */
        }

        .coll {
            width: 100%;
            /* Full width on small screens */
        }

        img[alt="about image"] {
            width: 100%;
            /* Full width */
        }
    }
</style>
@endsection