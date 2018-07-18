<?php /* Smarty version Smarty-3.1.18, created on 2018-06-19 16:41:19
         compiled from "views\san_pham\v_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:211115b28fbc9c69172-03381231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c935ff901910a160a04ff70329e2172e96ff94c2' => 
    array (
      0 => 'views\\san_pham\\v_san_pham.tpl',
      1 => 1529419273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211115b28fbc9c69172-03381231',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b28fbc9d537a2_95010800',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b28fbc9d537a2_95010800')) {function content_5b28fbc9d537a2_95010800($_smarty_tpl) {?><div class="main mt-5">
       <div class="container">
           <div class="row">
               <!-- Phần 1 -->
               <div class="col-sm-3">
                  <?php echo $_smarty_tpl->getSubTemplate ("views/san_pham/v_san_pham_trai.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

               </div>
               <!-- Phần 2 -->
               <div class="col-sm-9">
                  <?php echo $_smarty_tpl->getSubTemplate ("views/san_pham/v_san_pham_phai_tren.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                  <?php echo $_smarty_tpl->getSubTemplate ("views/san_pham/v_san_pham_phai_duoi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

               </div>
           </div>
       </div>
</div>




<?php }} ?>
