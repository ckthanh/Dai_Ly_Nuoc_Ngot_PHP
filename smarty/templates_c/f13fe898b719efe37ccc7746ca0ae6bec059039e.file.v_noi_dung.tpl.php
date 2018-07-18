<?php /* Smarty version Smarty-3.1.18, created on 2018-07-15 05:38:52
         compiled from "views\trang_chu\v_noi_dung.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6685b20aa9d16fdd8-51116238%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f13fe898b719efe37ccc7746ca0ae6bec059039e' => 
    array (
      0 => 'views\\trang_chu\\v_noi_dung.tpl',
      1 => 1529417854,
      2 => 'file',
    ),
    'a79797bd857e47db58e557ea8e7a1a1275c0dcd3' => 
    array (
      0 => 'views\\trang_chu\\v_tieu_de.tpl',
      1 => 1528430251,
      2 => 'file',
    ),
    'a34a784a90572408a9023ea07467527273bf98e4' => 
    array (
      0 => 'views\\trang_chu\\v_menu_san_pham.tpl',
      1 => 1530070174,
      2 => 'file',
    ),
    'ff132330b3954dae5d5f3afdc6092c479f3e36ac' => 
    array (
      0 => 'views\\trang_chu\\v_hien_thi_san_pham.tpl',
      1 => 1531625929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6685b20aa9d16fdd8-51116238',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b20aa9d490b19_14020574',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b20aa9d490b19_14020574')) {function content_5b20aa9d490b19_14020574($_smarty_tpl) {?><!--DANH SÁCH SẢN PHẨM-->
	<!-- views/trang_chu/v_menu_san_pham.tpl  -->
	<div class="container dssanpham">
		<hr>
		<div class="row">
			
			<?php /*  Call merged included template "views/trang_chu/v_tieu_de.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("views/trang_chu/v_tieu_de.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6685b20aa9d16fdd8-51116238');
content_5b4ac1ccacb594_20008015($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "views/trang_chu/v_tieu_de.tpl" */?>
		</div>
		
		<?php /*  Call merged included template "views/trang_chu/v_hien_thi_san_pham.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("views/trang_chu/v_hien_thi_san_pham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6685b20aa9d16fdd8-51116238');
content_5b4ac1ccad3297_05149012($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "views/trang_chu/v_hien_thi_san_pham.tpl" */?>
	
		
	</div>
<!--HẾT DANH SÁCH SẢN PHẨM-->

<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-07-15 05:38:52
         compiled from "views\trang_chu\v_tieu_de.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4ac1ccacb594_20008015')) {function content_5b4ac1ccacb594_20008015($_smarty_tpl) {?><div class="col-md-12">
					<h4 class="mb-4 text-sm-center" style="font-size:24px;font-weight: 600">DANH SÁCH SẢN PHẨM</h4>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-07-15 05:38:52
         compiled from "views\trang_chu\v_hien_thi_san_pham.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4ac1ccad3297_05149012')) {function content_5b4ac1ccad3297_05149012($_smarty_tpl) {?>
<div class="row">
	<div class="col-sm-12">
		
			<?php /*  Call merged included template "views/trang_chu/v_menu_san_pham.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("views/trang_chu/v_menu_san_pham.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '6685b20aa9d16fdd8-51116238');
content_5b4ac1ccadaf95_21897265($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "views/trang_chu/v_menu_san_pham.tpl" */?>

		<div id="hienthimenusanpham" >
			<div class="row mt-3">
					<?php  $_smarty_tpl->tpl_vars['dsnuocuong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dsnuocuong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dsnutheoma']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dsnuocuong']->key => $_smarty_tpl->tpl_vars['dsnuocuong']->value) {
$_smarty_tpl->tpl_vars['dsnuocuong']->_loop = true;
?>
						<div class="col-md-3" id="motsanpham">
							<div class="hienthimenusanphamhead">
								<a href="<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
-<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ten_khong_dau;?>
" style="position: relative;text-decoration: none;">
									<img src="public/images/hinh_nuoc_uong/<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->hinh;?>
" alt="" style="width:100%;height:200px">
								</a>
						
							<div class="hienthimenusanphamcontent">
								<a href="<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
-<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ten_khong_dau;?>
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
										<a href="<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
-<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ten_khong_dau;?>
">Xem chi tiết</a>
										<!--	<a href="chi_tiet_san_pham.php?ma_nuoc_uong=<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
-ten_khong_dau=<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ten_khong_dau;?>
">Xem chi tiết</a>-->
									</button>      
										<!--Phần mua hàng-->
									       
				                                 
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
                                           Mua hàng <i class="fa fa-shopping-cart" style="font-size:18px;"></i>
                                        </a>
                                </div>     
								
							</div>
							</div>	
						</div>
						<!--Hết Một sản phẩm-->	
					<?php } ?>		
			</div>
						  
            <div style="clear:both; text-align:center" class="mt-4"><?php echo $_smarty_tpl->tpl_vars['thanhpt']->value;?>
</div>
		</div>
     </div>
</div>



<?php }} ?>
<?php /* Smarty version Smarty-3.1.18, created on 2018-07-15 05:38:52
         compiled from "views\trang_chu\v_menu_san_pham.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b4ac1ccadaf95_21897265')) {function content_5b4ac1ccadaf95_21897265($_smarty_tpl) {?><!--Tách 1-->
<ul class="menusanpham">
	<?php  $_smarty_tpl->tpl_vars['tennuocuong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tennuocuong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dstennuocuong']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tennuocuong']->key => $_smarty_tpl->tpl_vars['tennuocuong']->value) {
$_smarty_tpl->tpl_vars['tennuocuong']->_loop = true;
?>
		<li class="active">
<a href="javascript:void(0)" onclick="DocDSNuocUong(<?php echo $_smarty_tpl->tpl_vars['tennuocuong']->value->ma_loai_nuoc_uong;?>
)"><?php echo $_smarty_tpl->tpl_vars['tennuocuong']->value->ten_loai_nuoc_uong;?>
</a>
		</li>
	<?php } ?>					
</ul>
<!--Hết Tách 1-->                    <?php }} ?>
