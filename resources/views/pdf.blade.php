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
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> --}}
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> --}}
    <title>PDF</title>

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
                {{-- <img src="<?php echo $pic ?>" alt="Logo"> --}}
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
                            <td>{{$aftn->priority}}</td>
                            @if($aftn->address1)
                                <td>{{$aftn->address1}}</td>
                            @endif
                            @if($aftn->address2)
                                <td>{{$aftn->address2}}</td>
                            @endif
                            @if($aftn->address3)
                                <td>{{$aftn->address3}}</td>
                            @endif
                            @if($aftn->address4)
                                <td>{{$aftn->address4}}</td>
                            @endif
                            @if($aftn->address5)
                                <td>{{$aftn->address5}}</td>
                            @endif
                            @if($aftn->address6)
                                <td>{{$aftn->address6}}</td>
                            @endif
                            @if($aftn->address7)
                                <td>{{$aftn->address7}}</td>
                            @endif
                            @if($aftn->address8)
                                <td>{{$aftn->address8}}</td>
                            @endif
                            @if($aftn->address9)
                                <td>{{$aftn->address9}}</td>
                            @endif
                            @if($aftn->address10)
                                <td>{{$aftn->address10}}</td>
                            @endif
                            @if($aftn->address11)
                                <td>{{$aftn->address11}}</td>
                            @endif
                            @if($aftn->address12)
                                <td>{{$aftn->address12}}</td>
                            @endif
                            @if($aftn->address13)
                                <td>{{$aftn->address13}}</td>
                            @endif
                            @if($aftn->address14)
                                <td>{{$aftn->address14}}</td>
                            @endif
                            @if($aftn->address15)
                                <td>{{$aftn->address15}}</td>
                            @endif
                            @if($aftn->address16)
                                <td>{{$aftn->address16}}</td>
                            @endif
                            @if($aftn->address17)
                                <td>{{$aftn->address17}}</td>
                            @endif
                            @if($aftn->address18)
                                <td>{{$aftn->address18}}</td>
                            @endif
                            @if($aftn->address19)
                                <td>{{$aftn->address19}}</td>
                            @endif
                            @if($aftn->address20)
                                <td>{{$aftn->address20}}</td>
                            @endif
                            @if($aftn->address21)
                                <td>{{$aftn->address21}}</td>
                            @endif
                            @if($aftn->address22)
                                <td>{{$aftn->address22}}</td>
                            @endif
                            @if($aftn->address23)
                                <td>{{$aftn->address23}}</td>
                            @endif
                            @if($aftn->address24)
                                <td>{{$aftn->address24}}</td>
                            @endif
                            @if($aftn->address25)
                                <td>{{$aftn->address25}}</td>
                            @endif
                            @if($aftn->address26)
                                <td>{{$aftn->address26}}</td>
                            @endif
                            @if($aftn->address27)
                                <td>{{$aftn->address27}}</td>
                            @endif
                            @if($aftn->address28)
                                <td>{{$aftn->address28}}</td>
                            @endif
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
                            <td>@if($aftn->filing_time){{$aftn->filing_time}}@endif</td>
                            <td>@if($aftn->originator){{$aftn->originator}}@endif</td>
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
                            <td>@if($message->type){{$message->type}}@endif</td>
                            <td>@if($message->aircraft_id){{$message->aircraft_id}}@endif</td>
                            <td>@if($message->fpl_flight_rules){{$message->fpl_flight_rules}}@endif</td>
                            <td>@if($message->fpl_flight_type){{$message->fpl_flight_type}}@endif</td>
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
                            <td>@if($message->fpl_number){{$message->fpl_number}}@endif</td>
                            <td>@if($message->fpl_aircraft_type){{$message->fpl_aircraft_type}}@endif</td>
                            <td>@if($message->fpl_wake_turb){{$message->fpl_wake_turb}}@endif</td>
                            <td>@if($message->fpl_aircraft_equipment){{$message->fpl_aircraft_equipment}}@endif</td>
                            <td>@if($message->fpl_surveillance_equipment){{$message->fpl_surveillance_equipment}}@endif</td>
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
                            <td>@if($message->dep_id){{$message->dep_id}}@endif</td>
                            <td>@if($message->time){{$message->time}}@endif</td>
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
                            <td>@if($message->dep_id){{$message->fpl_cruising_speed}}@endif</td>
                            <td>@if($message->time){{$message->fpl_cruising_level}}@endif</td>
                            <td>@if($add->route){{$add->route}}@endif</td>
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
                            <td>@if($message->dest_id){{$message->dest_id}}@endif</td>
                            <td>@if($message->fpl_eet){{$message->fpl_eet}}@endif</td>
                            <td>@if($message->fpl_1_altn){{$message->fpl_1_altn}}@endif</td>
                            <td>@if($message->fpl_2_altn){{$message->fpl_2_altn}}@endif</td>
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
                            <td>@if($add->STS){{$add->STS}}@endif</td>
                            <td>@if($add->PBN){{$add->PBN}}@endif</td>
                            <td>@if($add->NAV){{$add->NAV}}@endif</td>
                            <td>@if($add->COM){{$add->COM}}@endif</td>
                            <td>@if($add->DAT){{$add->DAT}}@endif</td>
                            <td>@if($add->SUR){{$add->SUR}}@endif</td>
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
                            <td>@if($add->DEP){{$add->DEP}}@endif</td>
                            <td>@if($add->DEST){{$add->DEST}}@endif</td>
                            <td>@if($message->dof){{$message->dof}}@endif</td>
                            <td>@if($add->REG){{$add->REG}}@endif</td>
                            <td>@if($add->EET){{$add->EET}}@endif</td>
                            <td>@if($add->SEL){{$add->SEL}}@endif</td>
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
                            <td>@if($add->TYP){{$add->TYP}}@endif</td>
                            <td>@if($add->CODE){{$add->CODE}}@endif</td>
                            <td>@if($add->DLE){{$add->DLE}}@endif</td>
                            <td>@if($add->OPR){{$add->OPR}}@endif</td>
                            <td>@if($add->ORGN){{$add->ORGN}}@endif</td>
                            <td>@if($add->PER){{$add->PER}}@endif</td>
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
                            <td>@if($add->ALTN){{$add->ALTN}}@endif</td>
                            <td>@if($add->RALT){{$add->RALT}}@endif</td>
                            <td>@if($add->TALT){{$add->TALT}}@endif</td>
                            <td>@if($add->RIF){{$add->RIF}}@endif</td>
                            <td>@if($add->RMK){{$add->RMK}}@endif</td>
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
                            <td>@if($add->supp_endurance){{$add->supp_endurance}}@endif</td>
                            <td>@if($add->supp_people){{$add->supp_people}}@endif</td>
                            <td>@if($add->supp_radio){{$add->supp_radio}}@endif</td>
                            <td>@if($add->supp_survival){{$add->supp_survival}}@endif</td>
                            <td>@if($add->supp_jacket){{$add->supp_jacket}}@endif</td>
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
                            <td></td>
                            <td></td>
                            <td>@if($add->supp_cover){{$add->supp_cover}}@endif</td>
                            <td>@if($add->supp_color){{$add->supp_color}}@endif</td>
                        </tr>
                    </table>
                </div>
                <div class="tab14" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>AIRCRAFT COLOUR AND MARKINGS</th>
                        </tr>
                        <tr>
                            <td>@if($add->supp_aircraft_color){{$add->supp_aircraft_color}}@endif</td>
                        </tr>
                    </table>
                </div>
                <div class="tab14" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>REMARKS</th>
                        </tr>
                        <tr>
                            <td>@if($add->supp_remark){{$add->supp_remark}}@endif</td>
                            <td>@if($add->supp_remark_desc){{$add->supp_remark_desc}}@endif</td>
                        </tr>
                    </table>
                </div>
                <div class="tab15" style="margin-bottom: 20px;">
                    <table>
                        <tr>
                            <th>Pilot in command</th>
                        </tr>
                        <tr>
                            <td>@if($add->supp_pilot){{$add->supp_pilot}}@endif</td>
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
                            <td>@if($message->filed_by){{$message->filed_by}}@endif</td>
                            <td>@if($add->supp_reserved){{$add->supp_reserved}}@endif</td>
                            <td>@if($add->created_at){{$add->created_at}}@endif</td>
                        </tr>
                    </table>
                </div>
        </div>
    </div>
</body>
</html>