<!DOCTYPE html>
<html lang="<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgLanguageIdentifier'); ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ $title }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- jQuery 2.2.3 -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
@section('styles')
    @show</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <div class="logo">@section('dzLogoMG')
    @show</div>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">@section('dzMenuUser')
    @show</nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">@section('dzMenuNavigation')
    @show</section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">@section('dzTitleEncabezadoPagina')
    @show</section>

    <!-- Main content -->
    <section class="content">@section('dzContenidoPag')
    @show</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">@section('dzFooter')
    @show</footer>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!--<script src="plugins/morris/morris.min.js"></script>-->
<!-- Sparkline -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src="dist/js/pages/dashboard.js"></script>-->
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('/') }}/Content/d3a8c20cc5254e4ebbe55496531d1ddc//AdminLTE-2.3.11/dist/js/demo.js"></script>
@section('scripts')
    @show</body>
</html>
