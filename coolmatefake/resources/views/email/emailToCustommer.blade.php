<h1 style="font-size: medium;">Xac nhan don hang: <span style="font-size: larger; color: brown;">{{$success -> name}}(#{{$success -> id}})</span></h1>

<h2 style=" font-size: medium; font-weight: normal;">Chi Tiet Don Hang:</h2>

<table 
style=" border: 1px solid #ddd;
border-collapse: collapse;
text-align: center;">
    <tr style="background-color: black; color: aliceblue;padding: 6px 12px; ">
        <th style="padding: 6px 12px;">Stt</th>
        <th style="padding: 6px 12px;">Ảnh</th>
        <th style="padding: 6px 12px;">Tên</th>
        <th style="padding: 6px 12px;">Giá</th>
        <th style="padding: 6px 12px;">Số Lượng</th>
        <th style="padding: 6px 12px;">Thành Tiền</th>
    </tr>
    @php
        $i = 0;
        $totals =0;
    @endphp
    @foreach ( $products_success as $item)
    @php
        $total = $item -> price * $order_detail_success[$item ->id];
        $totals += $total;
    @endphp
            <tr style="border: 1px solid #ddd;">
                <td style="padding: 6px 12px;">{{$i =$i+1}}</td>
                <td style="padding: 6px 12px;">
                    <img style="width: 70px;" src="https://media.coolmate.me/cdn-cgi/image/quality=80,format=auto/uploads/August2023/AT220-DEN-1.jpg" alt="">
                </td>
                <td style="padding: 6px 12px;">{{$item -> name}}</td>
                <td style="padding: 6px 12px;">{{number_format($item -> price)}}</td>
                <td style="padding: 6px 12px;">{{$order_detail_success[$item ->id]}}</td>
                <td style="padding: 6px 12px;">{{number_format($total)}}</td>
            </tr>
    @endforeach
    <tr style="font-weight: bold;">
        <td style="padding: 6px 12px;" style="text-align: center;" colspan="5"> Tong tien</td>
        <td style="padding: 6px 12px;">{{number_format($totals)}}</td>
    </tr>
</table>
<h2 style=" font-size: medium; font-weight: normal;">Thong tin Giao hàng:</h2>

<table 
style=" border: 1px solid #ddd;
border-collapse: collapse;
text-align: center;">
    <tr style="background-color: black; color: aliceblue;padding: 6px 12px; ">
        <th style="padding: 6px 12px;">Tên</th>
        <th style="padding: 6px 12px;">Phone</th>
        <th style="padding: 6px 12px;">Email</th>
        <th style="padding: 6px 12px;">Địa chỉ</th>
        <th style="padding: 6px 12px;">Ghi chú</th>
    </tr>
    <tr style="border: 1px solid #ddd;">
        <td style="padding: 6px 12px;">{{$success -> name}}</td>
        <td style="padding: 6px 12px;">{{$success -> phone}}</td>
        <td style="padding: 6px 12px;">{{$success -> email}}</td>
        <td style="padding: 6px 12px;">{{$success -> address}}</td>
        <td style="padding: 6px 12px;">{{$success -> note}}</td>
    </tr> 
</table>
<h2 style=" font-size: medium; font-weight: lighter;">Xac nhan don hang</h2> <a href="{{ route('confirm_order_cus', ['id'=> $success->id,'token' => $success -> token]) }}">Tai Day</a>