@extends('layouts.app')
@section('user', 'active')
@section('content')
<style>
    .container {
        border: 1px solid;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        padding:20px;
        font-size: 20px
    }

    input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    .col-25 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    @media screen and (max-width: 600px) {
        .col-25 {
            width: 100%;
            margin-top: 0;
        }
    }
</style>
<div class="position-relative w-100">
    <div class="container mt-5 shadow border-0 p-5" style="border-radius: 13px; margin-bottom: 35vh;">
        @if(session()->has('berhasil'))
        <div class="alert alert-success la la-thumbs-up"> {{session()->get('berhasil')}} </div>
        @elseif(session()->has('gagal')) 
        <div class="alert alert-danger la la-thumbs-up"> {{session()->get('gagal')}} </div> @endif
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
            {{ $error }} <br/>
            @endforeach
        </div>
        @endif
        <p>
            <b>Account Information</b>
            <table>
                <tr>
                    <td style="width: 57%">Username </td>


                    <td style="width: 3%">:</td>

                    <td>{{Auth::user()->name}}</td>
                </tr>
                <tr>
                    <td style="width: 57%">Originator </td>

                    <td style="width: 3%">:</td>

                    <td>{{Auth::user()->name}}</td>
                </tr>
            </table> <br>

            <i>Use the form below to change your password.</i> <br>
            <i>New password are required to be a minimum of 6 characters in length.</i> <br> <br>

            <b>Password</b>
        </p>

        <form action="{{route('profilPost')}}" method="POST">@csrf
            <div class="row">
                <div class="col-25">
                    <label for="oldpassword">Old Password :</label>
                </div>
                <div class="col-25">
                    <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Enter old password">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">New Password :</label>
                </div>
                <div class="col-25">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter new password" required autocomplete="current-password">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password_confirmation">Confirm New Password :</label>
                </div>
                <div class="col-25">
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Re-type new password" name="password_confirmation" required autocomplete="current-password">
                </div>
            </div>
        

        <div class="row mb-2">
            <div class="col-3 d-inline-flex gap-2">
                <button type="submit" class="btn btn-primary text-white">
                    {{ __('SAVE') }}
                </button>
                <a href="#" class="btn btn-warning text-white" style="">
                    {{ __('RESET') }}
                </a>
            </div>
        </div>
    </form>
    </div>
    <div class="position-absolute bottom-0" style="left: 0; right: 0;">
        @include('layouts.footer')
    </div>
</div>
@endsection
