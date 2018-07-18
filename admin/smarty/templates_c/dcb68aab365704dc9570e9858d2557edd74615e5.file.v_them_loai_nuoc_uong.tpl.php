<?php /* Smarty version Smarty-3.1.18, created on 2018-06-25 14:40:45
         compiled from "views\loai_nuoc_uong\v_them_loai_nuoc_uong.tpl" */ ?>
<?php /*%%SmartyHeaderCode:245535b30e283bc3ec4-60267163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb68aab365704dc9570e9858d2557edd74615e5' => 
    array (
      0 => 'views\\loai_nuoc_uong\\v_them_loai_nuoc_uong.tpl',
      1 => 1529930444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245535b30e283bc3ec4-60267163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b30e283cc1d88_13745819',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b30e283cc1d88_13745819')) {function content_5b30e283cc1d88_13745819($_smarty_tpl) {?><div class="right_col" role="main">
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
                            <h2>Thêm Loại Nước Uống
                             
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
                              
                                <!--ma_loai_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ma_nuoc_uong">Mã loại nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="ma_loai_nuoc_uong" name="ma_loai_nuoc_uong" class="form-control col-md-7 col-xs-12" type="text" autofocus  value="">
                                    </div>
                                </div>

                                <!--ten_loai_nuoc_uong-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ten_loai_nuoc_uong">Tên loại nước uống
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                       <input type="text" name="ten_loai_nuoc_uong" id="ten_loai_nuoc_uong" class="form-control col-md-7 col-xs-12" value="">
                                    </div>
                                </div>

                                   <!--mo_ta-->
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="mo_ta">Mô tả
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                       <input type="text" name="mo_ta" id="mo_ta" class="form-control col-md-7 col-xs-12" value="">
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

                             
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">                                       
                                        <input type="submit" value="Cập nhật" name="btnThem" onclick="return kiemtradulieu();">
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
