@extends('main')
@section('content')
 <!-- --------------Cart----------------- -->
 <section class="confirm p-t-100">
    <div class="container">
        <div class="row-grid row-grid-one-item ">
            <div class="text-title">
                Xác Nhân Đơn Hàng: <span class="order-status">Không thành công</span>
            </div>
        </div>
        <div class="row-grid row-grid-one-item ">
            <div class="confirm-order-items">
                <h1 class="h1-product">
                    Đơn hàng của bạn đang ở trang thái <span style="font-weight: bold;">Chưa xác nhận</span>!
                </h1>
                <p class="p-product-smaller">
                    Vùi lòng check <span style="font-weight: bold;">Email</span> Đã đăng ký để kiểm tra  và xác nhận lại thông tin Đơn
                    hàng
                </p>
                <button class="main-button">
                    Tiếp Tục Mua Hàng
                </button>
            </div>
        </div>

    </div>
</section>
@endsection