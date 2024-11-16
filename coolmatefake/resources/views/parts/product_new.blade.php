<section class="product">
    <div class="container">
        <div class="row-flex">
            <div class="text-title">
                Sản Phẩm Mới
            </div>
        </div>
        <div class="row-grid row-grid-product">
            @foreach ($products as $product)
                <div class="product-item">
                    <img src="{{$product -> product_image}}" alt="">
                    <a href="/product/{{$product ->id}}-{{Str::slug($product ->name)}}">
                        <h1 class="h1-product">{{$product -> name}}</h1>
                    </a>
                    <span class="span-product">100% Cotton</span>
                    <p class="p-product">{{number_format($product -> price)}}đ<span style="text-decoration: line-through;">{{number_format($product -> sale_price)}}đ</span> </p>
                </div>
            @endforeach
        </div>
    </div>
</section>