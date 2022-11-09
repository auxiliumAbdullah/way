<?php
/* Smarty version 4.2.0, created on 2022-11-08 10:05:44
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/emails/forget_password_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636a29f84b15d5_17989710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89cc7858d53b1908835e13b4c3df3bef1f9728a3' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/emails/forget_password_email.txt',
      1 => 1648068954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a29f84b15d5_17989710 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>


<?php echo __("To complete the reset password process, please copy this token");?>
:

<?php echo __("Token");?>
: <?php echo $_smarty_tpl->tpl_vars['reset_key']->value;?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
