<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ponnobahar | @yield('title')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <script src="{{ asset('/adminStyle/') }}/ckeditor/ckeditor.js"></script>
    <link href="{{ asset('/adminStyle/') }}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link href="{{ asset('/adminStyle/') }}/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="{{ asset('/adminStyle/') }}/plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="{{ asset('/adminStyle/') }}/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap time Picker -->
    <link href="{{ asset('/adminStyle/') }}/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Select2 -->
    <link href="{{ asset('/adminStyle/') }}/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/adminStyle/') }}/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{ asset('/adminStyle/') }}/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/adminStyle/') }}/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper">
    @include('admin.include.header')
    @include('admin.include.menu')
    <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield('body')
        </div>
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.2.0
            </div>
            <strong>Copyright &copy; 2017 <a href="http://ponnobahar.com" target="_blank">Ponnobahar</a>.</strong> All rights reserved.
        </footer>
    @include('admin.include.assite')
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
<!-- jQuery 2.1.4 -->

<script src="{{ asset('/adminStyle/') }}/plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset('/adminStyle/') }}/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Select2 -->
<script src="{{ asset('/adminStyle/') }}/plugins/select2/select2.full.min.js" type="text/javascript"></script>
<!-- InputMask -->
<script src="{{ asset('/adminStyle/') }}/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
<script src="{{ asset('/adminStyle/') }}/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
<script src="{{ asset('/adminStyle/') }}/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>


<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
<script src="{{ asset('/adminStyle/') }}/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<!-- bootstrap color picker -->
<script src="{{ asset('/adminStyle/') }}/plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('/adminStyle/') }}/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
<!-- SlimScroll 1.3.0 -->
<script src="{{ asset('/adminStyle/') }}/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- iCheck 1.0.1 -->
<script src="{{ asset('/adminStyle/') }}/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<!-- FastClick -->
<script src="{{ asset('/adminStyle/') }}/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/adminStyle/') }}/dist/js/app.min.js" type="text/javascript"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('/adminStyle/') }}/dist/js/demo.js" type="text/javascript"></script>
<!-- Page script -->


<script src="{{ asset('/adminStyle/') }}/plugins/datatables/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="{{ asset('/adminStyle/') }}/plugins/datatables/dataTables.bootstrap.min.js" type="text/javascript"></script>

<script>
    $(function () {
        $("#example1").DataTable();
        $(".select2").select2();
    });
</script>






</body>
</html>
