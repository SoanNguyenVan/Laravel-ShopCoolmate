@extends('main')
@section('content')
<section class="product-detail p-t-100">
    <div class="container">
        <div class="row-grid">
            <div class="text-title">
                Sản Phẩm -> {{$product -> name}}
            </div>
        </div>
        <div class="row-grid row-grid-product-detail">
            <div class="product-detail-left">
                <img src="{{$product -> product_image}}" alt="" class="big-img">
                @php
                    $product_images = json_decode($product -> product_images,true)
                @endphp
                <div class="product-img-items">
                    @foreach ($product_images as $product_image)
                        <img src="{{$product_image}}" alt="" class="small-img">
                    @endforeach
                   
                </div>
            </div>
            <div class="product-detail-right">
              <form action="/cart/add" method="post">
                    <h1>{{$product -> name}}</h1>
                    <span class="span-product">100%|Cotton</span>
                    <p class="p-product-detail">{{number_format($product -> price)}}đ <span style="text-decoration: line-through;">{{number_format($product -> sale_price)}}đ</span></p>
                    <div class="product-detail-description">
                        <h2 class="h2-title">Đặc điểm nổi bật</h2>
                        {!!$product -> description!!}
                    </div>
                    <h2 class="h2-title">
                        Số Lượng:
                    </h2>
                    <div class="product-detail-quantity">
                        <i class="fa-solid fa-minus"></i>
                        <input onKeyDown="return false" name="product_quantity" type="number" value="1">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <input type="hidden" name="product_id" value="{{$product ->id}}">
                   <button type="submit" class="main-button">Thêm Vào Giỏ Hàng</button>
                   @csrf
              </form>
            </div>
        </div>
        <div class="row-grid row-grid-one-item">
            <div class="product-detail-content">
                <h2 class="text-title product-detail-content-title">
                     Chi Tiêt Sản Phẩm
                </h2>
                <div class="produt-detail-content-text">
                    {!!$product -> content!!}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection