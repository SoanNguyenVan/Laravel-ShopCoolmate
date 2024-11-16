<?php 
namespace App\View;

use App\Models\product;
use Illuminate\View\View;

class ProductNewComposer 
{
    public function compose(View $view):void
    {
        $products = product::select('name','id','product_image','price','sale_price')
            -> orderByDesc('id')
            -> limit(5)
            -> get();
        $view ->with('products',$products);
    }
    
}