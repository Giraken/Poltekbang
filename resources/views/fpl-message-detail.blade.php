<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
</head>

<body>
    <div id="app">
        <nav class="navbar @yield('nav-position') navbar-expand-lg bg-light shadow">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="logo-poltekbang" width="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item">
                            <a class="nav-link @yield('beranda')" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active @yield('ats-message')" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            ATS Message
                            </a>
                            <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="/search">Search ATS Message</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/filed-message">Filed Flight Plane (FPL)</a></li>
                            <li><a class="dropdown-item" href="/delay">Delay (DLA)</a></li>
                            <li><a class="dropdown-item" href="/modification">Modification (CHG)</a></li>
                            <li><a class="dropdown-item" href="/cancellation">Flight Plan Cancellation (CNL)</a></li>
                            <li><a class="dropdown-item" href="/departure">Departure (DEP)</a></li>
                            <li><a class="dropdown-item" href="/arrival">Arrival (ARR)</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/free-text">Free Text ATS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('incoming-message')" href="/incoming-message">Incoming Message</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @yield('message-sent')" href="/message-sent">Message Sent</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle @yield('user')" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
                                {{Auth::user()->name}}
                            </a>
                            <ul class="dropdown-menu text-center dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="/profil">Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{Route('logout')}}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="position-relative w-100">
            <div class="container mt-5" style="margin-bottom: 20vh;">
                <div class="row justify-content-center mb-5">
                    <div class="col">
                        <div class="card border-0 shadow" style="border-radius: 13px;">
                            <div class="card-body">
                                <h3 class="modal-title text-uppercase">View AFTN</h3>
                                <hr>
                                <div class="row justify-content-center">
                                    <div class="col">
                                        <div class="card border-0" style="border-radius: 13px;">
                                            <div class="card-body table-responsive">
                                                <table>
                                                    <tr>
                                                        <th><b>Originator</b></th>
                                                        <th>
                                                            : {{$user->name}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>Date/Time</b></th>
                                                        <th>
                                                            : {{$data->time}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>Aircraft ID</b></th>
                                                        <th>
                                                            : {{$data->aircraft_id}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>REG</b></th>
                                                        <th>
                                                            : {{$data->fpl_reg}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>TYPE OF FLIGHT</b></th>
                                                        <th>
                                                            : {{$data->fpl_flight_type}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>DOF</b></th>
                                                        <th>
                                                            : {{$data->dof}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>Type</b></th>
                                                        <th>
                                                            : FPL
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>DEP AD</b></th>
                                                        <th>
                                                            : {{$data->dep_id}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>EOBT</b></th>
                                                        <th>
                                                            : {{$data->time}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>Speed</b></th>
                                                        <th>
                                                            : {{$data->fpl_cruising_speed}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>Level</b></th>
                                                        <th>
                                                            : {{$data->fpl_cruising_level}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>Route</b></th>
                                                        <th>
                                                            : {{$other->route}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>DEST AD</b></th>
                                                        <th>
                                                            : {{$data->dest_id}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>EET</b></th>
                                                        <th>
                                                            : {{$data->fpl_eet}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>ATD</b></th>
                                                        <th>
                                                            :
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>RMK</b></th>
                                                        <th>
                                                            : {{$other->RMK}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>ATA</b></th>
                                                        <th>
                                                            : {{$data->arr_time}}
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>DLA</b></th>
                                                        <th>
                                                            :
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>CHG</b></th>
                                                        <th>
                                                            :
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                    <tr>
                                                        <th><b>CNL</b></th>
                                                        <th>
                                                            :
                                                        </th>
                                                        <th></th>
                                                    </tr>
                                                </table>

                                                {{-- <table>
                                                    <thead>
                                                    <tr>
                                                        <th>(Priority) (Address)</th>
                                                    </tr>
                                                    <tr>
                                                        <th>(Filling Time) (Originator)</th>
                                                    </tr>
                                                    <tr>
                                                        <th>(Type message) (Aircraft id) (Flight rules) (type of flight)</th>
                                                    </tr>
                                                    <tr>
                                                        <th>(Type of aircraft)/(WAKE TURB. CAT.)-(Aircraft equipment)/(Surveillance equipment)</th>
                                                    </tr>
                                                    <tr>
                                                        <td>(DEP AD)(EOBT)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>(Cruising speed)(cruising level) (route)</td>
                                                    </tr>
                                                    <tr>
                                                        <th>(DEST AD) (EET) (1st ALTN AD) (2nd ALTN AD)</th>
                                                    </tr>
                                                    <tr>
                                                        <td>(Other information</td>
                                                        <td>sts</td>
                                                    </tr>
                                                    </thead>
                                                </table> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div style="text-align: right">
                                    <button class="btn btn-primary" onclick="history.back()">
                                        Back
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
