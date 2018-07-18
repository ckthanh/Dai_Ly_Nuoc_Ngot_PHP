<?php /* Smarty version Smarty-3.1.18, created on 2018-07-14 12:40:13
         compiled from "views\nuoc_uong\v_quan_ly_nuoc_uong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161525b2ce9881bf277-89580440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d1b0cb831618410cbe908974b8bc2dc06cd0ed2' => 
    array (
      0 => 'views\\nuoc_uong\\v_quan_ly_nuoc_uong.tpl',
      1 => 1531564807,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161525b2ce9881bf277-89580440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b2ce98840d075_59395939',
  'variables' => 
  array (
    'dsnu' => 0,
    'nuocuong' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2ce98840d075_59395939')) {function content_5b2ce98840d075_59395939($_smarty_tpl) {?><div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 >Quản Lý Nước Uống    <button type="button" class="btn btn-round btn-primary" onclick="window.location='them_nuoc_uong.php'">Thêm Nước Uống</button></h2>
      
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
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
              <th>Mã nước uống</th>
              <th>Tên loại nước uống</th>
              <th>Tên nước uống</th>
               <th>Tên không dấu</th>
              <th>Thành phần</th>
              <th>Dung tích</th>
              <th>Xuất xứ</th>
              <th>Sản xuất</th>
              <th>Đơn giá</th>
              <th>Đơn giá khuyến mãi</th>
              <th>Khuyến mãi</th>
              <th>Hình</th>
              <th>Đơn vị tính</th>
              <th>Chức Năng</th>
            </tr>
          </thead>
          <tbody>
           <?php  $_smarty_tpl->tpl_vars['nuocuong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['nuocuong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dsnu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['nuocuong']->key => $_smarty_tpl->tpl_vars['nuocuong']->value) {
$_smarty_tpl->tpl_vars['nuocuong']->_loop = true;
?> 
            <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ma_nuoc_uong;?>
 </td>
                    <td> <?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ten_loai_nuoc_uong;?>
 </td>
                    <td>
                       <a href="sua_chi_tiet.php?ma_nuoc_uong=<?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ma_nuoc_uong;?>
"> <?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ten_nuoc_uong;?>
 </a>
                     </td>
                     <td>
                       <?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ten_khong_dau;?>

                     </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->thanh_phan;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->dung_tich;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->xuat_xu;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->san_xuat;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->don_gia;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->don_gia_khuyen_mai;?>
 </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->khuyen_mai;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->hinh;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->dvt;?>
</td>
                    <td>
                        <a href="sua_chi_tiet.php?ma_nuoc_uong=<?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ma_nuoc_uong;?>
" class="btn btn-round btn-primary">
                         Cập Nhật
                        </a>
                        
                       <!-- <a href="javascript:void(0)" onclick="xoa_nuoc_uong(<?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ma_nuoc_uong;?>
)">
                         Xóa
                        </a>
                       --> 
                        <a href="javascript:xoa_nuoc_uong(<?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ma_nuoc_uong;?>
)" class="btn btn-round btn-primary"> Xóa </a>
                    </td>           
            </tr>
              <?php } ?>   
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>
