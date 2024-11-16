@extends('main')
@section('content')
 <!-- --------------Cart----------------- -->
 <section class="confirm p-t-100">
    <div class="container">
        <div class="row-grid row-grid-one-item ">
            <div class="text-title">
                Xác Nhân Đơn Hàng: <span class="order-status">Thành Công</span>
            </div>
        </div>
        <div class="row-grid row-grid-one-item ">
            <div class="confirm-order-items">
                <h1 class="h1-product">
                    Đơn hàng của bạn đã được xác nhận <span style="font-weight: bold;">Thành Công</span>!
                </h1>
                <p class="p-product-smaller">
                    Chúng tôi sẽ <span style="font-weight: bold;">Giao hàng</span> trong thời gian tối đa 3 ngày làm việc
                </p>
                <button class="main-button">
                    Tiếp Tục Mua Hàng
                </button>
            </div>
        </div>

    </div>
</section>
@endsection