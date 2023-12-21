<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    //
    public function login() {
        return view("Admin.login");
    }

    public function checklogin(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>0])){
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        }else{
            dd(Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>0]));
        }
    }
    public function index() {
        return view("Admin.index");
    }

    public function logout(Request $request): RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route("admin.login");
    }
}
