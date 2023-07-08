<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class UserController extends Controller{

    public function Register(Request $request){
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password-confirmation' => ['required']
        ],[
            'username.required' => 'Porfavor Ingrese Usuario',
            'email.required' => 'Porfavor Ingrese Email',
            'email.unique' => 'El email Ya Esta Registrado.',
            'password.required' => 'Porfavor Ingrese Contraseña',
            'password.confirmed' => 'La Contraseña No Es Igual',
            'password-confirmation.required' => 'Porfavor Ingrese Contraseña'
        ]);

        $u = new User();

        $u -> name = $request -> post("username");
        $u -> email = $request -> post("email");
        $u -> password = Hash::make($request -> post("password"));

        $u -> save();

        return redirect("/")-> with("created",true);
    }

    public function Login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) 
            return redirect("/listarMisPosts")->with("logued",true);
        return redirect("/")->with("failed",true);
    }

    public function Logout(Request $request){
        Auth::logout();
        return redirect("/")->with("logout",true);
    }
}
