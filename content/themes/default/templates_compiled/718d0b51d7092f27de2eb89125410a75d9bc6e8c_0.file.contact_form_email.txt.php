<?php
/* Smarty version 4.2.0, created on 2022-11-08 06:33:36
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/emails/contact_form_email.txt' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6369f8403eccf6_01819717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '718d0b51d7092f27de2eb89125410a75d9bc6e8c' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/emails/contact_form_email.txt',
      1 => 1648068954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369f8403eccf6_01819717 (Smarty_Internal_Template $_smarty_tpl) {
echo __("Hi");?>
,

<?php echo __("You have a new email message");?>


<?php echo __("Email Subject");?>
: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['subject'];?>


<?php echo __("Sender Name");?>
: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['name'];?>


<?php echo __("Sender Email");?>
: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['email'];?>


<?php echo __("Email Message");?>
: <?php echo $_smarty_tpl->tpl_vars['_POST']->value['message'];?>


<?php echo __($_smarty_tpl->tpl_vars['system']->value['system_title']);?>
 <?php echo __("Team");
}
}
