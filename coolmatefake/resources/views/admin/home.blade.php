<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.parts.head')
</head>

<body>
    <section class="mina-admin">
        <div class="container-coolmate">
            <div class="row-coolmate">
                <div class="mina-admin-left">
                    @include('admin.parts.sidebar')
                </div>
                <div class="mina-admin-right">
                    <div class="mina-admin-right-top">
                        @include('admin.parts.header')
                    </div>
                    <div class="mina-admin-right-content">
                        <div class="mina-admin-right-content-title">
                           {{$title}}
                        </div>
                        <div class="mina-admin-right-content-main">
                                @yield('content')
                        </div>
                    </div>
                 
                </div>
            </div>
        
        
        </div>
    </section>
    <footer>
      @include('admin.parts.footer')

     </footer>
</body>

</html>