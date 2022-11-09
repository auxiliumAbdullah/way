<?php
/* Smarty version 4.2.0, created on 2022-11-08 09:46:33
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/blog_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636a25796f2658_94810025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fc6c9b935c0c0d7fa23acc7078d4d30e128b67a' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/blog_banner.tpl',
      1 => 1667900790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a25796f2658_94810025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u246756914/domains/waybillion.link/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
   <?php if ($_smarty_tpl->tpl_vars['_iteration']->value != 1) {?>
				 
				  <div class="list-blog test">
				    <div class="row">
					     <div class="col-sm-12 col-md-4 col-lg-3">
						    <div class="blog-img"><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"> <p><img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
"/ 
						    style="width:100%"></p></a></div>
						 </div>
						 <div class="col-sm-12 col-md-8 col-lg-8">
						    <div class="blog-content">  <div> <div class="post-avatar"> <div class="post-avatar-picture small" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
');"> </div> </div> <div class="post-meta"> <span class="text-link"> <p><?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>
</p>
                            </span> <div class="post-time"> <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
" title="Friday, November 4, 2022 6:18 pm"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span> </div> </div> </div> 
                            <div class="text"><h5><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</h5></div>
							 <p><a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],90);?>
</a></p>
							</div>
						 </div>
					</div>
				 </div>
				 <?php }?>
				 <?php }
}
