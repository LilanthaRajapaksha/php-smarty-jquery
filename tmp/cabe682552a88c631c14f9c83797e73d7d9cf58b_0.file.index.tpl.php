<?php
/* Smarty version 3.1.33, created on 2019-08-19 18:50:00
  from 'C:\xampp\htdocs\smartyv2\views\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ad33835e187_79642299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cabe682552a88c631c14f9c83797e73d7d9cf58b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smartyv2\\views\\index.tpl',
      1 => 1566233334,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ad33835e187_79642299 (Smarty_Internal_Template $_smarty_tpl) {
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
