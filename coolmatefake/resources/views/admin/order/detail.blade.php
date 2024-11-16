@extends('admin.home')
@section('content')
    <table class="main-table">
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên</th>
            <th>Giá</th>
            <th>Số Lượng</th>
            <th>Thành Tiền</th>

        </tr>
        @php
            $totals = 0;
        @endphp
        @foreach ($products as $product)
        @php
            $total = $product -> price * $order_detail[$product -> id];
            $totals+=$total;
        @endphp
        <tr>
            <td>{{$product -> id}}</td>
            <td>
                <img style="width: 70px" src="{{$product -> product_image}}" alt="">
            </td>
            <td>{{$product -> name}}</td>
            <td>{{number_format($product -> price)}}</td>
            <td>{{$order_detail[$product -> id]}}</td>
            <td>
              {{number_format($total)}}
            </td>
        </tr>
        @endforeach
        <tr >
            <td style=" font-weight: bolder" colspan="5">Tổng Cộng</td>
            <td>{{number_format($totals)}}</td>
        </tr>
    </table>
@endsection