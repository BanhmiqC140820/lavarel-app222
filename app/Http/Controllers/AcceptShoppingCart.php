<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\InvoiceDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AcceptShoppingCart extends Controller
{
    function accept(){
       
        $userId = Session::get('user'); 
        $userKey = 'giohang_' . $userId['id'];
        $giohang = Session::get($userKey,[]);
        if($giohang!=null &&  !empty($giohang)){
            $hoaDon = Invoice::create([
                'customer_id' => $userId['id'],
                'purchase_date' => Carbon::now(),
                'is_purchased' => 0,
               
            ]);
            $hd = Invoice::max('id');
            foreach($giohang as $g){
                $chitiethoaDon = InvoiceDetail::create([
                    'product_id' => $g['mahang'],
                    'invoice_id' => $hd, 
                    'quantity_purchase' => $g['soluongmua'], 
                    'is_purchased' => 0, 
                ]);
            }
            Session::forget($userKey);
        }
        return redirect()->route('user.home');
    }
}
