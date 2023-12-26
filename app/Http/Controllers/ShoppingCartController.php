<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isNull;

class ShoppingCartController extends Controller
{

    public function index(Request $request)
    {

        $mh = $request->input('mh');
        $th = $request->input('th');
        $giaTam = $request->input('gia');
        $img = $request->input('img');
        $gia = (int) $giaTam;
        if($mh!=null && $th!=null && $giaTam!=null&& $img!=null){
            $userId = Session::get('user');
            if($userId !=null){
            $userKey = 'giohang_' . $userId['id'];
            $giohang = Session::get($userKey,[]);

            $found = false;

            // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng chưa
            foreach ($giohang as &$item) {
                if ($item['mahang'] == $mh) {
                    $item['soluongmua']++;
                    $found = true;
                    break;
                }
                
            }
            unset($item);
            // Nếu không tìm thấy sản phẩm trong giỏ hàng, thêm mới vào
            if ($found==false) {
                $spnew=[
                    'mahang' => $mh,
                    'tenhang' => $th,
                    'gia' => $gia,
                    'soluongmua' => 1,
                    'img' => $img,
                ];
                array_push($giohang, $spnew);
            }
            // Lưu giỏ hàng vào session
            Session::put( $userKey, $giohang);
            return view('ShoppingCart.index');
            }else{
                return redirect()->route('user.login');
            }
        }
        else{
            return view('ShoppingCart.index');
        }
       
    }

    public function deleteall(){
        $userId = Session::get('user'); 
        $userKey = 'giohang_' . $userId['id'];
        Session::forget( $userKey );
        return view('ShoppingCart.index');
    }
    public function delete(Request $request){
        $mh = $request->input('mh');
        $userId = Session::get('user'); 
        $userKey = 'giohang_' . $userId['id'];
        $giohang = Session::get($userKey,[]);
    
        foreach($giohang as $key => $g){
            if($g['mahang'] == $mh){
                // Remove the item from the array
                unset($giohang[$key]);
            }
        }
    
        // Set the updated array back to the session
        Session::put( $userKey, $giohang);
    
        return view('ShoppingCart.index');
    }
    public function update(Request $request){
        $mh = $request->input('mh');
        $userId = Session::get('user'); 
        $userKey = 'giohang_' . $userId['id'];
        $giohang = Session::get($userKey,[]);
        $slm = $request->input('inputsl');
        foreach($giohang as  &$g){
            if($g['mahang'] == $mh){
               $g['soluongmua']=$slm;
            }
        }
        unset($g);
        // Set the updated array back to the session
        Session::put( $userKey, $giohang);
    
        return view('ShoppingCart.index');
    }
    
}
