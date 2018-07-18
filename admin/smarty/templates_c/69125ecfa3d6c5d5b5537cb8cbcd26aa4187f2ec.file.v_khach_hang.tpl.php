<?php /* Smarty version Smarty-3.1.18, created on 2018-06-26 15:42:46
         compiled from "views\khach_hang\v_khach_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212635b3242add121f6-52485936%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69125ecfa3d6c5d5b5537cb8cbcd26aa4187f2ec' => 
    array (
      0 => 'views\\khach_hang\\v_khach_hang.tpl',
      1 => 1530020565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212635b3242add121f6-52485936',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b3242ade371b3_21558610',
  'variables' => 
  array (
    'dskh' => 0,
    'khachhang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3242ade371b3_21558610')) {function content_5b3242ade371b3_21558610($_smarty_tpl) {?><div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 >Quản Lý Khách Hàng  </h2>
      
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Cài đặt 1</a>
              </li>
             
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
          <thead>
            <tr>
              <th>Mã khách hàng</th>
              <th>Họ tên</th>
              <th>Số điện thoại</th>
              <th>Địa chỉ</th>
              <th>Email</th>
              <th>Mật khẩu</th>
              <th>Trạng thái</th> 
            </tr>
          </thead>
          <tbody>
           <?php  $_smarty_tpl->tpl_vars['khachhang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['khachhang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dskh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['khachhang']->key => $_smarty_tpl->tpl_vars['khachhang']->value) {
$_smarty_tpl->tpl_vars['khachhang']->_loop = true;
?> 
            <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['khachhang']->value->ma_khach_hang;?>
 </td>
                    <td>  <a href="sua_chi_tiet_khach_hang.php?ma_khach_hang=<?php echo $_smarty_tpl->tpl_vars['khachhang']->value->ma_khach_hang;?>
"><?php echo $_smarty_tpl->tpl_vars['khachhang']->value->ho_ten;?>
 </a> </td>
                    <td>
                      <?php echo $_smarty_tpl->tpl_vars['khachhang']->value->so_dien_thoai;?>

                     </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value->dia_chi;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value->email;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value->mat_khau;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['khachhang']->value->trang_thai;?>
 </td>
                    <td>
                        
                       <!-- <a href="javascript:void(0)" onclick="xoa_khach_hang(<?php echo $_smarty_tpl->tpl_vars['khachhang']->value->ma_khach_hang;?>
)">
                         Xóa
                        </a>
                       --> 
                        <a href="javascript:xoa_khach_hang(<?php echo $_smarty_tpl->tpl_vars['khachhang']->value->ma_khach_hang;?>
)" class="btn btn-round btn-primary"> Xóa </a>
                    </td>           
            </tr>
              <?php } ?>   
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>
