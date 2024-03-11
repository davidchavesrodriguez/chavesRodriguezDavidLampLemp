<?php
/* Smarty version 4.3.4, created on 2024-03-11 09:12:46
  from '/app/admin1310hstme7qt8zau1na/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65eebcfe7a15a7_45153662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6a20aee5f8d09e8a485f1b2587b84f0355730e2' => 
    array (
      0 => '/app/admin1310hstme7qt8zau1na/themes/default/template/content.tpl',
      1 => 1707478622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65eebcfe7a15a7_45153662 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
