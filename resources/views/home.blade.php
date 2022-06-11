@extends('layouts.app')
@section('nav-position', 'fixed-top')
@section('beranda', 'active')
@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .hero1 {
        height: 100vh;
        width: 100vw;
        /* background-image: url("img/gerbang3.jpeg"); */
        background-position: center;
        background-size: cover;
        background-image:
            linear-gradient(to right, rgba(0,0,0,.3), rgba(0,0,0,.3)),
            url("img/gerbang3.jpeg")
        ;
    }

    .hero1-title-1 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 3vw;
        text-align: center;
    }

    .hero1-title-2 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 1.5vw;
        line-height: 35px;
        text-align: center;
    }

    .hero1-title-3 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 1.5vw;
        line-height: 35px;
        text-align: center;
    }

    @media screen and (max-width: 420px) {
        .hero1 {
            padding: 0 !important;
        }

        .hero1-title-1 {
            font-size: 1.5rem;
            overflow: visible;
            width: 90% !important;
            /* background-color: red; */
        }

        .hero1-title-2 {
            font-size: 1rem;
            overflow: visible;
            width: 90% !important;
            /* background-color: red; */
        }


        .hero1-title-3 {
            font-size: 1rem;
            overflow: visible;
            width: 90% !important;
            /* background-color: red; */
        }
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
        width: 450px;
        height: 450px;
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

    .section-2 .image2::before {
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        background-image: url("img/5.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
        filter: brightness(50%);
        z-index: 1;
    }

    .section-2 .image3::before {
        position: absolute;
        content: '';
        width: 100%;
        height: 100%;
        background-image: url("img/6.jpg");
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

    .section-2 h2 {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 96px;
        text-align: left;
        color: #474747;
        margin-left: 2%;
    }

    .section-3 h1 {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 70px;
        margin-bottom: 10px;
        text-align: left;
        color: #474747;
    }

    @media screen and (max-width: 420px) {
        .section-2 h1 {
            font-size: 2.5rem;
        }

        .section-3 h1 {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 700;
            font-size: 2.5rem;
            line-height: 60px;
            text-align: center;
            color: #474747;
        }

        .section-2 .main {
            display: flex !important;
            flex-direction: column !important;
            gap: 0 !important;
        }

        .section-2 .main h2 {
            font-size: 2rem;
        }
    }

    .hero2 {
        height: 100vh;
        width: 100vw;
        background-image:
            linear-gradient(to right, rgba(0,0,0,.5), rgba(0,0,0,.5)),
            url("img/poltekbang.jpg")
        ;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        /* background-image: url("img/poltekbang.jpg"); */
    }

    .hero2-title-1 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 2vw;
        text-align: right;
        margin-right:-20%;
    }

    .hero2-title-2 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 1.3vw;
        text-align: right;
        margin-right:-20%;
    }

    .hero2-title-3 {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 2vw;
        text-align: left;
        margin-left:-20%;
        margin-top:3%;
    }

    .hero2-title-4 {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 1.3vw;
        text-align: left;
        margin-left:-20%;
    }

    @media screen and (max-width: 420px) {
        .hero2 {
            padding: 0px !important;
        }

        .hero2 h1,
        .hero2 h3 {
            /* text-align: center !important; */
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        .hero2 h1 {
            text-align: center !important;
        }

        .hero2 h3 {
            text-align: justify !important;
        }

        .hero2-title-1 {
            font-size: 1.5rem;
            text-align: center !important;
            width: 100% !important;
            /* background-color: red; */
        }

        .hero2-title-2 {
            font-size: .85rem;
        }

        .hero2-title-3 {
            font-size: 1.5rem;
        }

        .hero2-title-4 {
            font-size: .85rem;
        }
    }

    .section-2 .contact {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 96px;
        text-align: right;
        color: #474747;
        margin-right:2%
    }

    .hero3{
        height: 70vh;
        width: 100vw;
        background-color: #002E3B;
        background-position: center;
        background-size: cover;
    }

    .hero3-title-1 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-size: 24px;
        text-align: left;
        position: relative;
        z-index: 1;
        /* background-color: red; */
    }

    .hero3-title-1::after {
        content: '';
        position: absolute;
        background-color: #ffffff;
        width: 12%;
        height: 5px;
        bottom: 0;
        left: 0;
    }

    .hero3-title-2 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-size: 20px;
        text-align: left;
        color:#99abb8;
    }

    .hero3-title-3 {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        font-size: 20px;
        text-align: left;
        color:#99abb8;
    }

    @media screen and (max-width: 420px) {
        .section-2 .contact {
            font-size: 2.5rem;
            line-height: 60px;
            text-align: center;
            color: #474747;
            margin-right: 0%
        }
        .hero3 {
            display: flex !important;
            flex-direction: column !important;
            gap: 0;
            height: 100vh;
        }

        .hero3 div:nth-child(1) {
            width: 100% !important;
            height: 50% !important;
        }

        .hero3 div:nth-child(2) {
            /* overflow-y: visible !important; */
            margin-top: -25px !important;
            width: 100% !important;
            height: 50% !important;
            /* background-color: yellow; */
            display: flex !important;
            flex-direction: column !important;
            align-items: center;
            gap: 0px !important;
        }

        .hero3 div:nth-child(2) img {
            margin-bottom: 20px;
        }

        .hero3 div:nth-child(2) h1,
        .hero3 div:nth-child(2) h3,
        .hero3 div:nth-child(2) p {
            text-align: center;
            overflow: visible !important;
        }

        .hero3-title-1::after {
            display: none;
        }
    }
</style>
<div class="" style="overflow-x: hidden;">
    <div class="hero1 d-flex flex-column justify-content-center p-5 align-items-center text-center overflow-hidden gap-5">
        <h1 class="hero1-title-1 text-center text-white fw-bold overflow-hidden w-75 mt-5">
            Menyelenggarakan program pendidikan vokasi, penelitian, dan pengabdian kepada masyarakat di bidang penerbangan.
        </h1>
        <h3 class="hero1-title-2 text-white overflow-hidden w-50">
            Taruna dan Taruni Poltekbang Surabaya belajar dan hidup di kampus,
            sehingga menjadikan kampus sebagai rumah kedua mereka
        </h3>
        <h3 class="hero1-title-3 text-white overflow-hidden w-100">
            Education and training supported by facilities and infrastructures with modern technology
        </h3>
    </div>

    <div class="section-2 mt-5">
        <h1 class="">Look At Us</h1>
        <div class="d-flex justify-content-center align-items-center gap-5 w-100 main">
            <a href="#about" class="image image1 d-flex justify-content-center align-items-center">
                <h2 class="fw-bold shadow">About Us</h2>
            </a>
            <a href="/incoming-message" class="image image2 d-flex justify-content-center align-items-center">
                <h2 class="fw-bold shadow">Message</h2>
            </a>
            <a href="#contact" class="image image3 d-flex justify-content-center align-items-center">
                <h2 class="fw-bold shadow">Contact</h2>
            </a>
        </div>
    </div>
    <div id="about" class="pt-5">
        <div class="section-3 mt-5">
            <h1 class="">Poltekbang Surabaya</h1>
        </div>

        <div class="hero2 d-flex flex-column justify-content-center p-5 align-items-center overflow-hidden gap-5">
            <h1 class="hero2-title-1 text-right text-white fw-bold w-75">
                Lembaga Pendidikan
            </h1>
            <h3 class="hero2-title-2 text-right text-white w-75">
                Politeknik Penerbangan (Poltekbang) Surabaya (dh ATKP Surabaya) merupakan Lembaga Pendidikan Vokasi bidang aviasi yang Kredibel,
                baik dari lembaganya sendiri maupun dari dosen & pengajarnya. Terbukti dengan lulusannya yg handal dalam memberikan pelayanan pengendalian
                lalu lintas udara  di bandara yg sibuk di Indonesia dan sebagian dari alumninya sekarang sudah menduduki lower manager dalam usia yg relatif
                masih muda. <br><br>
                M. Khatim <br>
                - Direktur Operasi Airnav Indonesia
            </h3>
            <h1 class="hero2-title-3 text-left text-white fw-bold w-75">
                Professional
            </h1>
            <h3 class="hero2-title-4 text-left text-white w-75">
                Alumni ATKP/Poltekbang SBY terkenal memiliki sikap yang Baik, Respect dan peduli kepada orang lain <br> serta memiliki
                pengetahuan yang paripurna di bidangnya, sehingga dapat diterima di dunia Aviasi Indonesia. <br> <br>
                Alvin Surya Widiantara (Enroute 2007) <br>
                - Airnav Indonesia, Alumni RKP 2A Tahun 2009
            </h3>
        </div>
    </div>

    <div class="pt-5 mb-0" id="contact">
        <div class="section-2 mt-5">
            <h2 class="contact">Contact</h2>
        </div>

        <div class="hero3 d-inline-flex p-0 align-items-center gap-5">
            <div class="col-8 h-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1808770536636!2d112.73394434867716!3d-7.333573194681593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb472767ef69%3A0xa9dfcc58e1aa9194!2sPoltekbang%20Surabaya%2C%20Siwalankerto%2C%20Kec.%20Wonocolo%2C%20Kota%20SBY%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1653315917888!5m2!1sid!2sid"
                width="100%" height="100%" style="border:0;" allowfullscreen="1" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-4 h-100 d-flex flex-column justify-content-center gap-3">
                <img src="img/logo.png" alt="logo" style="width: 30%">
                <h1 class="hero3-title-1 pb-4 text-white fw-bold overflow-hidden w-75">
                    OUR ADDRESS
                </h1>
                <h3 class="hero3-title-2 text-white fw-bold overflow-hidden w-75">
                    Poltekbang Surabaya
                </h3>
                <p class="hero3-title-3 text-white overflow-hidden w-75">
                    Jalan Jemur Andayani I No 73 Surabaya 60236 <br>
                    Phone:62 31 8410871 <br>
                    Fax: 62 31 8490005 <br>
                    Email:mail@poltekbangsby.ac.id
                </p>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection
