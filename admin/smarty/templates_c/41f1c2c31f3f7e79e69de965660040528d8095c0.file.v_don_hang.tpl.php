<?php /* Smarty version Smarty-3.1.18, created on 2018-06-26 15:08:10
         compiled from "views\don_hang\v_don_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145915b31b4d8b0a886-79561419%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41f1c2c31f3f7e79e69de965660040528d8095c0' => 
    array (
      0 => 'views\\don_hang\\v_don_hang.tpl',
      1 => 1530018489,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145915b31b4d8b0a886-79561419',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b31b4d8d48c85_58473137',
  'variables' => 
  array (
    'dsdh' => 0,
    'donhang' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b31b4d8d48c85_58473137')) {function content_5b31b4d8d48c85_58473137($_smarty_tpl) {?><div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 >Quản Lý Đơn Hàng   <button type="button" disabled="disabled" class="btn btn-round btn-primary" onclick="window.location='them_don_hang.php'">Thêm Đơn Hàng</button></h2>
      
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
              <th>Mã đơn hàng</th>
              <th>Mã khách hàng</th>
              <th>Họ tên</th>
              <th>Ngày đặt</th>
              <th>Tổng Tiền</th>
              <th>Phương thức thanh toán</th>
              <th>Trạng thái đơn hàng</th>
               <th>Ghi chú</th>
               <th>Trạng thái </th>
               <th>Chức năng </th>
            </tr>
          </thead>
          <tbody>
           <?php  $_smarty_tpl->tpl_vars['donhang'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['donhang']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dsdh']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['donhang']->key => $_smarty_tpl->tpl_vars['donhang']->value) {
$_smarty_tpl->tpl_vars['donhang']->_loop = true;
?> 
            <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->ma_don_hang;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->ma_khach_hang;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->ho_ten;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->ngay_dat;?>
  </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->tong_tien;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->phuong_thuc_thanh_toan;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->trang_thai_don_hang;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->ghi_chu;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['donhang']->value->trang_thai;?>
 </td>
                  
                    <td>
                        <a href="sua_chi_tiet_don_hang.php?ma_don_hang=<?php echo $_smarty_tpl->tpl_vars['donhang']->value->ma_don_hang;?>
" class="btn btn-round btn-primary">
                         Cập Nhật
                        </a>
                        
                       <!-- <a href="javascript:void(0)" onclick="xoa_don_hang(<?php echo $_smarty_tpl->tpl_vars['donhang']->value->ma_don_hang;?>
)">
                         Xóa
                        </a>
                       --> 
                        <a href="javascript:xoa_don_hang(<?php echo $_smarty_tpl->tpl_vars['donhang']->value->ma_don_hang;?>
)" class="btn btn-round btn-primary"> Xóa </a>
                    </td>           
            </tr>
              <?php } ?>   
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>
