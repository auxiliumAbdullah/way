<?php
/* Smarty version 4.2.0, created on 2022-10-18 10:55:29
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_boosted_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634e8621061c38_00029543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '201836bcfb003243781180943e3703adc8c33de3' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_boosted_post.tpl',
      1 => 1648004406,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.tpl' => 1,
  ),
),false)) {
function content_634e8621061c38_00029543 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- posts-filter -->
<div class="posts-filter">
  <span><?php echo __("Promoted Posts");?>
</span>
</div>
<!-- posts-filter -->

<?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('standalone'=>true,'boosted'=>true), 0, false);
}
}
