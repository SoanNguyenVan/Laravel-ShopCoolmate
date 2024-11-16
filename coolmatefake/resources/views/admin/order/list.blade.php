@extends('admin.home')
@section('content')
    <table class="main-table">
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Địa chỉ</th>
            <th>Ghi Chú</th>
            <th>Chi Tiết</th>
            <th>Ngày</th>
            <th>Trạng Thái</th>
            <th>Tùy Biến</th>
            
            
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{$order -> id}}</td>
            <td>{{$order -> name}}</td>
            <td>{{$order -> phone}}</td>
            <td>{{$order -> email}}</td>
            <td>{{$order -> ward}}, {{$order -> district}}, {{$order -> city}}</td>
            <td>{{$order -> note}}</td>
            <td>
                <a class="table-button" href="/admin/order/detail/{{$order -> order_detail}}">Xem</a>
            </td>
            <td>{{$order -> updated_at}}</td>
            <td>{!!\App\Services\MainAdminServices::status($order -> status)!!}</td>
            <td>
                <a class="table-button" onclick="removerow({{$order -> id}},'/admin/order/delete')" href="#">Xóa</a>
            </td>
        </tr>
        @endforeach
      
    </table>
@endsection