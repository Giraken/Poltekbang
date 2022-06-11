<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AirAsia.id') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/filing.js') }}" defer></script>
    <script src="{{ asset('js/rules.js') }}" defer></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

    <style>
        .head {
            /* background-color: red; */
            width: 100%;
            display: flex;
            align-items: center;
            /* justify-content: center */
            gap: 10px;
            margin-bottom: 0;
            margin-top: 50px;
        }

        .head img {
            width: 70px;
        }

        .head h2 {
            font-size: 1rem;
            line-height: 0;
            margin-top: 10px !important;
            font-weight: bold;
        }

        hr {
            border: 1px solid black;
        }

        .main {
            font-weight: bold;
            margin-bottom: 150px;
        }

        .main h3 {
            font-size: .8rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <div class="container">
            <div class="head d-inline-flex">
                <img src="img/unnamed.jpg" alt="Logo">
                <h2>Flight Plan</h2>
            </div>
            <hr>
            <div class="main">
                <div class="row">
                    <div class="col-2 text-uppercase">
                        <h3 class="">Priority</h3>
                        <h3 class="">FF</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col text-uppercase">
                        <h3 class="">Address</h3>
                        {{-- <h3>123</h3> --}}
                        <div class="d-inline-flex gap-4">
                            <h3 class="">WADDZTZX</h3>
                            <h3 class="">WADDZTZX</h3>
                            <h3 class="">WADDZTZX</h3>
                            <h3 class="">WADDZTZX</h3>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-2 text-uppercase">
                        <h3 class="">Filling time</h3>
                        <h3 class="">111345</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col text-uppercase">
                        <h3 class="">originator</h3>
                        <h3>WADDCTVX</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-uppercase">
                        <h3 class="">SPECIFIC IDENTIFICATION OF ADDRESSEE(S) AND/OR ORIGINATOR
                        </h3>
                    </div>
                </div>
                <hr>
                <div class="row mb-4">
                    <div class="col-2 text-uppercase">
                        <h3 class="">3. Message type</h3>
                        <h3 class="">FPL</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">7. Aircraft ID</h3>
                        <h3>CTV669</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">8. Flight rules</h3>
                        <h3>I</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Type of flight</h3>
                        <h3>S</h3>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 text-uppercase">
                        <h3 class="">9. Number</h3>
                        <h3 class="">-</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Type of aircraft</h3>
                        <h3>A320</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Wake turb</h3>
                        <h3>M</h3>
                    </div>
                    <div class="col-4 text-uppercase">
                        <h3 class="">10.EQUIPMENT AND CAPABILITIES</h3>
                        <h3>SDE2E3FGHIRWY / LB1</h3>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 text-uppercase">
                        <h3 class="">13. DEP AD</h3>
                        <h3 class="">WADD</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Time</h3>
                        <h3>0735</h3>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 text-uppercase">
                        <h3 class="">Cruising Speed</h3>
                        <h3 class="">N0440</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Cruising Level</h3>
                        <h3>F280</h3>
                    </div>
                    <div class="col-6 text-uppercase">
                        <h3 class="">Route</h3>
                        <h3>LI OKANG SBR</h3>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 text-uppercase">
                        <h3 class="">16. DEST AD</h3>
                        <h3 class="">WARR</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Total EET</h3>
                        <h3>0105</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">1ST DEST ALTN AD</h3>
                        <h3>WADD</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">2ND DEST ALTN AD</h3>
                        <h3>-</h3>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-uppercase">
                        <h3 class="">18. Other information</h3>
                        <div class="d-flex gap-5">
                            <div class="d-flex flex-column gap-2">
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">STS/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">PBN/</h3>
                                    <h3>A1C2D2O1S2</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">NAV/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">COM/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">DAT/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">SUR/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">DEP/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">DEST/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">DOF/</h3>
                                    <h3>220612</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">REG/</h3>
                                    <h3>PKGQM</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">EET/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">SEL/</h3>
                                    <h3>DLEF</h3>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">Type/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">Code/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">DLE/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">OPR/</h3>
                                    <h3>CITILINK INDONESIA</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">ORGN/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">PER/</h3>
                                    <h3>C</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">ALTN/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">RALT/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">TALT/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">RIF/</h3>
                                    <h3>-</h3>
                                </div>
                                <div class="d-inline-flex gap-3">
                                    <h3 class="">RMK/</h3>
                                    <h3>-</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <h3 class="text-center">SUPPLEMENTARY INFORMATION (NOT TO BE TRANSMITTED IN FPL MESSAGES)</h3>
                <hr>
                <div class="row mb-4">
                    <div class="col-2 text-uppercase">
                        <h3 class="">19. Endurance</h3>
                        <h3 class="">E/ -</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Person on board</h3>
                        <h3>P/ -</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Emergency Radio</h3>
                        <h3>-</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Survival Equipment</h3>
                        <h3>-</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Jackets</h3>
                        <h3>-</h3>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-2 text-uppercase">
                        <h3 class="">Number</h3>
                        <h3 class="">D/ -</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Capacity</h3>
                        <h3>-</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Cover</h3>
                        <h3>-</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">Colour</h3>
                        <h3>-</h3>
                    </div>
                    {{-- <div class="col-2 text-uppercase">
                        <h3 class="">Jackets</h3>
                        <h3>-</h3>
                    </div> --}}
                </div>
                <div class="row mb-4">
                    <div class="col text-uppercase">
                        <h3 class="">AIRCRAFT COLOUR AND MARKINGS</h3>
                        <h3 class="">A/ -</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-uppercase">
                        <h3 class="">Remarks</h3>
                        <h3 class="">N/ -</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col text-uppercase">
                        <h3 class="">Pilot in Command</h3>
                        <h3 class="">C/ -</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                </div>
                <hr>
                <div class="row mb-4">
                    <div class="col-3 text-uppercase">
                        <h3 class="">Filed By</h3>
                        <h3 class="">-</h3>
                        {{-- <h3>123</h3> --}}
                    </div>
                    <div class="col-5 text-uppercase">
                        <h3 class="">SPACE RESERVED FOR ADDITIONAL REQUIREMENTS</h3>
                        <h3>-</h3>
                    </div>
                    <div class="col-2 text-uppercase">
                        <h3 class="">RECEIVED BY</h3>
                        <h3>2022-06-11 13:45:42</h3>
                    </div>
                </div>
        </div>
    </div>
</body>
</html>