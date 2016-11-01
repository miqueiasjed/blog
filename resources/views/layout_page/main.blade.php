<!DOCTYPE html>
<html lang="en">

    <head>
        @include('layout_page._head')
    </head>

    <body>

        @include('layout_page._nav')

        <div class="container">

            @yield('content')

            @include('layout_page._footer')

        </div><!-- end of .container -->

        @include('layout_page._javascript')

            @yield('script')

    </body>

</html>
