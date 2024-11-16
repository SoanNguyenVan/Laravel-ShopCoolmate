<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        return view('admin.product.add',[
            'title' => 'Thêm Sản Phẩm'
        ]);
    }
    public function show(){
        $products = DB::table('products') 
       
        ->orderByDesc('id')   
        ->paginate(3);
        // ->get();
      
        return view('admin.product.list',[
            'title' => 'Danh Sách Sản Phẩm',
            'products' => $products
        ]);
    }
    public function storeimg(Request $request)
    {
       $fileName =time().'-'.$_FILES['file']['name'];
       $path = $request -> file('file')-> storeAs('public/images',$fileName);
       $url = '/storage/images/'.$fileName;
       return response() ->json([
            'url' => $url,
            'success' => true
       ]);
       
    }
    public function storeimgs(Request $request){
        $files = $request -> file('files');
       for ($i=0; $i < count($files) ; $i++) { 
        // dd($files[0] -> getClientOriginalName());
        $fileName =time().'-'.$files[$i]->getClientOriginalName();
        $files[$i] -> storeAs('/public/images',$fileName);
        $url[] = '/storage/images/'.$fileName;
        
       }
       return response() -> json([
        'success' => true,
        'url' => $url

    ]);
    
    }

    public function create (Request $request){
       $product = new product();
       $product -> name = $request -> input('name');
       $product -> price = $request -> input('price');
       $product -> sale_price = $request ->input('sale_price');
       $product -> description = $request ->input('description');
       $product -> content =$request ->input('content');
       $product -> product_image = $request ->input('product_image');
       $product_images = json_encode($request -> input('product_images'));
       $product -> product_images = $product_images;
       $product -> save();
       return redirect()->back();
    }
    public function delete(Request $request){
       $product =DB::table('products')->where('id',$request->id)->delete();
       if($product) {
        return response() ->json([
            'success' => true
        ]);
       }

    }
    public function edit(Request $request) {
        $product = product::where('id',$request->id) ->first();
        // dd($product);
        return view('admin.product.edit',[
            'title' => 'Chỉnh Sửa Sản Phẩm',
            'product' => $product
        ]);
    }
    public function update(Request $request){
        $product = product::find($request -> id);
        $product -> name = $request -> input('name');
        $product -> price = $request -> input('price');
        $product -> sale_price = $request ->input('sale_price');
        $product -> description = $request ->input('description');
        $product -> content =$request ->input('content');
        $product -> product_image = $request ->input('product_image');
        $product_images = json_encode($request -> input('product_images'));
        $product -> product_images = $product_images;
        $product -> save();
        return redirect('/admin/product/list');

    }
}
