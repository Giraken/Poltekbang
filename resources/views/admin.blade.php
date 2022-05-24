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
    <div class="container mt-5 shadow border-0 p-5" style="border-radius: 13px; margin-bottom: 10rem;">
        <p>
            <b>Account Information</b>
            <table>
                <tr>
                    <td style="width: 57%">Username </td>


                    <td style="width: 3%">:</td>

                    <td>WARRAKTP (user)</td>
                </tr>
                <tr>
                    <td style="width: 57%">Originator </td>

                    <td style="width: 3%">:</td>

                    <td>WARRAKTP (password)</td>
                </tr>
            </table> <br>

            <i>Use the form below to change your password.</i> <br>
            <i>New password are required to be a minimum of 6 characters in length.</i> <br> <br>

            <b>Password</b>
        </p>

        <form action="/#">
            <div class="row">
                <div class="col-25">
                    <label for="oldpassword">Old Password :</label>
                </div>
                <div class="col-25">
                    <input type="text" class="form-control" id="oldpassword" name="oldpassword" placeholder="Enter old password">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="newpassword">New Password :</label>
                </div>
                <div class="col-25">
                    <input type="text" class="form-control" id="newpassword" name="newpassword" placeholder="Enter new password">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="confirm">Confirm New Password :</label>
                </div>
                <div class="col-25">
                    <input type="text" class="form-control" id="confirm" name="confirm" placeholder="Re-type new password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary text-white" style="font-size:20px">
                {{ __('SAVE') }}
            </button>
            <button type="reset" class="btn btn-warning text-white" style="font-size:20px">
                {{ __('RESET') }}
            </button>
        </form>

        <div style="border: 1px solid;margin:4%"></div>

        <div>
            <p><b>Add new address</b></p>
        </div>

        <form action="/#">
            <div class="row">
                <div class="col-25">
                    <label for="address">Address:</label>
                </div>
                <div class="col-25">
                    <input type="text" class="form-control" id="address" name="address" placeholder="Input new address">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="password">Password :</label>
                </div>
                <div class="col-25">
                    <input type="text" class="form-control" id="newpassword" name="newpassword" placeholder="Enter new password">
                </div>
            </div>

            <button type="submit" class="btn btn-primary text-white" style="margin-top:2%;font-size:20px">
                {{ __('Tambahkan') }}
            </button>
        </form>
    </div>
@endsection
