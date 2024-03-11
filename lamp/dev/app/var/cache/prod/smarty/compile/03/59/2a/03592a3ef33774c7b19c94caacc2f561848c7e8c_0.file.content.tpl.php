<?php
/* Smarty version 4.3.4, created on 2024-03-11 09:13:14
  from '/app/admin1310hstme7qt8zau1na/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eebd1a9e69a5_99082562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03592a3ef33774c7b19c94caacc2f561848c7e8c' => 
    array (
      0 => '/app/admin1310hstme7qt8zau1na/themes/new-theme/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eebd1a9e69a5_99082562 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
