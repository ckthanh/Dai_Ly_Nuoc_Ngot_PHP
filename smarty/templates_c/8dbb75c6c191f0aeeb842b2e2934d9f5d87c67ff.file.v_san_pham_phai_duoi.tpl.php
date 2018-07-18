<?php /* Smarty version Smarty-3.1.18, created on 2018-07-14 13:17:28
         compiled from "views\san_pham\v_san_pham_phai_duoi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:230425b28fbc9dfb751-89725027%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dbb75c6c191f0aeeb842b2e2934d9f5d87c67ff' => 
    array (
      0 => 'views\\san_pham\\v_san_pham_phai_duoi.tpl',
      1 => 1531567031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '230425b28fbc9dfb751-89725027',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b28fbc9f24592_81055332',
  'variables' => 
  array (
    'danh_sach_nuoc_uong' => 0,
    'dsnuocuong' => 0,
    'thanhpt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28fbc9f24592_81055332')) {function content_5b28fbc9f24592_81055332($_smarty_tpl) {?> <div id="hienthimenusanpham">
    <div class="row  ">
        <?php  $_smarty_tpl->tpl_vars['dsnuocuong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dsnuocuong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['danh_sach_nuoc_uong']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dsnuocuong']->key => $_smarty_tpl->tpl_vars['dsnuocuong']->value) {
$_smarty_tpl->tpl_vars['dsnuocuong']->_loop = true;
?> 
        <div class="col-sm-4" id="motsanpham">
            <div class="hienthimenusanphamhead">
                <a href="chi-tiet-san-pham/<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
-<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ten_khong_dau;?>
" style="position: relative;text-decoration: none;">
                    <img src="public/images/hinh_nuoc_uong/<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->hinh;?>
" alt="" style="width:100%;height:200px">
                </a>
                <div class="hienthimenusanphamcontent">
                    <a href="chi-tiet-san-pham/<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
" style="text-decoration: none;">
                        <h3 style="font-size: 15px;font-weight: 600"><?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ten_nuoc_uong;?>
</h3>
                    </a>
                    <p style="margin-top:-8px;color:#0071bb;"><?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->don_gia;?>
 vnđ/<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->dvt;?>
</p>
                    <!--Xem chi tiết Button-->
                    <div class="buttonhienthimenusanpham">
                        <button type="button">
                            <a href="chi-tiet-san-pham/<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
-<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ten_khong_dau;?>
">Xem chi tiết</a>
                        </button>
                    </div>
                    <div class="muahang">
                            <!--Lấy đơn giá--> 
                            <input type="hidden" id="dongia<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
" value="<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->don_gia;?>
">
                            <!--Lấy số lượng-->
                            <input type="hidden" id="soluong<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
" value="1" >
                            <!--Lấy key-->
                            <a  class="button-1" id="<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
"  href="javascript:void(0)" >
                               Mua Hàng <i class="fa fa-shopping-cart" style="font-size:18px;"></i>
                            </a>
                    </div>     
                </div>
            </div>
        </div>            
         <?php } ?> 
    </div>
    
    <!--<div class="mt-4" style="clear:both; text-align:center"><?php echo $_smarty_tpl->tpl_vars['thanhpt']->value;?>
</div>-->
</div><?php }} ?>
