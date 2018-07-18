<?php /* Smarty version Smarty-3.1.18, created on 2018-06-13 07:24:45
         compiled from "smarty\templates\_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251035b20aa9d1298c5-88602563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f1cfd068d2bc1c8bc5103c3f699b12262cce030' => 
    array (
      0 => 'smarty\\templates\\_content.tpl',
      1 => 1528362785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251035b20aa9d1298c5-88602563',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5b20aa9d1509d7_79112964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b20aa9d1509d7_79112964')) {function content_5b20aa9d1509d7_79112964($_smarty_tpl) {?><section id="content">
    <?php if (isset($_smarty_tpl->tpl_vars['view']->value)) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['view']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
</section><?php }} ?>
