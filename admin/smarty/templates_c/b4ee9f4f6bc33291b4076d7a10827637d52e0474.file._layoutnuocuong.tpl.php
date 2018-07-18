<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 05:23:19
         compiled from "smarty\templates\nuoc_uong\_layoutnuocuong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23545b2ce8d57dcb88-60121186%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4ee9f4f6bc33291b4076d7a10827637d52e0474' => 
    array (
      0 => 'smarty\\templates\\nuoc_uong\\_layoutnuocuong.tpl',
      1 => 1529665331,
      2 => 'file',
    ),
    '18a979e4337fa1eb5b83d84c0b93f98482e5554f' => 
    array (
      0 => 'smarty\\templates\\_layoutadminchinh.tpl',
      1 => 1529665346,
      2 => 'file',
    ),
    'c0197607597035b1a02221dedf19cecadbe427bc' => 
    array (
      0 => 'smarty\\templates\\_head.tpl',
      1 => 1529896836,
      2 => 'file',
    ),
    'd33f28cefc83c2b66fa57a35c51d5da33f924363' => 
    array (
      0 => 'smarty\\templates\\nuoc_uong\\_headnuocuong.tpl',
      1 => 1529759417,
      2 => 'file',
    ),
    '02f20172c6a499b1536d7597d25950aa06cb8758' => 
    array (
      0 => 'smarty\\templates\\_footer.tpl',
      1 => 1529896917,
      2 => 'file',
    ),
    '9a4bb30d2e2a8af9e36d8912cb70988160731119' => 
    array (
      0 => 'smarty\\templates\\nuoc_uong\\_footernuocuong.tpl',
      1 => 1529753683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23545b2ce8d57dcb88-60121186',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b2ce8d5aab820_38681440',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ce8d5aab820_38681440')) {function content_5b2ce8d5aab820_38681440($_smarty_tpl) {?><?php /*  Call merged included template "nuoc_uong/_headnuocuong.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("nuoc_uong/_headnuocuong.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '23545b2ce8d57dcb88-60121186');
content_5b3060278c75e7_96127777($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "nuoc_uong/_headnuocuong.tpl" */?>
 <!--Tách 1-->
 <!--v_admin_trai.tpl-->
<?php echo $_smarty_tpl->getSubTemplate ("_menutrai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <!--Tách 2-->
 <!--v_admin_phai_tren.tpl-->

<?php echo $_smarty_tpl->getSubTemplate ("_topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php /*  Call merged included template "nuoc_uong/_footernuocuong.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("nuoc_uong/_footernuocuong.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '23545b2ce8d57dcb88-60121186');
content_5b306027919688_06984540($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "nuoc_uong/_footernuocuong.tpl" */?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 05:23:19
         compiled from "smarty\templates\_head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b306027846742_83729996')) {function content_5b306027846742_83729996($_smarty_tpl) {?><!DOCTYPE html>
<html lang="vi">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Quản Lý </title>

    <!-- Bootstrap -->
    <link href="public/layout/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/layout/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/layout/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="public/layout/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <link href="public/layout/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="public/layout/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/layout/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="public/layout/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="public/layout/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="public/layout/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
     <link href="../public/ckeditor/ckeditor.js" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="public/layout/css/custom.min.css" rel="stylesheet">
  </head>


  <body class="nav-md">
    <div class="container body">
      <div class="main_container"><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 05:23:19
         compiled from "smarty\templates\nuoc_uong\_headnuocuong.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b3060278c75e7_96127777')) {function content_5b3060278c75e7_96127777($_smarty_tpl) {?><!DOCTYPE html>
<html lang="vi">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Quản Lý</title>

    <!-- Bootstrap -->
    <link href="public/layout/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="public/layout/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="public/layout/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="public/layout/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="public/layout/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="public/layout/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="public/layout/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="public/layout/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="public/layout/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="public/layout/css/custom.min.css" rel="stylesheet">

    <!--CKEDITOR-->
     <link href="../public/ckeditor/ckeditor.js" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container"><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 05:23:19
         compiled from "smarty\templates\_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b3060278f2578_72458770')) {function content_5b3060278f2578_72458770($_smarty_tpl) {?>   <!-- footer content -->
        <footer>
          <div class="pull-right">
            @Bản quyền Đại Lý Bia-Nước Ngọt 115 Ký Con
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="public/layout/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/layout/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="public/layout/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/layout/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="public/layout/vendors/Chart.js/dist/Chart.min.js"></script>
 <!-- iCheck -->
    <script src="public/layout/vendors/iCheck/icheck.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="public/layout/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="public/layout/vendors/Flot/jquery.flot.js"></script>
    <script src="public/layout/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="public/layout/vendors/Flot/jquery.flot.time.js"></script>
    <script src="public/layout/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="public/layout/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="public/layout/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="public/layout/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="public/layout/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="public/layout/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="public/layout/vendors/moment/min/moment.min.js"></script>
    <script src="public/layout/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Datatables -->
    <script src="public/layout/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/layout/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/layout/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/layout/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/layout/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/layout/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/layout/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="public/layout/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/layout/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="public/layout/vendors/pdfmake/build/vfs_fonts.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="public/layout/js/custom.min.js"></script>
    <script src="public/layout/js/cau_hinh.js"></script>
  </body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 05:23:19
         compiled from "smarty\templates\nuoc_uong\_footernuocuong.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b306027919688_06984540')) {function content_5b306027919688_06984540($_smarty_tpl) {?>        <!-- footer content -->
        <footer>
          <div class="pull-right">
            @Bản quyền Đại Lý Bia-Nước Ngọt 115 Ký Con
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="public/layout/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="public/layout/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!--Validator-->
    <script src="public/layout/vendors/validator/validator.js"></script>
    <!-- FastClick -->
    <script src="public/layout/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="public/layout/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="public/layout/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="public/layout/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="public/layout/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="public/layout/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="public/layout/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="public/layout/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="public/layout/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="public/layout/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="public/layout/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="public/layout/vendors/jszip/dist/jszip.min.js"></script>
    <script src="public/layout/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="public/layout/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="public/layout/js/custom.min.js"></script>
      <script src="public/layout/js/cau_hinh.js"></script>

  </body>
</html><?php }} ?>
