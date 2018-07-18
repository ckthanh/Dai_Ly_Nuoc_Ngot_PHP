<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 06:51:20
         compiled from "views\nuoc_uong\v_them_nuoc_uong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69385b306f8d5332e5-64228468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eab29097a858600f1dba2b469b4ee7b8d700048a' => 
    array (
      0 => 'views\\nuoc_uong\\v_them_nuoc_uong.tpl',
      1 => 1529902279,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69385b306f8d5332e5-64228468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b306f8d61d922_68515782',
  'variables' => 
  array (
    'dslnu' => 0,
    'loai_nuoc_uong' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b306f8d61d922_68515782')) {function content_5b306f8d61d922_68515782($_smarty_tpl) {?><div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                  
                </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Thêm Nước Uống
                             
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li>
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </li>

                                <li>
                                    <a class="close-link">
                                        <i class="fa fa-close"></i>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <!--Form-->
                            <form action="#" method="post" class="form-horizontal"   enctype="multipart/form-data" >
                                
                             

                                <!--ten_loai_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="loai_nuoc_uong">Tên loại nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select class="text-input small-input" type="text" id="loai_nuoc_uong" name="loai_nuoc_uong" />
                                            <?php  $_smarty_tpl->tpl_vars['loai_nuoc_uong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai_nuoc_uong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dslnu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai_nuoc_uong']->key => $_smarty_tpl->tpl_vars['loai_nuoc_uong']->value) {
$_smarty_tpl->tpl_vars['loai_nuoc_uong']->_loop = true;
?>
                                               <option value="<?php echo $_smarty_tpl->tpl_vars['loai_nuoc_uong']->value->ma_loai_nuoc_uong;?>
"><?php echo $_smarty_tpl->tpl_vars['loai_nuoc_uong']->value->ten_loai_nuoc_uong;?>
</option>
                                            <?php } ?>
                                            </select>
                                    </div>
                                </div>

                                <!--ten_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ten_nuoc_uong">Tên nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="ten_nuoc_uong" name="ten_nuoc_uong" value="" required="required" autofocus class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--thanh_phan-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thanh_phan">Thành phần
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="thanh_phan" id="thanh_phan" class="ckeditor" >
                                            
                                        </textarea>
                                       
                                    </div>
                                </div>
                                
                                <!--dung_tich-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dung_tich">Dung tích
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="dung_tich" name="dung_tich" required="required" value="" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--xuat_xu-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="xuat_xu">Xuất xứ
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="xuat_xu" type="text" name="xuat_xu" value="" class="optional form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--san_xuat-->
                                <div class="item form-group">
                                    <label for="san_xuat" class="control-label col-md-3">Sản xuất</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="san_xuat" type="text" name="san_xuat" value="" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>

                                <!--don_gia-->
                                <div class="item form-group">
                                    <label for="don_gia" class="control-label col-md-3 col-sm-3 col-xs-12">Đơn giá</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="don_gia" type="text" name="don_gia" value="" class="form-control col-md-7 col-xs-12" required="required">
                                    </div>
                                </div>

                                <!--don_gia_khuyen_mai-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="don_gia_khuyen_mai">Đơn giá khuyến mãi
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="don_gia_khuyen_mai" name="don_gia_khuyen_mai" value="" required="required"
                                            class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--khuyen_mai-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="khuyen_mai">Khuyến mãi
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="khuyen_mai" name="khuyen_mai" value="" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <!--hinh-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hinh">Hình
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="hinh" name="hinh" class="form-control col-md-7 col-xs-12"> 
                                        
                
                                    </div>
                                </div>
                                
                                    
                                  <!--ngay_cap_nhat-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dvt">Ngày cập nhật
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="date" id="ngay_cap_nhat" name="ngay_cap_nhat" value="" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>


                                <!--dvt-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dvt">Đơn vị tính
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="dvt" name="dvt" value="" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                             
                             
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">                                       
                                        <input type="submit" value="Cập nhật" name="btnThem" onclick="return kiemtradulieu();">
                                        <input type="button" onclick="window.location='nuoc_uong.php'" value="Quay về">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        function kiemtradulieu()
        {
            var ma_loai_nuoc_uong = document.getElementById("ma_loai_nuoc_uong");
            if(ma_loai_nuoc_uong.value == "")        
            {
                alert("Vui lòng nhập mã loại");
                ma_loai_nuoc_uong.focus();
                return false;
            }

            return true;
        }
    </script><?php }} ?>
