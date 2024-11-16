@extends('main')
@section('content')
    <!-- --------------Cart----------------- -->
    <section class="cart p-t-100">
        <form action="" method="POST">
            <div class="container">
                <div class="row-grid row-grid-one-item ">
                    <div class="text-title">
                        Giỏ Hàng
                    </div>
                </div>
                <div class="row-grid row-grid-cart">
                    @if (Session::get('cart')==null)
                        <div class="cart-empty">
                            <h2 class="h2-title">
                                Giỏ hàng Trống
                            </h2>
                            <a href="/">                        
                                Tiếp Tục Mua Hàng
                             </a>
                        </div>
                       
                    @else
                        <div class="cart-left">
                            <h2 class="h2-title">Chi Tiết Đơn Hàng</h2>
                            {{-- @php
                                var_dump(Session::get('cart'))
                            @endphp --}}
                            <table>
                                <tr>
                                    <th>Ảnh</th>
                                    <th>Sản phẩm</th>
                                    <th>Thành Tiền</th>
                                    <th>Xóa</th>
                                </tr>
                                @php
                                    $totals =0;
                                @endphp
                            @foreach ($products as $product)
                            @php
                                $total = $product -> price * Session::get('cart')[$product -> id];
                                $totals += $total;
                            @endphp
                                    <tr>
                                            <td>
                                                <img src="{{$product-> product_image}}" alt="">
                                            </td>
                                            <td>
                                                <h1 class="h1-product-smaller">
                                                    {{$product -> name}}
                                                </h1>
                                                <p class="p-product-smaller">{{number_format($product -> price)}}đ<span
                                                        style="text-decoration: line-through; font-size: smaller;margin-left: 12px;font-weight: 300;"> {{number_format($product -> sale_price)}}đ</span>
                                                </p>
                                                <div class="product-detail-quantity">
                                                    <i class="fa-solid fa-minus"></i>
                                                    <input onKeyDown="return false" type="number" name="product_id[{{$product ->id}}]" value="{{Session::get('cart')[$product -> id]}}">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="p-product">
                                                {{number_format($total)}}
                                                </p>
                                            </td>
                                            <td>
                                                <a href="/cart/delete/{{$product->id}}"><i class="fa-solid fa-xmark"></i></a>
                                            </td>
                                    </tr>
                            @endforeach
                                <tr style="font-weight: bolder; background-color: var(--sub-color);">
                                    <th style="text-align: center;" colspan="2">Tổng Tiền</th>
                                    <th style="text-align: left;">{{number_format($totals)}}đ</th>
                                    <th></th>
                                </tr>
                            </table>
                            <button formaction="/cart/update" class="main-button">
                                Cập Nhật Giỏ Hàng
                            </button>
                            <a class="buying-continue" href="/">                        
                                    >>Tiếp Tục Mua Hàng
                            </a>
        
                        </div>
                    @endif
                    <div class="cart-right">
                        @include('parts.alert')
                        <h2 class="h2-title">
                            Thông Tin Giao Hàng
                        </h2>
                        <div class="name-phone">
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Tên">
                            <input type="text" name="phone" value="{{old('phone')}}" placeholder="Điện thoại">
                        </div>
                        <input type="text" name="email" value="{{old('email')}}" placeholder="Email">
                        <div class="province-district-ward">
                            <select name="city" id="city">
                                <option value="">Tỉnh/Tp</option>
                            </select>
                            <select name="district" id="district">
                                <option value="">Quận/Huyện</option>
                            </select>
                            <select name="ward" id="ward">
                                <option value="">Phường/Xã</option>
                            </select>
                        </div>
                        <input type="text" name="address" value="{{old('address')}}" placeholder="Địa chỉ">
                        <input type="text" name="note" value="{{old('note')}}"  placeholder="Ghi chú">
                        <a href=""><button formaction="/cart/send" class="main-button">Gửi Đơn Hàng</button></a>
                    </div>
                </div>
            </div>
            @csrf
        </form>
    </section>
@endsection
@section('footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="/frontend/js/ApiProvince.js"></script>
@endsection