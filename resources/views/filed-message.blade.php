@extends('layouts.app')
@section('ats-message', 'active')
@section('content')
<style>
    input[type=text], select {
        padding: 6px 10px;
        margin: 4px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=file], select {
        padding: 10px 10px;
        margin: 4px 0;
        display: inline-block;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card border-0 shadow" style="border-radius: 13px;">
                <div class="card-body">
                    @if(session()->has('berhasil'))
                    <div class="alert alert-success la la-thumbs-up"> {{session()->get('berhasil')}} </div> @endif
                    <form method="POST" action="" style="font-family: 'Poppins', sans-serif;">
                        @csrf
                        <div class="row align-items-center p-3">
                            <div class="col">
                                <div class="row mb-2">
                                    @if(count($errors) > 0)
                                    <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                        {{ $error }} <br/>
                                        @endforeach
                                    </div>
                                    @endif
                                    <div class="col-3 d-inline-flex gap-2">
                                        <button type="submit" class="btn btn-primary text-white">
                                            {{ __('SEND') }}
                                        </button>
                                        <button type="reset" class="btn btn-warning text-white" style="">
                                            {{ __('RESET') }}
                                        </button>
                                        <button type="reset" class="btn btn-dark text-white" style="">
                                            {{ __('GENERATE AFTN') }}
                                        </button>
                                    </div>
                                </div>
                                <div>
                                    <label for="status">FPL STATUS :</label>
                                    <select id="status" name="status">
                                        <option value="send-and-save">Send & save FPL message</option>
                                        <option value="save">Save as draft</option>
                                    </select>
                                </div>
                                <div>
                                    <p>UPLOAD PERMIT LETTER :</p>
                                    <input type="file" id="permit-letter" name="permit-letter">
                                </div>
                                <div class="col mb-3 d-flex align-items-center rounded-3 text-uppercase fw-bold px-3 py-0"
                                style="color: #6bbf17; background-color: #dffdc3; border: 1px solid; border-color: #6bbf17">
                                    <div class="">
                                        <i class="bi bi-check2 fs-1"></i>
                                    </div>
                                    <div>Aftn Header</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-3 d-inline-flex align-items-center me-0">
                                        <label for="priority" class="me-2 mb-0 col-form-label fw-bold">{{ __('PRIORITY:') }}</label>
                                        <select name="priority" id="priority" class="p-2 rounded form-select" style="width: 70px;">
                                            <option value="ff">FF</option>
                                            <option value="dd">DD</option>
                                            <option value="gg">GG</option>
                                            <option value="kk">KK</option>
                                            <option value="ss">SS</option>
                                        </select>
                                    </div>
<<<<<<< HEAD
                                    <div class="col-4 d-inline-flex align-items-center me-4">
                                        <label for="filing-time" class="fw-bold me-2 mb-0 col-form-label" style="">{{ __('FILING TIME:') }}</label>
                                        <input name="filing-time" id="filing-time" class="p-2 me-1 rounded form-control" placeholder="DDhhmm" style="width: 120px;">
                                        {{-- <input onclick="resetValue()" class="btn btn-primary text-white" value="Reset" style="width: 75px;"> --}}
                                        <button type="button" onclick="resetValue()" class="btn btn-primary text-white"><i class="bi bi-arrow-counterclockwise"></i></button>
=======
                                    <div class="col-3 d-inline-flex align-items-center me-4">
                                        <label for="filling-time" class="fw-bold me-2 mb-0 col-form-label" style="">{{ __('FILING TIME:') }}</label>
                                        <input name="filling-time" id="filling-time" class="p-2 me-1 rounded form-control" value="070925" readonly>
                                        <button class="btn btn-primary text-white"><i class="bi bi-arrow-counterclockwise"></i></button>
>>>>>>> f09b37bddaf133ec176b4314e421d1c58a99105c
                                    </div>
                                    <div class="col-3 d-inline-flex align-items-center me-4">
                                        <label for="originator" class="fw-bold me-2 mb-0 col-form-label" style="">{{ __('ORIGINATOR:') }}</label>
                                        <input name="originator" id="originator" class="p-2 me-1 rounded form-control" value="{{Auth::user()->name}}" readonly>
                                    </div>
                                </div>
                                <div class="row text-uppercase">
                                    <label class="text-uppercase fw-bold" for="address">Address:</label>
                                </div>
                                <div class="d-flex flex-wrap gap-2 mb-3" style="width: 90%;">
                                    @for($i = 1; $i <= 28; $i++)
                                    <div class="">
                                        <input name="address{{$i}}" id="address{{$i}}" class="p-2 rounded form-control" style="width: 120px">
                                    </div>
                                    @endfor
                                </div>
                                <div class="col mb-3 d-flex align-items-center rounded-3 text-uppercase fw-bold px-3 py-0"
                                style="color: #6bbf17; background-color: #dffdc3; border: 1px solid; border-color: #6bbf17">
                                    <div class="">
                                        <i class="bi bi-check2 fs-1"></i>
                                    </div>
                                    <div>FILED FLIGHT PLAN (FPL)</div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="aircraft-id" class="me-2 mb-0 col-form-label text-primary">{{ __('7. AIRCRAFT ID') }}</label>
                                        <input name="aircraft-id" id="aircraft-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="reg" class="me-2 mb-0 col-form-label text-primary"><i>{{ __('REG/') }}</i></label>
                                        <input name="reg" id="reg" class="p-2 rounded form-control" placeholder="SEARCH REG">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="rules" class="me-2 mb-0 col-form-label text-primary">{{ __('8. FLIGHT RULES') }}</label>
                                        <select name="rules" id="rules" class="p-2 rounded form-select" style="width: 90px;">
                                            <option value=""></option>
                                            <option value="IFR">I - IFR</option>
                                            <option value="VFR">V - VFR</option>
                                            <option value="Y">Y</option>
                                            <option value="Z">Z</option>
                                        </select>
                                    </div>
                                    <div class="col-2 me-2 fw-bold">
                                        <label for="type" class="me-2 mb-0 col-form-label text-primary">{{ __('TYPE OF FLIGHT') }}</label>
                                        <select name="type" id="type" class="p-2 rounded form-select" style="width: 140px;">
                                            <option value=""></option>
                                            <option value="S">S - Schedule</option>
                                            <option value="N">N - Non Schedule</option>
                                            <option value="G">G - General Aviation</option>
                                            <option value="M">M - Military</option>
                                            <option value="X">X - Other</option>
                                        </select>
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="number" class="me-2 mb-0 col-form-label text-primary">{{ __('9.NUMBER') }}</label>
                                        <input id="number" name="number" type="number" min="2" max="10" maxlength="2" class="style3" value="" style="width: 90px;text-transform: uppercase" onkeypress="return numberonly(this, event)" pattern="[0-9]{0,2}" data-pattern-error="Number should be numeric upto 2 characters" tooltiptext="Number of Aircraft (if more than one)<br><br>1 to 2 NUMERICS giving the number of aircraft in the flight. " onchange="showHintnumber()">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="type-aircraft" class="me-2 mb-0 col-form-label text-primary">{{ __('TYPE OF AIRCRAFT') }}</label>
                                        <input name="type-aircraft" id="type-aircraft" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="fpl_wake_turb" class="me-2 mb-0 col-form-label text-primary">{{ __('WAKE TURB. CAT.') }}</label>
                                        <select name="fpl_wake_turb" id="fpl_wake_turb" class="p-2 rounded form-select" style="width: 130px;">
                                            <option value=""></option>
                                            <option value="H">H - Heavy</option>
                                            <option value="M">M - Medium</option>
                                            <option value="L">L - Light</option>
                                            <option value="J">J - Super</option>
                                        </select>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="equipment-aircraft" class="me-2 mb-0 col-form-label text-primary">{{ __('10.AIRCRAFT EQUIPMENT') }}</label>
                                        <input name="equipment-aircraft" id="equipment-aircraft" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="equipment-surveillance" class="me-2 mb-0 col-form-label text-primary">{{ __('SURVEILLANCE EQUIPMENT') }}</label>
                                        <input name="equipment-surveillance" id="equipment-surveillance" class="p-2 rounded form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="dep-id" class="me-2 mb-0 col-form-label text-primary">{{ __('13.DEP AD') }}</label>
                                        <input name="dep-id" id="dep-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="eobt" class="me-2 mb-0 col-form-label text-primary">{{ __('EOBT') }}</label>
                                        <input name="eobt" id="eobt" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="dof" class="me-2 mb-0 col-form-label text-primary">{{ __('DOF') }}</label>
                                        <input name="dof" id="dof" type="date" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="dest-id" class="me-2 mb-0 col-form-label text-primary">{{ __('16.DEST AD') }}</label>
                                        <input name="dest-id" id="dest-id" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="eet" class="me-2 mb-0 col-form-label text-primary">{{ __('EET') }}</label>
                                        <input name="eet" id="eet" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="1st-altn-ad" class="me-2 mb-0 col-form-label text-primary">{{ __('1st ALTN AD') }}</label>
                                        <input name="1st-altn-ad" id="1st-altn-ad" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-1 me-4 fw-bold">
                                        <label for="2nd-altn-ad" class="me-2 mb-0 col-form-label text-primary">{{ __('2nd ALTN AD') }}</label>
                                        <input name="2nd-altn-ad" id="2nd-altn-ad" class="p-2 rounded form-control">
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="cruising-speed" class="me-2 mb-0 col-form-label text-primary">{{ __('15.CRUISING SPEED') }}</label>
                                        <input name="cruising-speed" id="cruising-speed" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="cruising-level" class="me-2 mb-0 col-form-label text-primary">{{ __('CRUISING LEVEL') }}</label>
                                        <input name="cruising-level" id="cruising-level" class="p-2 rounded form-control">
                                    </div>
                                </div>
                                <hr>
                                <div class="col-2 d-inline-flex align-items-center me-0">
                                    <label for="route" class="me-2 mb-0 col-form-label fw-bold text-primary">{{ __('ROUTE OF FLIGHT') }}</label>
                                    <select name="route" id="route" class="p-2 rounded form-select" style="width: 50px">
                                        <option value="#"></option>
                                    </select>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="pointSelect" class="me-2 mb-0 col-form-label">{{ __('POINT') }}</label>
                                        <select name="pointSelect" id="pointSelect" class="p-2 rounded form-select" style="width: 130px;">
                                            <option value=""></option>
                                            <option value="KIMON">KIMON</option>
                                            <option value="BALIPAPAN HARBOR">BALIPAPAN HARBOR</option>
                                            <option value="PW">PW</option>
                                            <option value="ATOSO">ATOSO</option>
                                            <option value="OLDEN">OLDEN</option>
                                            <option value="SESULO">SESULO</option>
                                            <option value="XMX">XMX</option>
                                            <option value="KETUT">KETUT</option>
                                            <option value="DIANI">DIANI</option>
                                            <option value="GABIT">GABIT</option>
                                            <option value="MIL">MIL</option>
                                            <option value="FATOL">FATOL</option>
                                            <option value="TANJUNG PURA">TANJUNG PURA</option>
                                            <option value="PASURUAN">PASURUAN</option>
                                            <option value="DOL">DOL</option>
                                            <option value="PABIO">PABIO</option>
                                            <option value="POLONIA">POLONIA</option>
                                            <option value="PKN">PKN</option>
                                            <option value="HLM">HLM</option>
                                            <option value="DASTY">DASTY</option>
                                            <option value="IF-MLA">IF-MLA</option>
                                            <option value="MKS">MKS</option>
                                            <option value="AMVIL">AMVIL</option>
                                            <option value="PRIOK">PRIOK</option>
                                            <option value="PURWAKARTA">PURWAKARTA</option>
                                            <option value="TINGGI">TINGGI</option>
                                            <option value="DALOT">DALOT</option>
                                            <option value="VTW">VTW</option>
                                            <option value="FILMO">FILMO</option>
                                            <option value="BAGIL">BAGIL</option>
                                            <option value="GILIMANUK">GILIMANUK</option>
                                            <option value="HANTA">HANTA</option>
                                            <option value="GARUT">GARUT</option>
                                            <option value="NO">NO</option>
                                            <option value="PEDET">PEDET</option>
                                            <option value="POSAT">POSAT</option>
                                            <option value="HITADIPA">HITADIPA</option>
                                            <option value="HANDIL II">HANDIL II</option>
                                            <option value="ABEMA PAITON">ABEMA PAITON</option>
                                            <option value="ENARTOLI">ENARTOLI</option>
                                            <option value="MULIA">MULIA</option>
                                            <option value="OBASA">OBASA</option>
                                            <option value="BELAWAN">BELAWAN</option>
                                            <option value="BINTAHUNA">BINTAHUNA</option>
                                            <option value="186">186</option>
                                            <option value="JAMIS">JAMIS</option>
                                            <option value="TEMON">TEMON</option>
                                            <option value="KALAM">KALAM</option>
                                            <option value="NIXUL">NIXUL</option>
                                            <option value="BOLOGAI">BOLOGAI</option>
                                            <option value="TOMBA">TOMBA</option>
                                            <option value="OSUKA">OSUKA</option>
                                            <option value="TUNAN RIVER">TUNAN RIVER</option>
                                            <option value="FANDO">FANDO</option>
                                            <option value="PROBOLINGGO">PROBOLINGGO</option>
                                            <option value="WAGHETE">WAGHETE</option>
                                            <option value="EDAM">EDAM</option>
                                            <option value="POINT-X">POINT-X</option>
                                            <option value="CARITA">CARITA</option>
                                            <option value="ROTAN">ROTAN</option>
                                            <option value="LAWIB">LAWIB</option>
                                            <option value="ABM BADAK">ABM BADAK</option>
                                            <option value="JILAT">JILAT</option>
                                            <option value="JOG">JOG</option>
                                            <option value="GOMAT">GOMAT</option>
                                            <option value="AMBOY">AMBOY</option>
                                            <option value="SELSO">SELSO</option>
                                            <option value="TAPIN">TAPIN</option>
                                            <option value="SENIPAH">SENIPAH</option>
                                            <option value="BASEL">BASEL</option>
                                            <option value="LIPRA">LIPRA</option>
                                            <option value="MAHAKAM RIVER">MAHAKAM RIVER</option>
                                            <option value="SOLOM">SOLOM</option>
                                            <option value="HOLBA">HOLBA</option>
                                            <option value="KUALANAMU TWR">KUALANAMU TWR</option>
                                            <option value="X-1">X-1</option>
                                            <option value="ILONG-ILONG HARBOR">ILONG-ILONG HARBOR</option>
                                            <option value="D5-15">D5-15</option>
                                            <option value="KIDET">KIDET</option>
                                            <option value="ELDEM">ELDEM</option>
                                            <option value="CUCUT">CUCUT</option>
                                            <option value="TERKA">TERKA</option>
                                            <option value="ODIRU">ODIRU</option>
                                            <option value="W1">W1</option>
                                            <option value="ATOMY">ATOMY</option>
                                            <option value="REBOL">REBOL</option>
                                            <option value="BIBUL">BIBUL</option>
                                            <option value="ONOXA">ONOXA</option>
                                            <option value="TMA BDRY">TMA BDRY</option>
                                            <option value="MITOS">MITOS</option>
                                            <option value="ANSAX">ANSAX</option>
                                            <option value="LAMONGAN">LAMONGAN</option>
                                            <option value="BALAB">BALAB</option>
                                            <option value="NR">NR</option>
                                            <option value="ABM SENIPAH">ABM SENIPAH</option>
                                            <option value="OPABA">OPABA</option>
                                            <option value="MDN">MDN</option>
                                            <option value="GIWOT">GIWOT</option>
                                            <option value="PKP">PKP</option>
                                            <option value="DUNAM">DUNAM</option>
                                            <option value="NOKTA">NOKTA</option>
                                            <option value="MOJOKERTO">MOJOKERTO</option>
                                            <option value="GAMAL">GAMAL</option>
                                            <option value="ZQ">ZQ</option>
                                            <option value="AIR MADIDI">AIR MADIDI</option>
                                            <option value="KUA">KUA</option>
                                            <option value="KUMAN">KUMAN</option>
                                            <option value="MIMIX">MIMIX</option>
                                            <option value="LUANG">LUANG</option>
                                            <option value="ONTAL">ONTAL</option>
                                            <option value="ENSIB">ENSIB</option>
                                            <option value="KADAB">KADAB</option>
                                            <option value="GOTLA">GOTLA</option>
                                            <option value="TANUR">TANUR</option>
                                            <option value="DULON">DULON</option>
                                            <option value="ILU">ILU</option>
                                            <option value="AD">AD</option>
                                            <option value="KEVOK">KEVOK</option>
                                            <option value="MEMAK">MEMAK</option>
                                            <option value="ENTAS">ENTAS</option>
                                            <option value="RUMBO">RUMBO</option>
                                            <option value="AGSON">AGSON</option>
                                            <option value="BUNBO">BUNBO</option>
                                            <option value="HALMO">HALMO</option>
                                            <option value="ABEAM PAITON">ABEAM PAITON</option>
                                            <option value="NUGRO">NUGRO</option>
                                            <option value="MIMIK">MIMIK</option>
                                            <option value="MATARAM CITY">MATARAM CITY</option>
                                            <option value="GORAI">GORAI</option>
                                            <option value="TKG">TKG</option>
                                            <option value="AGIGU">AGIGU</option>
                                            <option value="GUVIL">GUVIL</option>
                                            <option value="214">214</option>
                                            <option value="NABIRE &quot;ZR&quot;">NABIRE "ZR"</option>
                                            <option value="TANJUNG">TANJUNG</option>
                                            <option value="ABM AMURANG">ABM AMURANG</option>
                                            <option value="BOKONDINI">BOKONDINI</option>
                                            <option value="mtm">mtm</option>
                                            <option value="RALTO">RALTO</option>
                                            <option value="FASAL">FASAL</option>
                                            <option value="OSUVI">OSUVI</option>
                                            <option value="MDI">MDI</option>
                                            <option value="BOJONEGORO">BOJONEGORO</option>
                                            <option value="SPIKO">SPIKO</option>
                                            <option value="TAPIR">TAPIR</option>
                                            <option value="ELBIS">ELBIS</option>
                                            <option value="NORTHGAP">NORTHGAP</option>
                                            <option value="MADON">MADON</option>
                                            <option value="SOSOK">SOSOK</option>
                                            <option value="ZH">ZH</option>
                                            <option value="ANITO">ANITO</option>
                                            <option value="EMPIL">EMPIL</option>
                                            <option value="GOMBY">GOMBY</option>
                                            <option value="TOSTY">TOSTY</option>
                                            <option value="JIL">JIL</option>
                                            <option value="BALIKPAPAN-OL">BALIKPAPAN-OL</option>
                                            <option value="KARAWANG">KARAWANG</option>
                                            <option value="PLB">PLB</option>
                                            <option value="OVINA">OVINA</option>
                                            <option value="OLENG">OLENG</option>
                                            <option value="POVUS">POVUS</option>
                                            <option value="SUGIK">SUGIK</option>
                                            <option value="PERBAUNGAN">PERBAUNGAN</option>
                                            <option value="LUSIA">LUSIA</option>
                                            <option value="HALIM">HALIM</option>
                                            <option value="JPA">JPA</option>
                                            <option value="TOREX">TOREX</option>
                                            <option value="CHARLIE">CHARLIE</option>
                                            <option value="POINT&quot;PAPA&quot;">POINT"PAPA"</option>
                                            <option value="JAKARTA &quot;HLM&quot;">JAKARTA "HLM"</option>
                                            <option value="CTA BDRY">CTA BDRY</option>
                                            <option value="PUSAT">PUSAT</option>
                                            <option value="TAROS">TAROS</option>
                                            <option value="ABASA">ABASA</option>
                                            <option value="BENTO">BENTO</option>
                                            <option value="MA-MLA">MA-MLA</option>
                                            <option value="LABANGKA">LABANGKA</option>
                                            <option value="X-3">X-3</option>
                                            <option value="FOLOT">FOLOT</option>
                                            <option value="SOBIA">SOBIA</option>
                                            <option value="CAHYO">CAHYO</option>
                                            <option value="JAYAPURA &quot;JPA&quot;">JAYAPURA "JPA"</option>
                                            <option value="BND">BND</option>
                                            <option value="TRK">TRK</option>
                                            <option value="BAXAL">BAXAL</option>
                                            <option value="D5-33">D5-33</option>
                                            <option value="SULIS">SULIS</option>
                                            <option value="TOLIT">TOLIT</option>
                                            <option value="NQ">NQ</option>
                                            <option value="TEBING TINGGI">TEBING TINGGI</option>
                                            <option value="ENDOG">ENDOG</option>
                                            <option value="GUANO">GUANO</option>
                                            <option value="LIPOT">LIPOT</option>
                                            <option value="TANAH LOT">TANAH LOT</option>
                                            <option value="BUTPA">BUTPA</option>
                                            <option value="IAF-MILA">IAF-MILA</option>
                                            <option value="KDI">KDI</option>
                                            <option value="BIK">BIK</option>
                                            <option value="POSOD">POSOD</option>
                                            <option value="ABM NAENG BESAR">ABM NAENG BESAR</option>
                                            <option value="OMEGA">OMEGA</option>
                                            <option value="BUANA">BUANA</option>
                                            <option value="HAMOL">HAMOL</option>
                                            <option value="KOLTA">KOLTA</option>
                                            <option value="MWB">MWB</option>
                                            <option value="MOSOL">MOSOL</option>
                                            <option value="ZX">ZX</option>
                                            <option value="KADAR">KADAR</option>
                                            <option value="TARUN">TARUN</option>
                                            <option value="TPG">TPG</option>
                                            <option value="KOBAKMA">KOBAKMA</option>
                                            <option value="IMABA">IMABA</option>
                                            <option value="RENDA">RENDA</option>
                                            <option value="BOLAK">BOLAK</option>
                                            <option value="ABM TALISEI">ABM TALISEI</option>
                                            <option value="ELANG">ELANG</option>
                                            <option value="ARIRU">ARIRU</option>
                                            <option value="KUBIA">KUBIA</option>
                                            <option value="SIDOARJO">SIDOARJO</option>
                                            <option value="KAGAS">KAGAS</option>
                                            <option value="CABE">CABE</option>
                                            <option value="GEPAK">GEPAK</option>
                                            <option value="PASOL">PASOL</option>
                                            <option value="RAFIS">RAFIS</option>
                                            <option value="130">130</option>
                                            <option value="OTARA">OTARA</option>
                                            <option value="SENTUL">SENTUL</option>
                                            <option value="CERME">CERME</option>
                                            <option value="PIDON">PIDON</option>
                                            <option value="maluk">maluk</option>
                                            <option value="FERET">FERET</option>
                                            <option value="VANKA">VANKA</option>
                                            <option value="MKB">MKB</option>
                                            <option value="OL">OL</option>
                                            <option value="NASIR">NASIR</option>
                                            <option value="KRAWA">KRAWA</option>
                                            <option value="TODAK">TODAK</option>
                                            <option value="HULAT">HULAT</option>
                                            <option value="BAC">BAC</option>
                                            <option value="ILU PASS">ILU PASS</option>
                                            <option value="BACAU">BACAU</option>
                                            <option value="BANDUNG &quot;BND&quot;">BANDUNG "BND"</option>
                                            <option value="OTORA">OTORA</option>
                                            <option value="W-2">W-2</option>
                                            <option value="ELBAM">ELBAM</option>
                                            <option value="TATAN">TATAN</option>
                                            <option value="SALAX">SALAX</option>
                                            <option value="BULVA">BULVA</option>
                                            <option value="HUMUS">HUMUS</option>
                                            <option value="PAGAI">PAGAI</option>
                                            <option value="CARLI">CARLI</option>
                                            <option value="5.5">5.5</option>
                                            <option value="DOKET">DOKET</option>
                                            <option value="ECHO">ECHO</option>
                                            <option value="MUPAP">MUPAP</option>
                                            <option value="LADOP">LADOP</option>
                                            <option value="MALIO">MALIO</option>
                                            <option value="SADEP">SADEP</option>
                                            <option value="RABOL">RABOL</option>
                                            <option value="DENDY">DENDY</option>
                                            <option value="TOPAR">TOPAR</option>
                                            <option value="BLIMBINGSARI">BLIMBINGSARI</option>
                                            <option value="GURNI">GURNI</option>
                                            <option value="LAMOB">LAMOB</option>
                                            <option value="LUMO">LUMO</option>
                                            <option value="BA">BA</option>
                                            <option value="NABAT">NABAT</option>
                                            <option value="BDM">BDM</option>
                                            <option value="TIAMA">TIAMA</option>
                                            <option value="KEONG">KEONG</option>
                                            <option value="WIDIA">WIDIA</option>
                                            <option value="PUPIT">PUPIT</option>
                                            <option value="HOSTY">HOSTY</option>
                                            <option value="PARDI">PARDI</option>
                                            <option value="DKI">DKI</option>
                                            <option value="AMN">AMN</option>
                                            <option value="ALAMO">ALAMO</option>
                                            <option value="PUGER">PUGER</option>
                                            <option value="LASEM">LASEM</option>
                                            <option value="X-B472">X-B472</option>
                                            <option value="BPN">BPN</option>
                                            <option value="BUNTO">BUNTO</option>
                                            <option value="175">175</option>
                                            <option value="310">310</option>
                                            <option value="TPN">TPN</option>
                                            <option value="UBLAT">UBLAT</option>
                                            <option value="117">117</option>
                                            <option value="NE">NE</option>
                                            <option value="PURWO">PURWO</option>
                                            <option value="CKG">CKG</option>
                                            <option value="IKIBU">IKIBU</option>
                                            <option value="ATMAL">ATMAL</option>
                                            <option value="SAMSU">SAMSU</option>
                                            <option value="TARUM">TARUM</option>
                                            <option value="BOKODINI">BOKODINI</option>
                                            <option value="TULIP">TULIP</option>
                                            <option value="KALIV">KALIV</option>
                                            <option value="ABILO">ABILO</option>
                                            <option value="PILEK">PILEK</option>
                                            <option value="CA">CA</option>
                                            <option value="RG">RG</option>
                                            <option value="MATARAM">MATARAM</option>
                                            <option value="E-GAP">E-GAP</option>
                                            <option value="KASAL">KASAL</option>
                                            <option value="OSERO">OSERO</option>
                                            <option value="PEDNO">PEDNO</option>
                                            <option value="DILAM">DILAM</option>
                                            <option value="ALFON ">ALFON </option>
                                            <option value="GUREDA">GUREDA</option>
                                            <option value="179">179</option>
                                            <option value="PORAK">PORAK</option>
                                            <option value="OPROB">OPROB</option>
                                            <option value="YUANA">YUANA</option>
                                            <option value="NOMAD">NOMAD</option>
                                            <option value="NISOK">NISOK</option>
                                            <option value="PERKUIN">PERKUIN</option>
                                            <option value="RUPKA">RUPKA</option>
                                            <option value="LEPAS">LEPAS</option>
                                            <option value="PURWAKARTA (PW)">PURWAKARTA (PW)</option>
                                            <option value="JATAM">JATAM</option>
                                            <option value="OBMAT">OBMAT</option>
                                            <option value="MAUBI">MAUBI</option>
                                            <option value="GUTEV">GUTEV</option>
                                            <option value="BKL">BKL</option>
                                            <option value="BOSLO">BOSLO</option>
                                            <option value="GOBAL">GOBAL</option>
                                            <option value="PULO MAS">PULO MAS</option>
                                            <option value="TALIA">TALIA</option>
                                            <option value="X-5">X-5</option>
                                            <option value="MKE">MKE</option>
                                            <option value="NILOT">NILOT</option>
                                            <option value="ATMAP">ATMAP</option>
                                            <option value="BRAVO">BRAVO</option>
                                            <option value="APASI">APASI</option>
                                            <option value="ISBIX">ISBIX</option>
                                            <option value="SUMDI">SUMDI</option>
                                            <option value="NIRIS">NIRIS</option>
                                            <option value="DEKAL">DEKAL</option>
                                            <option value="DIL">DIL</option>
                                            <option value="KIKEM">KIKEM</option>
                                            <option value="BLI">BLI</option>
                                            <option value="LEPAR">LEPAR</option>
                                            <option value="TASEK">TASEK</option>
                                            <option value="KUALA">KUALA</option>
                                            <option value="LABAT">LABAT</option>
                                            <option value="BINJAI">BINJAI</option>
                                            <option value="JIWIKA">JIWIKA</option>
                                            <option value="TELES">TELES</option>
                                            <option value="TALAM">TALAM</option>
                                            <option value="ODIUM">ODIUM</option>
                                            <option value="UNSEP">UNSEP</option>
                                            <option value="AMRUD">AMRUD</option>
                                            <option value="OKABU">OKABU</option>
                                            <option value="ANIPU">ANIPU</option>
                                            <option value="MALUK">MALUK</option>
                                            <option value="OSMON">OSMON</option>
                                            <option value="BALI &quot;BLI&quot;">BALI "BLI"</option>
                                            <option value="JOLAM">JOLAM</option>
                                            <option value="JMB">JMB</option>
                                            <option value="TOPO">TOPO</option>
                                            <option value="MILAT">MILAT</option>
                                            <option value="ENAROTALI">ENAROTALI</option>
                                            <option value="BAKAL">BAKAL</option>
                                            <option value="KATAN">KATAN</option>
                                            <option value="TIMIKA &quot;TMK&quot;">TIMIKA "TMK"</option>
                                            <option value="MASRI">MASRI</option>
                                            <option value="RAMPY">RAMPY</option>
                                            <option value="015">015</option>
                                            <option value="EBONY">EBONY</option>
                                            <option value="BOSTI">BOSTI</option>
                                            <option value="BOLUG">BOLUG</option>
                                            <option value="W-1">W-1</option>
                                            <option value="X-4">X-4</option>
                                            <option value="ALTAR">ALTAR</option>
                                            <option value="SPADA">SPADA</option>
                                            <option value="NUPIA">NUPIA</option>
                                            <option value="DOMIL">DOMIL</option>
                                            <option value="PIALA">PIALA</option>
                                            <option value="SOTRA">SOTRA</option>
                                            <option value="SELSU">SELSU</option>
                                            <option value="SERAN">SERAN</option>
                                            <option value="ALF1">ALF1</option>
                                            <option value="UDONO">UDONO</option>
                                            <option value="KETIV">KETIV</option>
                                            <option value="BALIKPAPAN HARBOR">BALIKPAPAN HARBOR</option>
                                            <option value="ALGAP">ALGAP</option>
                                            <option value="NMA">NMA</option>
                                            <option value="SADAN">SADAN</option>
                                            <option value="TMK">TMK</option>
                                            <option value="BOKONDIDNI">BOKONDIDNI</option>
                                            <option value="IKAPI">IKAPI</option>
                                            <option value="KOLOT">KOLOT</option>
                                            <option value="HELIT">HELIT</option>
                                            <option value="DOTIR">DOTIR</option>
                                            <option value="NYOMA">NYOMA</option>
                                            <option value="BALAR">BALAR</option>
                                            <option value="PEKDO">PEKDO</option>
                                            <option value="NGLORAM">NGLORAM</option>
                                            <option value="DOM">DOM</option>
                                            <option value="EROSY">EROSY</option>
                                            <option value="ROBIT">ROBIT</option>
                                            <option value="IBAMA">IBAMA</option>
                                            <option value="SO">SO</option>
                                            <option value="PAL">PAL</option>
                                            <option value="TUNDA">TUNDA</option>
                                            <option value="IMU">IMU</option>
                                            <option value="BUDIT">BUDIT</option>
                                            <option value="ABEAM GUNUNG RINGGIT">ABEAM GUNUNG RINGGIT</option>
                                            <option value="ALOBA">ALOBA</option>
                                            <option value="CLP">CLP</option>
                                            <option value="SAPDA">SAPDA</option>
                                            <option value="BEDAX">BEDAX</option>
                                            <option value="FIR BDRY">FIR BDRY</option>
                                            <option value="X-2">X-2</option>
                                            <option value="SURABAYA &quot;SBR&quot;">SURABAYA "SBR"</option>
                                            <option value="CAPE JANGKAR">CAPE JANGKAR</option>
                                            <option value="BIRAS">BIRAS</option>
                                            <option value="KANAL">KANAL</option>
                                            <option value="OKADA">OKADA</option>
                                            <option value="KASOL">KASOL</option>
                                            <option value="DIOLA">DIOLA</option>
                                            <option value="IDAMI">IDAMI</option>
                                            <option value="TISTO">TISTO</option>
                                            <option value="TOMAN">TOMAN</option>
                                            <option value="BELBA">BELBA</option>
                                            <option value="IF-MILA">IF-MILA</option>
                                            <option value="FORMY">FORMY</option>
                                            <option value="PKU">PKU</option>
                                            <option value="MELAM">MELAM</option>
                                            <option value="ROPIA">ROPIA</option>
                                            <option value="PYRAMID">PYRAMID</option>
                                            <option value="TAVIP">TAVIP</option>
                                            <option value="BISOM">BISOM</option>
                                            <option value="W-3">W-3</option>
                                            <option value="ALMO">ALMO</option>
                                            <option value="PURWAKARTA &quot;PW&quot;">PURWAKARTA "PW"</option>
                                            <option value="BILOGAI">BILOGAI</option>
                                            <option value="TRIBO">TRIBO</option>
                                            <option value="ABEAM BABAT">ABEAM BABAT</option>
                                            <option value="IBALA">IBALA</option>
                                            <option value="DORIA">DORIA</option>
                                            <option value="LEBON">LEBON</option>
                                            <option value="MEDIA">MEDIA</option>
                                            <option value="LAMUD">LAMUD</option>
                                            <option value="195">195</option>
                                            <option value="BARUS">BARUS</option>
                                            <option value="ALT">ALT</option>
                                            <option value="NABIRE &quot;ZN&quot;">NABIRE "ZN"</option>
                                            <option value="BUNIK">BUNIK</option>
                                            <option value="LATOS">LATOS</option>
                                            <option value="MADIN">MADIN</option>
                                            <option value="POINT&quot;ROMEO&quot;">POINT"ROMEO"</option>
                                            <option value="BATUJAI LAKE">BATUJAI LAKE</option>
                                            <option value="NGORO">NGORO</option>
                                            <option value="PONDOK CABE">PONDOK CABE</option>
                                            <option value="YANKEE">YANKEE</option>
                                            <option value="JOLIA">JOLIA</option>
                                            <option value="DUAMO">DUAMO</option>
                                            <option value="JODRA">JODRA</option>
                                            <option value="SANUR BEACH">SANUR BEACH</option>
                                            <option value="NEGARA">NEGARA</option>
                                            <option value="SIPUT">SIPUT</option>
                                            <option value="AGUNG">AGUNG</option>
                                            <option value="FIMBA">FIMBA</option>
                                            <option value="EGATU">EGATU</option>
                                            <option value="TOPIN">TOPIN</option>
                                            <option value="PENNY">PENNY</option>
                                            <option value="IPKON">IPKON</option>
                                            <option value="GUGUS">GUGUS</option>
                                            <option value="MOLLY">MOLLY</option>
                                            <option value="KARAWACI">KARAWACI</option>
                                            <option value="12">12</option>
                                            <option value="EMONA">EMONA</option>
                                            <option value="AKUKO">AKUKO</option>
                                            <option value="DOLTA">DOLTA</option>
                                            <option value="WAMENA">WAMENA</option>
                                            <option value="PO">PO</option>
                                            <option value="ESLOG">ESLOG</option>
                                            <option value="HALUWON">HALUWON</option>
                                            <option value="MANADO &quot;MNO&quot;">MANADO "MNO"</option>
                                            <option value="TIRAM">TIRAM</option>
                                            <option value="HIPNO">HIPNO</option>
                                            <option value="GALKO">GALKO</option>
                                            <option value="FALAM">FALAM</option>
                                            <option value="BIDAK">BIDAK</option>
                                            <option value="BEGMI">BEGMI</option>
                                            <option value="SBR">SBR</option>
                                            <option value="RUSMA">RUSMA</option>
                                            <option value="GABUS">GABUS</option>
                                            <option value="TOSOK">TOSOK</option>
                                            <option value="MABIX">MABIX</option>
                                            <option value="DUNIA">DUNIA</option>
                                            <option value="MTM">MTM</option>
                                            <option value="SAMGE">SAMGE</option>
                                            <option value="TANJUNG SANTAN">TANJUNG SANTAN</option>
                                            <option value="LADIR">LADIR</option>
                                            <option value="LEMUS">LEMUS</option>
                                            <option value="CIKARANG">CIKARANG</option>
                                            <option value="KANIP">KANIP</option>
                                            <option value="EBE">EBE</option>
                                            <option value="KARUBAGA">KARUBAGA</option>
                                            <option value="SUBANG">SUBANG</option>
                                            <option value="KENDO">KENDO</option>
                                            <option value="DOLEM">DOLEM</option>
                                            <option value="ANY">ANY</option>
                                            <option value="KIRDA">KIRDA</option>
                                            <option value="KIKOR">KIKOR</option>
                                            <option value="MAMOK">MAMOK</option>
                                            <option value="SILADEN">SILADEN</option>
                                            <option value="ZW">ZW</option>
                                            <option value="PNK">PNK</option>
                                            <option value="PURI">PURI</option>
                                            <option value="ALF2">ALF2</option>
                                            <option value="SURGA">SURGA</option>
                                            <option value="ILLAGA">ILLAGA</option>
                                            <option value="BONDA">BONDA</option>
                                            <option value="ALEGO">ALEGO</option>
                                            <option value="KEMA">KEMA</option>
                                            <option value="ZV">ZV</option>
                                            <option value="BIDUR">BIDUR</option>
                                            <option value="MERIM">MERIM</option>
                                            <option value="MERAK">MERAK</option>
                                            <option value="NETTO">NETTO</option>
                                            <option value="PIGAS">PIGAS</option>
                                            <option value="KOMOPA">KOMOPA</option>
                                            <option value="LOLOT">LOLOT</option>
                                            <option value="BIKAL">BIKAL</option>
                                            <option value="VIRAN">VIRAN</option>
                                            <option value="ISRAN">ISRAN</option>
                                            <option value="KPG">KPG</option>
                                            <option value="ALFON">ALFON</option>
                                            <option value="ABM THULADANG">ABM THULADANG</option>
                                            <option value="RINTO">RINTO</option>
                                            <option value="YOUTADI">YOUTADI</option>
                                            <option value="BORAS">BORAS</option>
                                            <option value="PKY">PKY</option>
                                            <option value="HARBOUR">HARBOUR</option>
                                            <option value="LAMIN">LAMIN</option>
                                            <option value="ABEAM BALURAN">ABEAM BALURAN</option>
                                            <option value="KALI JUDAN">KALI JUDAN</option>
                                            <option value="POINT &quot;ROMEO&quot;">POINT "ROMEO"</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-2 me-4">
                                    <button type="button" onclick="addPoint()" class="btn btn-primary text-white">
                                        +
                                    </button>
                                </div>
                                <div class="col-8 me-4 fw-bold">
                                    <label for="routeP" class="me-2 mb-0 col-form-label"></label>
                                    <textarea class="form-control" name="routeP"  style="height: 100px;"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-1 me-4">
                                        <button type="button" onclick="removePoint()" class="btn btn-danger text-white">
                                            <-
                                        </button>
                                    </div>
                                    <div class="col-2 me-4">
                                        <a href="#" class="btn btn-warning text-white">
                                            Route Chart
                                        </a>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <p>18. OTHER INFORMATION</p>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('STS/') }}</label>
                                        <textarea class="form-control" id="STS" name="STS" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('PBN/') }}</label>
                                        <textarea class="form-control" id="PBN" name="PBN" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('NAV/') }}</label>
                                        <textarea class="form-control" id="NAV" name="NAV" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('COM/') }}</label>
                                        <textarea class="form-control" id="COM" name="COM" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('DAT/') }}</label>
                                        <textarea class="form-control" id="DAT" name="DAT" style="height: 100px;"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('SUR/') }}</label>
                                        <textarea class="form-control" id="SUR" name="SUR" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('DEP/') }}</label>
                                        <textarea class="form-control" id="DEP" name="DEP" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('DEST/') }}</label>
                                        <textarea class="form-control" id="DEST" name="DEST" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label text-primary">{{ __('REG/') }}</label>
                                        <textarea class="form-control" id="REG" name="REG" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('EET/') }}</label>
                                        <textarea class="form-control" id="EET" name="EET" style="height: 100px;"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('SEL/') }}</label>
                                        <textarea class="form-control" id="SEL" name="SEL" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('TYP/') }}</label>
                                        <textarea class="form-control" id="TYP" name="TYP" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('CODE/') }}</label>
                                        <textarea class="form-control" id="CODE" name="CODE" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('DLE/') }}</label>
                                        <textarea class="form-control" id="DLE" name="DLE" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label text-primary">{{ __('OPR/') }}</label>
                                        <textarea class="form-control" id="OPR" name="OPR" style="height: 100px;"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('ORGN/') }}</label>
                                        <textarea class="form-control" id="ORGN" name="ORGN" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('PER/') }}</label>
                                        <textarea class="form-control" id="PER" name="PER" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('ALTN/') }}</label>
                                        <textarea class="form-control" id="ALTN" name="ALTN" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('RALT/') }}</label>
                                        <textarea class="form-control" id="RALT" name="RALT" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('TALT/') }}</label>
                                        <textarea class="form-control" id="TALT" name="TALT" style="height: 100px;"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('RIF/') }}</label>
                                        <textarea class="form-control" id="RIF" name="RIF" style="height: 100px;"></textarea>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="" class="me-2 mb-0 col-form-label">{{ __('RMK/') }}</label>
                                        <textarea class="form-control" id="RMK" name="RMK" style="height: 100px;"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="row mb-3">
                                    <p>SUPPLEMENTARY INFORMATION</p>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="endurance" class="me-2 mb-0 col-form-label text-primary">{{ __('19.ENDURANCE') }}</label>
                                        <input name="endurance" id="endurance" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="supp_people" class="me-2 mb-0 col-form-label text-primary">{{ __('PERSON ON BOARD') }}</label>
                                        <div class="row">
                                            <div class="col-3">
                                                <p>P/</p>
                                            </div>
                                            <div class="col-lg">
                                                <input name="supp_people" id="supp_people" class="p-2 rounded form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 me-4 fw-bold">
                                        <label for="supp_radio" class="me-2 mb-0 col-form-label text-primary">{{ __('EMERGENCY RADIO') }}</label>
                                        <div class="row">
                                            <div class="col-2">
                                                R/
                                            </div>
                                            <div class="col-2">
                                                <label class="container">UHF
                                                    <input id="supp_radio[]" name="supp_radio[]" type="checkbox" value="UHF">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">VHF
                                                    <input id="supp_radio[]" name="supp_radio[]" type="checkbox" value="VHF">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">ELT
                                                    <input id="supp_radio[]" name="supp_radio[]" type="checkbox" value="ELT">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6 me-4 fw-bold">
                                        <label for="supp_survival" class="me-2 mb-0 col-form-label text-primary">{{ __('SURVIVAL EQUIPMENT') }}</label>
                                        <div class="row">
                                            <div class="col-1">
                                                <label class="container">S/
                                                    <input id="supp_survival[]" name="supp_survival[]" type="checkbox" value="S/">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">POLAR
                                                    <input id="supp_survival[]" name="supp_survival[]" type="checkbox" value="POLAR">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">DESERT
                                                    <input id="supp_survival[]" name="supp_survival[]" type="checkbox" value="DESERT">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">MARITIME
                                                    <input id="supp_survival[]" name="supp_survival[]" type="checkbox" value="MARITIME">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">JUNGLE
                                                    <input id="supp_survival[]" name="supp_survival[]" type="checkbox" value="JUNGLE">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4 me-4 fw-bold">
                                        <label for="endurance" class="me-2 mb-0 col-form-label text-primary">{{ __('JACKETS') }}</label>
                                        <div class="row">
                                            <div class="col-1">
                                                <label class="container">J/
                                                    <input name="supp_jacket[]" type="checkbox" value="J/">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">LIGHT
                                                    <input name="supp_jacket[]" type="checkbox" value="LIGHT">
                                                </label>
                                            </div>
                                            <div class="col-3">
                                                <label class="container">FLUORES
                                                    <input name="supp_jacket[]" type="checkbox" value="FLUORES">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">UHF
                                                    <input name="supp_jacket[]" type="checkbox" value="UHF">
                                                </label>
                                            </div>
                                            <div class="col-2">
                                                <label class="container">VHF
                                                    <input name="supp_jacket[]" type="checkbox" value="VHF">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="supp_cover" class="me-2 mb-0 col-form-label text-primary">{{ __('COVER') }}</label>
                                        <label class="container">C
                                            <input name="supp_cover" type="checkbox" value="C">
                                        </label>
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <label for="colour" class="me-2 mb-0 col-form-label text-primary">{{ __('COLOUR') }}</label>
                                        <input name="colour" id="colour" class="p-2 rounded form-control">
                                    </div>
                                    <div class="col-2 me-4 fw-bold">
                                        <div class="row">
                                            <label for="aircraft-colour" class="me-2 mb-0 col-form-label text-primary">{{ __('AIRCRAFT COLOUR') }}</label>
                                            <div class="col-1">
                                                <p>A/</p>
                                            </div>
                                            <div class="col-10">
                                                <input name="aircraft-colour" id="aircraft-colour" class="p-2 rounded form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 me-4 fw-bold">
                                        <div class="row">
                                            <label for="supp_remark" class="me-2 mb-0 col-form-label">{{ __('REMARKS') }}</label>
                                            <div class="col-3">
                                                <label class="container">N/
                                                    <input name="supp_remark" value="N/" type="checkbox">
                                                </label>
                                            </div>
                                            <div class="col-8">
                                                <input name="supp_remark_desc" id="supp_remark_desc" class="p-2 rounded form-control" placeholder="NIL">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4 me-4 fw-bold">
                                            <div class="row">
                                                <label for="supp_pilot" class="me-2 mb-0 col-form-label text-primary">{{ __('PILOT IN COMMAND') }}</label>
                                                <div class="col-2">
                                                    <p>C/</p>
                                                </div>
                                                <div class="col-9">
                                                    <input name="supp_pilot" id="supp_pilot" class="p-2 rounded form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4 me-4 fw-bold">
                                            <label for="supp_reserved" class="me-2 mb-0 col-form-label">{{ __('SPACE RESERVED/') }}</label>
                                            <textarea class="form-control" name="supp_reserved" style="height: 120px;">NIL</textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col-3 me-4 fw-bold">
                                            <label for="filled-by" class="me-2 mb-0 col-form-label text-primary">{{ __('FILED BY') }}</label>
                                            <input name="filled-by" id="filled-by" class="p-2 rounded form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-2 me-4 fw-bold">
                                            <label class="container text-primary">
                                                <input name="accept" type="checkbox" value="accept"> I accept the Terms adn Conditions
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
