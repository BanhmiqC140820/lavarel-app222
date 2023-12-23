<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function login()
    {
        return view("User.login");
    }
    public function checklogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>0])) {
            $user = User::where('email', $request->email)->first();
            Session::put('user', $user);
            return redirect()->route('user.home');
        } else {
            echo " dang nhap that bai";
        }
    }
    public function index()
    {
        return view("User.index");
    }

    public function register()
    {
        return view("User.register");
    }

    public function store(Request $request){
        $name=$request->firstName." ".$request->LastName;
        $user = User::create([
            'name' => $name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect("login");
    }
}
