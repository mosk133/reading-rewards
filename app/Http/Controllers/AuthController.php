<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = $request->input('email');
        $pass = $request->input('password');

        $user = User::where('email', $request->input('email'))->first();

        if ($user && Hash::check($pass, $user->password)){
            Auth::login($user);
            return redirect()->route('profile');
        }else{
            return back()->withErrors(['message' => 'Credenciales incorrectas']);
        }
    }

    public function register(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required',
        ]);

        if (!$request->password === $request->password_confirmation){
            return back()->withErrors(['message' => 'Las contrasenas no coinciden']);
        }

        $user = User::where('email', $request->input('email'))->first();
        if (!is_null($user)){
            return back()->withErrors(['message' => 'El usuario ya existe']);
        }
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'name' => 'name'
        ]);
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
