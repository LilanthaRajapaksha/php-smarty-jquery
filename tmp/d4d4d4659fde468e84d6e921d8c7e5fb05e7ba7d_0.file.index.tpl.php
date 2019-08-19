<?php
/* Smarty version 3.1.33, created on 2019-08-19 19:01:16
  from 'C:\xampp\htdocs\php-smarty-jquery\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ad5dcca9b94_22249265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4d4d4659fde468e84d6e921d8c7e5fb05e7ba7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php-smarty-jquery\\views\\index.tpl',
      1 => 1566233334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ad5dcca9b94_22249265 (Smarty_Internal_Template $_smarty_tpl) {
?><h1>Users List</h1>
<table class="table table-dark">
    <tr>
        <th>USER ID</th>
        <th>USER NAME</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['user']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['user']->value;?>
</td>
        </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
