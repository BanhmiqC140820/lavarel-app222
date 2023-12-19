<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function login() {
        return view("Admin.login");
    }

    public function checklogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>1])){
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        }else{
            echo" dang nhap that bai";
        }
    }
    public function index() {
        return view("Admin.index");
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route("admin.login");
    }
}
