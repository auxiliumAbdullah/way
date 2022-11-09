<?php
/* Smarty version 4.2.0, created on 2022-11-07 16:26:26
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_article_top_cover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636931b2c97433_29002315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '419160c25c8c934786aa50ffcf1baccd9f157840' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_article_top_cover.tpl',
      1 => 1667838383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636931b2c97433_29002315 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>
<div class="cover-inner" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
');">
				     <h1><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</a></h1>
				 </div>
				 <?php }
}
}
