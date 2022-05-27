<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance..
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');
    }
    public function home()
    {
        return view('home');
    }
    public function profil()
    {
        return view('profil');
    }
    public function profilPost(Request $request)
    {
        $iduser = Auth::user()->id;
        $user = DB::table('users')->where('id',$iduser)->first();

        $oldpassword = $request->oldpassword;
        if(Hash::check($oldpassword, $user->password))
        {
            $validateData = $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);

            DB::table('users')->where('id',$iduser)->update([
                'password' => Hash::make($validateData['password']),
            ]);
            return redirect()->route('profil')->with('berhasil','Password berhasil diganti');
        }

        return redirect()->route('profil')->with('gagal','Password gagal diganti');
    }
    public function admin()
    {
        return view('admin');
    }
}
