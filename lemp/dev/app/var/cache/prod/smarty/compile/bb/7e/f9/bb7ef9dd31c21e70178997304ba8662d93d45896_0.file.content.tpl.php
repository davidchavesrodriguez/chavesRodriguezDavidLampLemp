<?php
/* Smarty version 4.3.4, created on 2024-03-11 09:30:04
  from '/app/admin776kmkpoaxbtxuzt9pe/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eec10c562994_34470989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb7ef9dd31c21e70178997304ba8662d93d45896' => 
    array (
      0 => '/app/admin776kmkpoaxbtxuzt9pe/themes/default/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eec10c562994_34470989 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
