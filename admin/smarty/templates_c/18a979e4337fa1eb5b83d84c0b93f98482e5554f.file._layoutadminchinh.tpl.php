<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 05:27:00
         compiled from "smarty\templates\_layoutadminchinh.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204725b2c8420028312-25267529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
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
    '02f20172c6a499b1536d7597d25950aa06cb8758' => 
    array (
      0 => 'smarty\\templates\\_footer.tpl',
      1 => 1529897220,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204725b2c8420028312-25267529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b2c84201d5e78_54661198',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c84201d5e78_54661198')) {function content_5b2c84201d5e78_54661198($_smarty_tpl) {?><?php /*  Call merged included template "_head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '204725b2c8420028312-25267529');
content_5b306104ebd654_53970381($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_head.tpl" */?>
 <!--Tách 1-->
 <!--v_admin_trai.tpl-->
<?php echo $_smarty_tpl->getSubTemplate ("_menutrai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

 <!--Tách 2-->
 <!--v_admin_phai_tren.tpl-->

<?php echo $_smarty_tpl->getSubTemplate ("_topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php /*  Call merged included template "_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '204725b2c8420028312-25267529');
content_5b306104effce6_46359805($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_footer.tpl" */?><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 05:27:00
         compiled from "smarty\templates\_head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b306104ebd654_53970381')) {function content_5b306104ebd654_53970381($_smarty_tpl) {?><!DOCTYPE html>
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
<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 05:27:00
         compiled from "smarty\templates\_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b306104effce6_46359805')) {function content_5b306104effce6_46359805($_smarty_tpl) {?>   <!-- footer content -->
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
