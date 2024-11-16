<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderFormRequest;
use App\Mail\ConfirmMail;
use App\Models\order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class MainController extends Controller
{
    public function index (){

        return view('home',[
            'title' => 'Trang Chủ'
        ]);
    }
    public function show_product_detail(Request $request){
        $product = product::find($request -> id);
        return view('product',[
            'title' => $product -> name,
            'product' => $product
        ]);
    }
    public function add_cart(Request $request){
    //    Session::flush('cart');
     $product_id = $request -> product_id;
     $product_quantity = $request -> product_quantity;
     if(is_null(Session::get('cart'))){
        Session::put('cart',[
            $product_id => $product_quantity
        ]);
     
       return redirect('/cart');
     }
     else {
        $cart = Session::get('cart');
        if(Arr::exists($cart,$product_id)){
            $cart[$product_id] = $cart[$product_id] + $product_quantity;
            Session::put('cart',$cart);
            return redirect('/cart');
        }
        else {
            $cart[$product_id] = $product_quantity;
            Session::put('cart',$cart);
            return redirect('/cart');
        }
     }
       
    }
  public function show_cart(){
    $cart = Session::get('cart');
    $product_id = array_keys($cart);
    $products = product::whereIn('id',$product_id) ->get();
    return view('cart',[
        'title' => 'Giỏ Hàng',
        'products' => $products
       
    ]);
 
  }
   
   public function delete_cart (Request $request){
        $cart = Session::get('cart');
        $product_id = $request -> id;
        unset($cart[$product_id]);
        Session::put('cart',$cart);
        return redirect('/cart');
   }
   public function update_cart(Request $request){
    $cart = $request -> product_id;
    Session::put('cart',$cart);
    return redirect('/cart');
   }

   public function send_cart(OrderFormRequest $request){
    $token = Str::random(12);
    $order = new order;
    $order -> name = $request -> name;
    $order -> phone = $request -> phone;
    $order -> email = $request -> email;
    $order -> city = $request -> city;
    $order -> district = $request -> district;
    $order -> ward = $request -> ward;
    $order -> address = $request -> address;
    $order -> note = $request -> note;
    $order_detail = json_encode($request -> product_id);
    $order -> order_detail = $order_detail;
    $order -> token = $token ;
    $order ->save();
    Session::flush('cart');
    $id = $order -> id;
    return $this-> show_confirm_order($id );
//    return redirect('confirm_order') -> with('name',$order -> name );
   }
// order Controller
   public function show_order(){
    $orders = order::all() -> sortByDesc('id');
    return view('admin.order.list',[
        'title' => 'Danh Sách Đơn Hàng',
        'orders' => $orders

    ]);
   }
   public function show_order_detail(Request $request){
    $order_detail = json_decode($request->order_detail,true);
    $product_id = array_keys($order_detail);
    $products = product::whereIn('id',$product_id) ->get();
    return view('admin.order.detail',[
        'title' => 'Chi Tiết Đơn Hàng',
        'products' =>  $products,
        'order_detail' => $order_detail 
    ]);

   }
   public function delete_order(Request $request){
 
     $result = order::find($request -> id) -> delete();
     if($result){
        return response() -> json([
            'success' => true
         ]);
     }
     
   }


    public function show_confirm_order($id){
    
        $success = order::find($id);
        $order_detail_success = json_decode($success -> order_detail,true);
        $product_id = array_keys($order_detail_success);
        $products_success = product::whereIn('id',$product_id) -> get();
        $Mail = Mail::to($success -> email) ->send((new ConfirmMail($success,$products_success,$order_detail_success)));
        if($Mail) {
            return view('confirm_order',[
                'title' => 'Xác Nhận Đơn hàng',
                'success' => $success
            ]);
        }
        else {
            return view('confirm_order',[
                'title' => 'Không Gửi Được Đơn Hàng'
            ]);
        }
      
    }
    public function confirm_order_cus(Request $request){
        $order = order::find($request -> id);
        if($order -> token == $request -> token){
            $order -> status = 1;
            $order ->save();
            return redirect('confirm_order_success');
        }
        return redirect('confirm_order_fail');

    }
    public function confirm_order_success(){
        return view('confirm_order_success',[
            'title' => 'Xác nhận đơn hàng thành công'
        ]);
    }
    public function confirm_order_fail(){
        return view('confirm_order_fail',[
            'title' => 'Xác nhận đơn hàng không thành công'
        ]);
    }
}
 