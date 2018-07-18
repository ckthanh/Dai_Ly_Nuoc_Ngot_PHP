<?php /* Smarty version Smarty-3.1.18, created on 2018-07-12 06:20:54
         compiled from "views\san_pham\v_san_pham_phai_tren.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325895b28fbc9d8e131-12474905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '681fd81fdf0ddb8a1f03309a21a0012e4572cd4c' => 
    array (
      0 => 'views\\san_pham\\v_san_pham_phai_tren.tpl',
      1 => 1531369253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325895b28fbc9d8e131-12474905',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b28fbc9de4051_14474613',
  'variables' => 
  array (
    'dslnu' => 0,
    'loainuocuong' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28fbc9de4051_14474613')) {function content_5b28fbc9de4051_14474613($_smarty_tpl) {?><div class="sanphamtop mb-5 " style="display:inline-block;">
    <ul style="display:inline-block;float:right" >
        <!--<li class="dropdown " style="width:180px;display:inline-block">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Loại nước uống
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!--<li><a href="javascript:void()" onclick="window.location='my_pham.php?ma_loai_cha=2&ma_loai_san_pham=48'">Dầu gội</a></li> -->
        <!--      <?php  $_smarty_tpl->tpl_vars['loainuocuong'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loainuocuong']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dslnu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loainuocuong']->key => $_smarty_tpl->tpl_vars['loainuocuong']->value) {
$_smarty_tpl->tpl_vars['loainuocuong']->_loop = true;
?>
                                        <li style="text-align: center">
                                            <a href="javascript:void(0)"  onclick="DocDSNuocUongSanPham(<?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ma_loai_nuoc_uong;?>
)"><?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ten_loai_nuoc_uong;?>
</a>
                                              <!--<a href="javascript:void(0)" class="loainuocuong" id="<?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ma_loai_nuoc_uong;?>
" ><?php echo $_smarty_tpl->tpl_vars['loainuocuong']->value->ten_loai_nuoc_uong;?>
</a>-->
        <!--         </li>
                                    <?php } ?>
                                </ul>
                            </li>-->

        <li class="dropdown" style="width:180px;display:inline-block">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sắp xếp theo
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li style="text-align: center">
                    <!-- <a href="javascript:void(0)" class="btnSapXepGia" id="1" >Giá tăng dần</a> -->
                    <a href="javascript:void(0)" id="SapTangDan" onclick="Sap_Xep_Theo('SapTangDan')">Giá tăng dần</a>
                </li>
                <li style="text-align: center">
                    <!-- <a href="javascript:void(0)" class="btnSapXepGia" id="2">Giá giảm dần</a> -->
                    <a href="javascript:void(0)" id="SapGiamDan" onclick="Sap_Xep_Theo('SapGiamDan')">Giá giảm dần</a>
                </li>

            </ul>
        </li>

        <li style="width:300px;display:inline-block">
            <form onsubmit="$('#keyword').blur();return false;" class="pure-form">
                <input id="keyword" autofocus type="text" name="q" placeholder="Tìm Tên Hoặc Thể Tích ..." style="width:100%;max-width:	400px;outline:0;text-align:center"
                    onkeyup="Tim_Nuoc_Uong(this.value)">
            </form>
        </li>

    </ul>
</div>

<script>
    $(function () {
        // $(".dropdown-menu").click(function ()
        // {
        //     console.log($(this).val());
        // });

        $('#keyword').autoComplete({
            minChars: 1,
            source: function (term, suggest) {
                term = term.toLowerCase();
                var choices = [{ $str }];
                var suggestions = [];
                for (i = 0; i < choices.length; i++)
                    if (~choices[i].toLowerCase().indexOf(term)) suggestions.push(choices[i]);
                suggest(suggestions);
            }
        });


    });

    $(document).ready(function () {
        /* Placeholder Typewriter */
        var placeholderText = [
            "Bạn muốn tìm gì?",
            "Nước Khoáng?",
            "Nước Ngọt?",
            "Nước Trái Cây Có Cồn",
            "Bia"
        ];
        $('#keyword').placeholderTypewriter({
            text: placeholderText,
            delay: 80,
            pause: 1000
        });
    });

</script><?php }} ?>
