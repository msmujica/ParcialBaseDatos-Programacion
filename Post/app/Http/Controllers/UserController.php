<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function Register(Request $request){
        $u = new User();
        $u -> name = $request -> post("username");
        $u -> email = $request -> post("email");
        $u -> password = Hash::make($request -> post("password"));

        $u -> save();

        return redirect("/")-> with("created",true);
    }
}
