<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    //
    public function login()
    {
        return view("Admin.login");
    }

    public function checklogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1])) {
            $request->session()->regenerate();
            return redirect()->route('admin.index');
        } else {
            dd(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1]));
        }
    }
    public function index()
    {
        $currentDateFormatted = now()->format('Y-m-d'); // Format for MySQL date comparison

        $DAYLY = DB::table('laravelapp.statistics_table')
            ->select(DB::raw('SUM(thanhtien) as DAYLY'))
            ->whereDate('purchase_date', $currentDateFormatted)
            ->first();

        $MONTHLY = DB::table('laravelapp.statistics_table')
            ->select(DB::raw('SUM(thanhtien) as MONTHLY'))
            ->whereMonth('purchase_date', now()->month)
            ->first();
        $PENDING = DB::table('laravelapp.order_view')
            ->select(DB::raw('count(id) as PENDING'))
            ->first();
        $TASK = DB::table('laravelapp.statistics_table')
            ->select(DB::raw('count(id) as TASK'))
            ->first();
       
        $info = [
            "day" => $DAYLY->DAYLY ?? 0, // Default to 0 if no records found
            "month" => $MONTHLY->MONTHLY ?? 0,
            "pending" => $PENDING->PENDING ?? 0, // Default to 0 if no records found
            "task"  => (1 - $PENDING->PENDING ?? 0 / $TASK->TASK ?? 1) * 100
        ];
        // dd($info);

        return view("Admin.index")->with("info", $info);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route("admin.login");
    }
}
