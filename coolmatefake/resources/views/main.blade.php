<!DOCTYPE html>
<html lang="en">

<head>
    @include('parts.head')
</head>

<body>
    {{-- header --}}
    @include('parts.header')
    {{-- end-header --}}
    {{-- ---content --}}
    @yield('content')
    {{-- end-content --}}
    <!-- --------------Product-------------- -->
    @include('parts.product_new')
    {{-- end-product --}}
    <!-- --------------footer---------------------- -->
    @include('parts.footer')
   {{-- end-footer --}}


   
</body>

</html>