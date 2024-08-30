<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\Persona;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function logout()
    {
        Auth::logout();
        return view('auth.login');
    }
    public function loginPost(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'email' => 'required|string|email|max:255',
            'password' => 'required|string',
        ])->validate();
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        //     return redirect()->route('home');
        // }
        $aux =User::Where('email', $request->input('email'))->Where('password', $request->input('password'))->first();
        if($aux){
            Auth::login($aux);
            return view ('welcome');
        }
        else{
            return redirect()->route('login');
        }
        // if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
        //     return view('welcome');
        // } else {
        //     return view('auth.login');
        // }
    }
}
