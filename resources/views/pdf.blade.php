<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'AirAsia.id') }}</title> --}}

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/filing.js') }}" defer></script>
    <script src="{{ asset('js/rules.js') }}" defer></script> --}}

    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> --}}

    {{-- Bootstrap Icons --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css"> --}}

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
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> --}}
    <title>Document</title>

    <style>
        .head {
            /* background-color: red; */
            width: 100%;
            display: flex;
            align-items: center;
            flex-direction: row;
            justify-content: center;
            gap: 0px;
            margin-bottom: 0;
            margin-top: 20px;
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
            /* margin-bottom: 150px; */
            /* background-color: blue; */
        }

        .main h3 {
            font-size: .8rem;
            font-weight: bold;
        }

        .main .tab1 {
            display: flex !important;
            /* background-color: red; */
        }

        table {
            border-collapse: collapse;
            text-transform: uppercase;
        }

        table td, table th {
        text-align: left;
          border: 1px solid rgb(0, 0, 0);
          padding: 8px;
          font-size: .8rem;
        }
    </style>
</head>
<body>
    <div>
        <div class="container">
            <div class="head">
                {{-- <img src="img/unnamed.jpg" alt="Logo"> --}}
                <img src="<?php echo $pic ?>" alt="Logo">
                {{-- <img src="{{ URL::asset('img/unnamed.jpg')}}" alt="logo"> --}}
                {{-- <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('img/logo.png'))) }}"> --}}
                <h2>Flight Plan</h2>
            </div>
            <hr>
            <div class="main">
                <div class="tab1">
                    <table>
                        <tr>
                            <th>Priority</th>
                            <th>Address</th>
                        </tr>
                        <tr>
                            <td>FF</td>
                            <td>WADDZTZX</td>
                            <td>WADDZTZX</td>
                            <td>WADDZTZX</td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="tab2">
                    <table>
                        <tr>
                            <th>Filling Time</th>
                            <th>Originator</th>
                        </tr>
                        <tr>
                            <td>111345</td>
                            <td>WADDCTVX</td>
                        </tr>
                    </table>
                    <h3 class="">SPECIFIC IDENTIFICATION OF ADDRESSEE(S) AND/OR ORIGINATOR</h3>
                </div>
                <hr>
                <div class="tab3" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>3. Message Type</th>
                            <th>AIRCRAFT ID</th>
                            <th>8. FLIGHT RULES</th>
                            <th>TYPE OF FLIGHT</th>
                        </tr>
                        <tr>
                            <td>FPL</td>
                            <td>CTV669</td>
                            <td>I</td>
                            <td>S</td>
                        </tr>
                    </table>
                </div>
                <div class="tab4" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>9. NUMBER</th>
                            <th>Type of aircraft</th>
                            <th>Wake turb</th>
                            <th>10.EQUIPMENT AND CAPABILITIES</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>A320</td>
                            <td>M</td>
                            <td>SDE2E3FGHIRWY</td>
                            <td>LB1</td>
                        </tr>
                    </table>
                </div>
                <div class="tab5" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>13. DEP AD</th>
                            <th>Time</th>
                        </tr>
                        <tr>
                            <td>WADD</td>
                            <td>0735</td>
                        </tr>
                    </table>
                </div>
                <div class="tab6" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>15. Cruising Speed</th>
                            <th>Cruising Level</th>
                            <th>Route</th>
                        </tr>
                        <tr>
                            <td>N0440</td>
                            <td>F280</td>
                            <td>BLI OKANG SBR</td>
                        </tr>
                    </table>
                </div>
                <div class="tab7" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>16. DEST AD</th>
                            <th>Total EET</th>
                            <th>1ST DEST ALTN AD</th>
                            <th>2ND DEST ALTN AD</th>
                        </tr>
                        <tr>
                            <td>WARR</td>
                            <td>0105</td>
                            <td>WADD</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <hr>
                <div class="tab8" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>STS/</th>
                            <th>PBN/</th>
                            <th>NAV/</th>
                            <th>COM/</th>
                            <th>DAT/</th>
                            <th>SUR/</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td>A1C2D2O1S2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="tab9" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>DEP/</th>
                            <th>DEST/</th>
                            <th>DOF/</th>
                            <th>REG/</th>
                            <th>EET/</th>
                            <th>SEL/</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>220612</td>
                            <td>PKGQM</td>
                            <td></td>
                            <td>DLEF</td>
                        </tr>
                    </table>
                </div>
                <div class="tab10" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>TYPE/</th>
                            <th>CODE/</th>
                            <th>DLE/</th>
                            <th>OPR/</th>
                            <th>ORGN/</th>
                            <th>PER/</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>CITILINK INDONESIA</td>
                            <td></td>
                            <td>C</td>
                        </tr>
                    </table>
                </div>
                <div class="tab11" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>ALTN/</th>
                            <th>RALT/</th>
                            <th>TALT/</th>
                            <th>RIF/</th>
                            <th>RMK/</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <hr>
                <h3 class="" style="text-align: center;">SUPPLEMENTARY INFORMATION (NOT TO BE TRANSMITTED IN FPL MESSAGES)</h3>
                <hr>
                <div class="tab12" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>Endurance</th>
                            <th>Person on board</th>
                            <th>Emergency radio</th>
                            <th>Survival equipment</th>
                            <th>Jackets</th>
                        </tr>
                        <tr>
                            <td>E/ -</td>
                            <td>P/ -</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="tab13" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>Number</th>
                            <th>Capacity</th>
                            <th>Cover</th>
                            <th>Colour</th>
                        </tr>
                        <tr>
                            <td>D/ -</td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="tab14" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>AIRCRAFT COLOUR AND MARKINGS</th>
                        </tr>
                        <tr>
                            <td>A/ -</td>
                        </tr>
                    </table>
                </div>
                <div class="tab14" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>REMARKS</th>
                        </tr>
                        <tr>
                            <td>N/ -</td>
                        </tr>
                    </table>
                </div>
                <div class="tab15" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>Pilot in command</th>
                        </tr>
                        <tr>
                            <td>C/ -</td>
                        </tr>
                    </table>
                </div>
                <div class="tab16" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>Filed By</th>
                            <th>SPACE RESERVED FOR ADDITIONAL REQUIREMENTS</th>
                            <th>Received By</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>2022-06-11 13:45:42</td>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
</body>
</html>