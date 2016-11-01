<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    {{ Html::style('bootstrap/css/bootstrap.min.css') }}
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {{ Html::style('dist/css/AdminLTE.min.css') }}
    <!-- iCheck -->
    {{Html::style('plugins/iCheck/square/blue.css') }}
    {{Html::style('dist/css/skins/_all-skins.min.css') }}
    {{Html::style('/css/custom.css') }}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body class="hold-transition @if (Auth::guest())login-page @else skin-blue sidebar-mini @endif">
@if (Auth::guest())
    @yield('content')
@else
    <!-- Site wrapper -->
    <div class="wrapper">
    {{--Header--}}
    @include('layouts.header')
    {{--EndHeader--}}
    {{--Aside Menu--}}
    @include('layouts.menu')
    {{--End Aside Menu--}}
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

    </div>
@endif
<!-- /.content-wrapper -->
{{-- Footer--}}
@if (Auth::guest())
    <footer class="main-footer">
            Copyright &copy; 2016 Insitituto Intervalo  - Desenvolvido por <strong> <a href="#" target="_blank">###</a>.</strong>
    </footer>
@else
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            Copyright &copy; 2016 Insitituto Intervalo  - Desenvolvido por <strong> <a href="#" target="_blank">###</a>.</strong>
        </div>
    </footer>
@endif


{{-- End Footer--}}
<!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<!-- jQuery 2.2.3 -->
{{ Html::script('plugins/jQuery/jquery-2.2.3.min.js') }}
<!-- Bootstrap 3.3.6 -->
{{ Html::script('bootstrap/js/bootstrap.min.js') }}
<!-- SlimScroll -->
{{ Html::script('plugins/slimScroll/jquery.slimscroll.min.js') }}
<!-- FastClick -->
{{ Html::script('plugins/fastclick/fastclick.js') }}
<!-- iCheck -->
{{ Html::script('plugins/iCheck/icheck.min.js') }}
{{--App--}}
{{ Html::script('dist/js/app.min.js') }}
@yield('script');
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>

