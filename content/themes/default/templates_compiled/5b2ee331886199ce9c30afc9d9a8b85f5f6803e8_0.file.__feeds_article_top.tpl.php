<?php
/* Smarty version 4.2.0, created on 2022-11-07 16:32:21
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_article_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63693315c89f09_56908804',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b2ee331886199ce9c30afc9d9a8b85f5f6803e8' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_article_top.tpl',
      1 => 1667838737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63693315c89f09_56908804 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u246756914/domains/waybillion.link/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
   <?php if ($_smarty_tpl->tpl_vars['_iteration']->value != 1) {?>
				 
				  <div class="list-blog">
				    <div class="row">
					     <div class="col-sm-12 col-md-4 col-lg-3">
						    <div class="blog-img"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
"/ 
						    style="width:100%"></a></div>
						 </div>
						 <div class="col-sm-12 col-md-8 col-lg-8">
						    <div class="blog-content"> <div class="text"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</a></div> <div> <div class="post-avatar"> <div class="post-avatar-picture small" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
');"> </div> </div> <div class="post-meta"> <span class="text-link"> <?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>

                            </span> <div class="post-time"> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
" title="Friday, November 4, 2022 6:18 pm"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span> </div> </div> </div> 
							 <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],400);?>
</p>
							</div>
						 </div>
					</div>
				 </div>
				 <?php }?>
				 <?php }
}
