<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

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
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 0])) {

            return redirect()->route('User.index');
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
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'LastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $name=$request->firstName+" "+$request->LastName;
        dd($name);
        // $user = User::create([
        //     'name' => $name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        return redirect()->route("home");
    }
}
