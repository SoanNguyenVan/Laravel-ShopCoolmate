@extends('admin.home')
@section('content')
    <table class="main-table">
        <tr>
            <th>ID</th>
            <th>Ảnh</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Bán</th>
            <th>Giá Giảm</th>
            <th>Ngày Đăng</th>
            <th>Tùy Chỉnh</th>
        </tr>
        @foreach ($products as $product)
            <tr>
            
                    <td>{{$product -> id}}</td>
                    <td><img style="width: 70px;" src="{{$product -> product_image}}" alt=""></td>
                    <td>{{$product -> name}}</td>
                    <td>{{number_format($product -> price)}}</td>
                    <td>{{number_format($product -> sale_price)}}</td>
                    <td>{{$product -> updated_at}}</td>
                    <td>
                        <a class="table-button" href="/admin/product/edit/{{$product->id}}">Sửa</a>|<a class="table-button-red" onclick="removerow({{$product->id}},'/admin/product/delete')" href="#">Xóa</a>
                    </td>
            </tr>
        @endforeach
      
    </table>

        {!! $products->links() !!}
    
@endsection