@extends('layouts.app')
@section('beranda', 'active')
@section('content')
<style>
    * {
        overflow-x: hidden;
    }

    img:hover{
        opacity: 0.5;
    }

    .hero {
        height: 100vh;
        width: 100vw;
        background-image: url("img/gerbang3.jpeg");
        background-position: center;
        background-size: cover;
    }

    .hero-title-1 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 55px;
        text-align: center;
    }

    .hero-title-2 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 25px;
        line-height: 35px;
        text-align: center;
    }

    .hero-title-3 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 25px;
        line-height: 35px;
        text-align: center;
    }

    .section-2 h1 {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 64px;
        line-height: 96px;
        text-align: center;
        color: #474747;
    }

    .section-2 .image {
        position: relative;
        width: 350px;
        height: 350px;
        z-index: 1;
        text-decoration: none;
        overflow: hidden;
    }

    .section-2 .image1::before {
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        background-image: url("img/4.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
        filter: brightness(50%);
        z-index: 1;
    }

    .section-2 .image h2 {
        font-family: 'Montserrat';
        overflow: hidden;
        color: #ffffff;
        font-weight: bold;
        z-index: 3;
    }
</style>
<div>
    <div class="hero d-flex flex-column justify-content-center p-5 align-items-center text-center overflow-hidden gap-5">
        <h1 class="hero-title-1 text-center text-white fw-bold overflow-hidden w-75">
            Menyelenggarakan program pendidikan vokasi, penelitian, dan pengabdian kepada masyarakat di bidang penerbangan.
        </h1>
        <h3 class="hero-title-2 text-white overflow-hidden w-50">
            Taruna dan Taruni Poltekbang Surabaya belajar dan hidup di kampus,
            sehingga menjadikan kampus sebagai rumah kedua mereka
        </h3>
        <h3 class="hero-title-3 text-white overflow-hidden w-100">
            Education and training supported by facilities and infrastructures with modern technology
        </h3>
    </div>
    {{-- <img src="img/gerbang3.jpeg" alt="gerbang" style="width:100%;opacity:1"> --}}

    <div class="section-2 mt-5">
        <h1 class="">Look At Us</h1>
        <div class="d-flex justify-content-center align-items-center gap-5 w-100">
            <a href="" class="image image1 d-flex justify-content-center align-items-center">
                <h2 class="fw-bold shadow">About Us</h2>
            </a>
            <a href="" class="image image1 d-flex justify-content-center align-items-center">
                <h2 class="fw-bold shadow">About Us</h2>
            </a>
            <a href="" class="image image1 d-flex justify-content-center align-items-center">
                <h2 class="fw-bold shadow">About Us</h2>
            </a>
        </div>
    </div>

    <div class="Poltekbang Surabaya" style="
        top:190%;
        left:2%;
        position: absolute;

    ">
        <p style="font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 64px;
        line-height: 96px;
        text-align: center;

        color: #474747;">
        Poltekbang Surabaya</p>
    </div>

    <div style="
        top:200%;
        position: absolute;
    ">
        <img src="img/poltekbang.jpg" alt="about us" style="opacity: 1.0;filter:brightness(50%);width:185.9%">
    </div>

    <div style="
        top:210%;
        left:72%;
        position: absolute;

    ">
        <p style="
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 42px;
        line-height: 51px;
        text-align: center;

        color: #FFFFFF;">
        Lembaga Pendidikan</p>
    </div>

    <div style="
        top:220%;
        left:15%;
        right:3%;
        position: absolute;

    ">
        <p style="
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 29px;
        text-align: right;

        color: #FFFFFF;">
            Politeknik Penerbangan (Poltekbang) Surabaya (dh ATKP Surabaya) merupakan Lembaga Pendidikan Vokasi bidang aviasi yang Kredibel,
            baik dari lembaganya sendiri maupun dari dosen & pengajarnya. Terbukti dengan lulusannya yg handal dalam memberikan pelayanan pengendalian
            lalu lintas udara  di bandara yg sibuk di Indonesia dan sebagian dari alumninya sekarang sudah menduduki lower manager dalam usia yg relatif
            masih muda. <br><br>
            M. Khatim <br>
            - Direktur Operasi Airnav Indonesia</p>
    </div>

    <div style="
        top:270%;
        left:2%;
        position: absolute;

    ">
        <p style="
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 42px;
        line-height: 51px;
        text-align: center;

        color: #FFFFFF;">
        Professional</p>
    </div>

    <div style="
        top:280%;
        left:2%;
        rigth:5%;
        position: absolute;

    ">
        <p style="
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 24px;
        line-height: 29px;
        text-align: left;

        color: #FFFFFF;">
            Alumni ATKP/Poltekbang SBY terkenal memiliki sikap yang Baik, Respect dan peduli kepada orang lain <br> serta memiliki
            pengetahuan yang paripurna di bidangnya, sehingga dapat diterima di dunia Aviasi Indonesia. <br> <br>
            Alvin Surya Widiantara (Enroute 2007) <br>
            - Airnav Indonesia, Alumni RKP 2A Tahun 2009	</p>
    </div>

    <div class="Contact" style="
        top:325%;
        left:83%;
        position: absolute;

    ">
        <p style="font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 64px;
        line-height: 96px;
        text-align: center;

        color: #474747;">
        Contact </p>
    </div>

    <div style="
        top:335%;
        position: absolute;
        background-color:#002E3B;
        color:#99abb8;

    ">
        <p>OUR ADDRESS #ffffff;</p>
        font-family: Raleway;
        <p>Poltekbang Surabaya
            Jalan Jemur Andayani I No 73 Surabaya 60236 <br>
            Phone:62 31 8410871 <br>
            Fax: 62 31 8490005 <br>
            Email:mail@poltekbangsby.ac.id
        </p>
    </div>
</div>
@endsection
