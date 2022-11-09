<?php
/* Smarty version 4.2.0, created on 2022-11-08 06:42:26
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/blog_banner_cover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6369fa52054700_02455677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dceb4c76ef9f5d14d5001e1c1c34d395629ea327' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/blog_banner_cover.tpl',
      1 => 1667838383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6369fa52054700_02455677 (Smarty_Internal_Template $_smarty_tpl) {
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
