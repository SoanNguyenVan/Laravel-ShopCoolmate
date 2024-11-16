@extends('admin.home')
@section('content')
   
    <form action="" enctype="multipart/form-data" method="post">
        <div class="mina-admin-right-content-main-right">
            <div class="input-one">
                <input type="text" name="name" value="{{$product -> name}}" placeholder="Tên Sản Phẩm">
            </div>
            <div class="input-two">
                <input type="text" name="price" value="{{$product -> price}}" placeholder="Giá Bán">
                <input type="text" name="sale_price" value="{{$product -> sale_price}}"  placeholder="Giá Giảm">
            </div>
            <textarea class="textarea-description" placeholder="Đặc Điểm Nổi Bật" name="description"
                id="editor_description">{{$product -> description}}</textarea>
            <textarea class="textarea-content" placeholder="Chi Tiết Sản Phẩm" name="content"
                id="editor_content">{{$product -> content}}</textarea>
            <button type="submit" class="main-btn">Cập Nhật Sản Phẩm</button>
        </div>
        <div class="mina-admin-right-content-main-left">
            <div class="input-file">
                <label id="file-label" for="file"><i class="ri-file-image-line"></i>Ảnh Đại Diện</label>
                <input type="file" id="file">
                <input type="hidden" value="{{$product -> product_image}}" name="product_image" id="product-image">
                <div class="input-file-img" id="input-file-img">
                    <img src="{{$product -> product_image}}" alt="">
                </div>
            </div>
            <div class="input-file">
                <label id="files-label" for="files"><i class="ri-file-image-line"></i>Ảnh Sản Phẩm</label>
                <input type="file" id="files" multiple>
                <div class="input-file-imgs" id="input-file-imgs">
                    @php
                        $product_images = json_decode($product -> product_images,true);
                    @endphp
                        @foreach ($product_images as $product_image)
                            <img src="{{$product_image}}" alt="">
                            <input type="hidden" value="{{$product_image}}" class="product-images" name="product_images[]" id="product-images"> 
                        @endforeach
                
              
                     {{-- <input type="hidden" value="" class="product-images" name="product-images[]" id="product-images"> --}}
                </div>
            </div>
        </div>
        @csrf
    </form>
  
@endsection
@section('footer')
    <script src="/ckeditor5/ckeditor.js"></script>
    <script src="/ckfinder/ckfinder.js"></script>
    <script type="text/javascript">

        ClassicEditor
            .create( document.querySelector( '#editor_description'), {
                ckfinder: {uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
       
    
            },
            } )
            .catch( function( error ) {
                console.error( error );
            } );
        ClassicEditor
            .create( document.querySelector( '#editor_content' ), {
                ckfinder: {uploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
       
    
            },
            } )
            .catch( function( error ) {
                console.error( error );
            } );


    </script>
@endsection
