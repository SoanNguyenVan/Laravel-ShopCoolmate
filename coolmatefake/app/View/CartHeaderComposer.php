<?php 

namespace App\View;

use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;

class CartHeaderComposer 
{
    public function compose (View $view)
    {
       if(Session::get('cart') != null)
       
        {
            $cart = Session::get('cart');
            $product_id = array_keys($cart);
            $products_cart = product::whereIn('id',$product_id) ->get();
            $view -> with('products_cart',$products_cart);
        }
    
    }
}