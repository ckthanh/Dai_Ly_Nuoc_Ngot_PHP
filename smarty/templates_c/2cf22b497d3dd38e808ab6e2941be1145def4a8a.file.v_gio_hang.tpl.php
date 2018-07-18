<?php /* Smarty version Smarty-3.1.18, created on 2018-07-05 07:19:52
         compiled from "views\gio_hang\v_gio_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:267135b20aaa0e2e708-83722616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cf22b497d3dd38e808ab6e2941be1145def4a8a' => 
    array (
      0 => 'views\\gio_hang\\v_gio_hang.tpl',
      1 => 1530767990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267135b20aaa0e2e708-83722616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b20aaa100d453_41892941',
  'variables' => 
  array (
    'ds_nuoc_uong' => 0,
    'item' => 0,
    'tien_nuoc_uong' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b20aaa100d453_41892941')) {function content_5b20aaa100d453_41892941($_smarty_tpl) {?><section id="noidunggiohang" class="mt-5">
    <div class="container">
        <?php if (isset($_smarty_tpl->tpl_vars['ds_nuoc_uong']->value)) {?> <?php $_smarty_tpl->tpl_vars['tien_nuoc_uong'] = new Smarty_variable(0, null, 0);?>
        <div class="row">
                <form action="gio_hang.php" class="w3-container w3-card-4" method="post" style="width:100%">
                    <table class="table table-hover  " cellpadding="0">
                        <thead>
                            <tr>
                                <th >Mã Nước Uống</th>
                                <th  >Tên Nước Uống</th>
                                <th  >Số Lượng</th>
                                <th  >Đơn Giá</th>
                                <th  >Thành Tiền</th>
                                <th  > Xóa</th>
                                <th  >Tổng Tiền</th>
                            </tr>
                        </thead>
                        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_nuoc_uong']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <tbody>
                            <tr id="tablebody" class="tablebody">
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ma_nuoc_uong;?>

                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ten_nuoc_uong;?>

                                    <img src="public/images/hinh_nuoc_uong/<?php echo $_smarty_tpl->tpl_vars['item']->value->hinh;?>
" alt=" <?php echo $_smarty_tpl->tpl_vars['item']->value->ten_nuoc_uong;?>
" width="100px">
                                </td>

                                <td>
                                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_Luong;?>
" name="soluong<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_nuoc_uong;?>
" />
                                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
" name="dongia<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_nuoc_uong;?>
" />
                                </td>

                                <td>
                                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->don_gia);?>

                                </td>

                                <td>
                                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->so_Luong*$_smarty_tpl->tpl_vars['item']->value->don_gia);?>
 <?php $_smarty_tpl->tpl_vars['tien_nuoc_uong'] = new Smarty_variable($_smarty_tpl->tpl_vars['tien_nuoc_uong']->value+($_smarty_tpl->tpl_vars['item']->value->so_Luong*$_smarty_tpl->tpl_vars['item']->value->don_gia), null, 0);?>
                                </td>

                                <td>
                                    <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['item']->value->ma_nuoc_uong;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
">
                                </td>
                                
                                <td colspan="6s" id="phanThanhTien">
                                  
                                      <?php echo number_format($_smarty_tpl->tpl_vars['tien_nuoc_uong']->value);?>
vnđ
                                </td>
                            </tr>

                           
                               
                         
                        </tbody>
                        <?php } ?>

                        <div class="nutChucNang float-sm-right mb-2">                       
                           <input type="submit" name="btnCapNhat" value="Cập Nhật" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                           <input type="submit" name="btnXoaMH" value="Xóa Mặt Hàng" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                           <input type="button" name="btnXoaGioHang" id="btnXoaGioHang" value="Xóa Giỏ Hàng" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                           <input type="button" name="btnDatHang" onclick="window.location.href='khach-hang/dat-hang' " value="Mua Hàng" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                           <input type="button" name="btnMuaTiep" onclick="window.location.href='san-pham/'" value="Mua tiếp" class="w3-btn" style="background-color:#0071bb;color:#fff;cursor: pointer" />
                          
                        <!--  <div class="nutChucNang float-sm-right mb-2">-->                
                       </div>          
                    </table>
                </form>
        </div>
        <?php } else { ?>
        <div class="row">
               <div class="text-sm-center">
                 <h3  style="color:#666666">Bạn chưa chọn sản phẩm nào</h3>
               </div> 
          
        </div>
        <?php }?>
    </div>
</section>


 <script>
 
    var tablebody = document.getElementById('tablebody');

     window.addEventListener('resize',function(){
         if(document.documentElement.clientWidth <500)
         {
             tablebody.classList.add('w3-container');
             tablebody.classList.add('w3-card-4');
             tablebody.classList.add('mt-4');
         }
         else
         {
             tablebody.classList.remove('w3-container');
             tablebody.classList.remove('w3-card-4');
             tablebody.classList.remove('mt-4');
         }
     });
    
    
 </script><?php }} ?>
