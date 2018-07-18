<?php /* Smarty version Smarty-3.1.18, created on 2018-06-27 05:34:06
         compiled from "views\loai_nuoc_uong\v_chi_tiet_loai_nuoc_uong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315335b30d65d688771-46153002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac1ddc8708a7269a3b66ad92b73e72ee5c6fd66f' => 
    array (
      0 => 'views\\loai_nuoc_uong\\v_chi_tiet_loai_nuoc_uong.tpl',
      1 => 1530070440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '315335b30d65d688771-46153002',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b30d65d7c0fb1_93050033',
  'variables' => 
  array (
    'dslnutm' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b30d65d7c0fb1_93050033')) {function content_5b30d65d7c0fb1_93050033($_smarty_tpl) {?><div class="right_col" role="main">
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
                            <h2>Quản Lý Nước Uống
                             
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
                                <span class="section">Chi Tiết Loại Nước Uống</span>
                                <!--ma_loai_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ma_nuoc_uong">Mã loại nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ma_loai_nuoc_uong" name="ma_loai_nuoc_uong" class="form-control col-md-7 col-xs-12" type="text" disabled  value="<?php echo $_smarty_tpl->tpl_vars['dslnutm']->value->ma_loai_nuoc_uong;?>
">
                                    </div>
                                </div>

                                <!--ten_loai_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ten_loai_nuoc_uong">Tên loại nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                       <input type="text" name="ten_loai_nuoc_uong" id="ten_loai_nuoc_uong" class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['dslnutm']->value->ten_loai_nuoc_uong;?>
">
                                    </div>
                                </div>

                                   <!--mo_ta-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mo_ta">Mô tả
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                       <input type="text" name="mo_ta" id="mo_ta" class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['dslnutm']->value->mo_ta;?>
">
                                    </div>
                                </div>

                              

                                <!--hinh-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hinh">Hình
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="hinh" name="hinh" class="form-control col-md-7 col-xs-12"> 
                                        
                                        <?php if ($_smarty_tpl->tpl_vars['dslnutm']->value->hinh!='') {?>
                                             <img src="../public/images/hinh_loai_nuoc_uong/<?php echo $_smarty_tpl->tpl_vars['dslnutm']->value->hinh;?>
" alt="" style="width:200px;height:100px">
                                        <?php }?>
                                    </div>
                                </div>

                                   <!--trang_thai-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="trang_thai">Trạng thái
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                       <input type="text" name="trang_thai" id="trang_thai" class="form-control col-md-7 col-xs-12" value="<?php echo $_smarty_tpl->tpl_vars['dslnutm']->value->trang_thai;?>
">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">                                       
                                        <input type="submit" value="Cập nhật" name="btnCapNhat" onclick="return kiemtradulieu();">
                                        <input type="button" onclick="window.location='loai_nuoc_uong.php'" value="Quay về">
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
