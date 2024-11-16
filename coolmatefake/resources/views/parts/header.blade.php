<header>
    <div class="container">
        <div class="row-flex row-flex-header">
            <div class="header-bar-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="header-logo">
                <a href="/" class="logo"><img src="/frontend/images/logo.png" alt=""></a>
            </div>
            <div class="header-logo-mobile">
                <a href=""><img src="/frontend/images/logomobile.png" alt=""></a>
            </div>
            <nav>
                <ul>
                    <li><a href="">SẢN PHẨM</a></li>
                    <li><a href=""> ĐỒ LÓT</a></li>
                    <li><a href="">MẶC HẰNG NGÀY</a></li>
                    <li><a href="">ĐỒ THỂ THAO</a></li>
                    <li><a href="">SẢN XUẤT RIÊNG</a></li>
                    <li><a href="">CARE&SHARE</a></li>
                </ul>
            </nav>
            <div class="header-search">
                <input type="text" placeholder="Tìm kiếm...">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="header-cart-icon">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>
                    {{Session::get('cart') !=null? count(Session::get('cart')):'0'}}
                </span>
            </div>
        </div>

    </div>
    <div class="header-cart-box">
        @if (Session::get('cart')!=null)
            <ul>
                @foreach ($products_cart as $item)
                    <li>
                        <img src="{{$item -> product_image}}" alt="">
                        <div class="header-cart-box-text">
                            <div class="header-cart-box-text-top">
                                <h1 class="h1-product-smaller">
                                    {{$item -> name}}
                                </h1>
                                <span class="span-product-smaller">
                                    100%|Cotton
                                </span>
                            </div>
                            <div class="header-cart-box-text-bottom">
                                <p class="p-product-smaller">{{number_format($item -> price)}}đ<span class="span-product-smaller"
                                        style="text-decoration: line-through; margin-left: 3px;">{{number_format($item->sale_price)}}đ</span> </p>
                                <p class="p-product-smaller">SL: {{Session::get('cart')[$item->id]}}</p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <a href="/cart"><button class="main-button">Giỏ Hàng</button></a>
        @else
            <ul>
                <li>Giỏ Hàng Trống</li>
            </ul>
            <a href="/"><button class="main-button">Mua Hàng</button></a>
        @endif
       
    </div>
</header>