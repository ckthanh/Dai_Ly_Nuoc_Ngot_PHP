<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 13:18:16
         compiled from "views\loai_nuoc_uong\v_loai_nuoc_uong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256965b30cc05d6c688-82969587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3679cfe9c4abc01119b26e731bd6e495df4410c' => 
    array (
      0 => 'views\\loai_nuoc_uong\\v_loai_nuoc_uong.tpl',
      1 => 1529925495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256965b30cc05d6c688-82969587',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b30cc0608f799_28017290',
  'variables' => 
  array (
    'dslnu' => 0,
    'loainuocuong' => 0,
    'nuocuong' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b30cc0608f799_28017290')) {function content_5b30cc0608f799_28017290($_smarty_tpl) {?><div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 >Quản Lý Nước Uống    <button type="button" class="btn btn-round btn-primary" onclick="window.location='them_loai_nuoc_uong.php'">Thêm Loại Nước Uống</button></h2>
      
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Cài đặt</a>
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
              <th>Mã loại nước uống</th>
              <th>Tên loại nước uống</th>
              <th>Mô tả</th>  
              <th>Hình</th>
              <th>Trạng thái</th>
              <th>Chức năng</th>
            </tr>
          </thead>
          <tbody>
           <?php  $_smarty_tpl->tpl_vars['loainuocuong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loainuocuong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dslnu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loainuocuong']->key => $_smarty_tpl->tpl_vars['loainuocuong']->value) {
$_smarty_tpl->tpl_vars['loainuocuong']->_loop = true;
?> 
                <tr>
                    <td> <?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ma_loai_nuoc_uong;?>
 </td>
                    <td> 
                      <a href="sua_chi_tiet_loai_nuoc_uong.php?ma_loai_nuoc_uong=<?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ma_loai_nuoc_uong;?>
">  <?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ten_loai_nuoc_uong;?>
 </a>
                    </td>
                    <td>
                        <textarea name="mo_ta" id="mo_ta" class="ckeditor">
                            <?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->mo_ta;?>

                        </textarea>
                    </td>                  
                    <td><?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->hinh;?>
</td> 
                    <td><?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->trang_thai;?>
</td>             
                    <td>
                         <a href="sua_chi_tiet_loai_nuoc_uong.php?ma_loai_nuoc_uong=<?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ma_loai_nuoc_uong;?>
" class="btn btn-round btn-primary">
                         Cập Nhật
                        </a>
                        
                       <!-- <a href="javascript:void(0)" onclick="xoa_nuoc_uong(<?php echo $_smarty_tpl->tpl_vars['nuocuong']->value->ma_nuoc_uong;?>
)">
                         Xóa
                        </a>
                       --> 
                        <a href="javascript:xoa_loai_nuoc_uong(<?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ma_loai_nuoc_uong;?>
)" class="btn btn-round btn-primary"> Xóa </a>
                    </td>           
                </tr>
            <?php } ?>   
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>
