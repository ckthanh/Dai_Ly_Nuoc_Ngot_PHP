<?php /* Smarty version Smarty-3.1.18, created on 2018-06-22 07:09:16
         compiled from "smarty\templates\_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:258695b2c847c2a2109-96489227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1cfd068d2bc1c8bc5103c3f699b12262cce030' => 
    array (
      0 => 'smarty\\templates\\_content.tpl',
      1 => 1529644152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258695b2c847c2a2109-96489227',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b2c847c3af9c7_54917349',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b2c847c3af9c7_54917349')) {function content_5b2c847c3af9c7_54917349($_smarty_tpl) {?>       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
               <div class="content">
                 <?php if ((isset($_smarty_tpl->tpl_vars['view']->value))) {?>
                    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                 <?php }?>

               </div>
             
            </div>
          </div>
        </div>
        <!-- /page content --><?php }} ?>
