<?php /* Smarty version Smarty-3.1.15, created on 2013-10-23 23:16:46
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1884452682a5c9c8449-24108838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1382559402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1884452682a5c9c8449-24108838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_52682a5cb38cb8_36957524',
  'variables' => 
  array (
    'name' => 0,
    'names' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52682a5cb38cb8_36957524')) {function content_52682a5cb38cb8_36957524($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 How do yoy do?
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php  $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['name']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['names']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['name']->key => $_smarty_tpl->tpl_vars['name']->value) {
$_smarty_tpl->tpl_vars['name']->_loop = true;
?>
<p><?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</p> 
<?php } ?><?php }} ?>
