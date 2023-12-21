<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{   
    public function index(Request $request){
    $mh = $request->input('mh');
    $th = $request->input('th');
    $giaTam = $request->input('gia');
    $img = $request->input('img');
    $gia = (int)$giaTam;

    if ($mh && $th && $gia && $img) {
        $this->themVaoGioHang($mh,$th,$gia,1,$img);
        
    }
}
public function themVaoGioHang($mh, $th, $gia, $soluong, $img)
{
    $giohang = Session::get('giohang', collect());

    // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
    $sanpham = $giohang->firstWhere('mahang', $mh);

    if ($sanpham) {
        // Nếu sản phẩm đã tồn tại, cập nhật số lượng
        $sanpham['soluongmua'] += $soluong;
    } else {
        // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
        $giohang->push([
            'mahang' => $mh,
            'tenhang' => $th,
            'gia' => $gia,
            'soluongmua' => $soluong,
            'img' => $img,
        ]);
    }

    // Lưu giỏ hàng vào session
    Session::put('giohang', $giohang);

    // Redirect hoặc thực hiện các công việc khác
    // ...

    return view('ShoppingCart.index', compact('giohang'));
}
public function hienThiGioHang()
{
    $giohang = Session::get('giohang', collect());

    return view('ShoppingCart.index', compact('giohang'));
}
}
