<?php
/* Smarty version 3.1.33, created on 2019-08-19 19:01:16
  from 'C:\xampp\htdocs\php-smarty-jquery\views\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d5ad5dcdcf1d8_55775095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b83a7297edb236cb7b182b69e31f786bb8be2de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php-smarty-jquery\\views\\footer.tpl',
      1 => 1566233198,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5d5ad5dcdcf1d8_55775095 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- jQuery first, then Popper.js, then Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php if (!empty($_smarty_tpl->tpl_vars['pageJs']->value)) {?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pageJs']->value, 'jsFile');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['jsFile']->value) {
?>
        <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php ob_start();
echo $_smarty_tpl->tpl_vars['jsFile']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"><?php echo '</script'; ?>
>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

<?php if (isset($_smarty_tpl->tpl_vars['exec_on_ready']->value) && !empty($_smarty_tpl->tpl_vars['exec_on_ready']->value)) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['exec_on_ready']->value, 'exec_item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['exec_item']->value) {
?>
            $(document).ready(function () {
                <?php echo $_smarty_tpl->tpl_vars['exec_item']->value['function_name'];?>
();
            });
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php echo '</script'; ?>
>
<?php }?>

</body>
</html><?php }
}
