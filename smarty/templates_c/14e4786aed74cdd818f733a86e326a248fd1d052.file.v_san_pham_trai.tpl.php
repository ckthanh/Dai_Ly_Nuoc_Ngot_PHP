<?php /* Smarty version Smarty-3.1.18, created on 2018-07-12 06:18:14
         compiled from "views\san_pham\v_san_pham_trai.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38125b28fbc9d76a30-36919954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14e4786aed74cdd818f733a86e326a248fd1d052' => 
    array (
      0 => 'views\\san_pham\\v_san_pham_trai.tpl',
      1 => 1531369093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38125b28fbc9d76a30-36919954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b28fbc9d7a8b5_81844190',
  'variables' => 
  array (
    'dslnu' => 0,
    'loainuocuong' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28fbc9d7a8b5_81844190')) {function content_5b28fbc9d7a8b5_81844190($_smarty_tpl) {?><div class="sanphamtrai mt-4 w3-container mb-4 w3-card-4">
    <p id="timGia">Tìm Theo Giá</p>
    <div class="luachon">
        <label style="color:#666666">
            <input type="radio" name="ttg" class="luachon" value="50" onclick="ChonTheoGia(this.value)">
             < 50000vnđ 
        </label>
         <br>

        <label style="color:#666666">
            <input type="radio" name="ttg" class="luachon" value="50100" onclick="ChonTheoGia(this.value)" )
            > 50000 - 100000vnđ
        </label>

        <br>
        <label style="color:#666666">
            <input type="radio" name="ttg" class="luachon" value="100200" onclick="ChonTheoGia(this.value)" )
            > 100000 - 200000vnđ
        </label>

        <br>

        <label style="color:#666666">
            <input type="radio" name="ttg" class="luachon" value="500" onclick="ChonTheoGia(this.value)">
            <= 500000vnđ 
        </label>

         <br>
    </div>
</div>

<div class="sanphamtrai mt-4 w3-container mb-4 w3-card-4">
    <p id="timGia">Danh Mục Sản Phẩm</p>    
    <div class="luachon">
        <?php  $_smarty_tpl->tpl_vars['loainuocuong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loainuocuong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dslnu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loainuocuong']->key => $_smarty_tpl->tpl_vars['loainuocuong']->value) {
$_smarty_tpl->tpl_vars['loainuocuong']->_loop = true;
?>
            <p style="text-align: center">
                <a href="javascript:void(0)"  onclick="DocDSNuocUongSanPham(<?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ma_loai_nuoc_uong;?>
)"><?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ten_loai_nuoc_uong;?>
</a>
                  <!--<a href="javascript:void(0)" class="loainuocuong" id="<?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ma_loai_nuoc_uong;?>
" ><?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ten_loai_nuoc_uong;?>
</a>-->
            </p>
        <?php } ?>
    </div>
</div><?php }} ?>
