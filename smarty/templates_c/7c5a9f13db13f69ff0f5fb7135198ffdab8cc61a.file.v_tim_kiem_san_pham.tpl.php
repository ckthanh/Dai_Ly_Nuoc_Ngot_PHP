<?php /* Smarty version Smarty-3.1.18, created on 2018-07-16 07:17:50
         compiled from "views\san_pham\v_tim_kiem_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127485b334e8c43d6a7-85833589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c5a9f13db13f69ff0f5fb7135198ffdab8cc61a' => 
    array (
      0 => 'views\\san_pham\\v_tim_kiem_san_pham.tpl',
      1 => 1531718262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127485b334e8c43d6a7-85833589',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b334e8c5fea87_03638973',
  'variables' => 
  array (
    'dsnuTheoGiaTriTim' => 0,
    'gtTim' => 0,
    'dsnuocuong' => 0,
    'thanhpt' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b334e8c5fea87_03638973')) {function content_5b334e8c5fea87_03638973($_smarty_tpl) {?><div class="container">
    <?php if (count($_smarty_tpl->tpl_vars['dsnuTheoGiaTriTim']->value)>0) {?>
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
            <div class="bg-info mt-5" style="padding: 15px;height: 80px;line-height: 40px;">
                <p class="text-white text-center">
                    Có <?php echo count($_smarty_tpl->tpl_vars['dsnuTheoGiaTriTim']->value);?>
 kết quả tìm kiếm với từ khóa "<span style="text-transform:uppercase"><?php echo $_smarty_tpl->tpl_vars['gtTim']->value;?>
</span>"
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div id="hienthimenusanpham">
                <div class="row">
                    <?php  $_smarty_tpl->tpl_vars['dsnuocuong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dsnuocuong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dsnuTheoGiaTriTim']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dsnuocuong']->key => $_smarty_tpl->tpl_vars['dsnuocuong']->value) {
$_smarty_tpl->tpl_vars['dsnuocuong']->_loop = true;
?>
                    <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3" id="motsanpham">
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
" value="1">
                                    <!--Lấy key-->
                                    <a class="button-1" id="<?php echo $_smarty_tpl->tpl_vars['dsnuocuong']->value->ma_nuoc_uong;?>
" href="javascript:void(0)">
                                        Mua hàng
                                        <i class="fa fa-shopping-cart" style="font-size:18px;"></i>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Hết Một sản phẩm-->
                    <?php } ?>
                </div>
               <!-- <div style="clear:both; text-align:center"><?php echo $_smarty_tpl->tpl_vars['thanhpt']->value;?>
</div>-->
            </div>
        </div>
    </div>
    <!--<div style="clear:both; text-align:center"><?php echo $_smarty_tpl->tpl_vars['thanhpt']->value;?>
</div>-->
    <?php } else { ?>
     <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12">
            <div class="bg-info mt-5" style="padding: 15px;height: 80px;line-height: 40px;">
                <p class="text-white text-center">
                  Không có kết quả tìm kiếm với từ khóa "<span style="text-transform:uppercase"><?php echo $_smarty_tpl->tpl_vars['gtTim']->value;?>
</span>"
                </p>
            </div>
        </div>
    </div>
    <?php }?>
</div><?php }} ?>
