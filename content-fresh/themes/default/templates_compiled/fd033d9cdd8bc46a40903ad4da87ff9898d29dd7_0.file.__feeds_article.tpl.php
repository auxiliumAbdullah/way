<?php
/* Smarty version 4.2.0, created on 2022-10-17 05:50:42
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_article.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634ced32091733_62397062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd033d9cdd8bc46a40903ad4da87ff9898d29dd7' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_article.tpl',
      1 => 1664830058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634ced32091733_62397062 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u246756914/domains/waybillion.link/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
if ($_smarty_tpl->tpl_vars['_tpl']->value == "featured") {?>
  <div class="<?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>col-sm-12 col-md-8 col-lg-6<?php } else { ?>col-sm-6 col-md-4 col-lg-3<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
" class="blog-container <?php if ($_smarty_tpl->tpl_vars['_iteration']->value == 1) {?>primary<?php }?>">
      <div class="blog-image">
        <img src="<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
">
      </div>
      <div class="blog-content">
        <h3><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</h3>
        <div class="text"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],400);?>
</div>
        <div>
          <div class="post-avatar">
            <div class="post-avatar-picture small" style="background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_picture'];?>
');">
            </div>
          </div>
          <div class="post-meta">
            <span class="text-link">
              <?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>

            </span>
            <div class="post-time">
              <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-more">
        <span><?php echo __("More");?>
</span>
      </div>
    </a>
  </div>
<?php } else { ?>
  <div class="post-media list">
    <div class="post-media-image-wrapper">
      <a class="post-media-image" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
">
        <div style="padding-top: 50%; background-position: center center; background-size: cover; background-image:url('<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['parsed_cover'];?>
');"></div>
      </a>
      <div class="post-media-image-meta">
        <a class="article-category <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>small<?php }?>" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['category_url'];?>
">
          <?php echo __($_smarty_tpl->tpl_vars['article']->value['article']['category_name']);?>

        </a>
      </div>
    </div>
    <div class="post-media-meta">
      <a class="title mb5" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/<?php echo $_smarty_tpl->tpl_vars['article']->value['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['title'];?>
</a>
      <div class="text mb5">
        <?php if ($_smarty_tpl->tpl_vars['_small']->value) {?>
          <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],100);?>

        <?php } else { ?>
          <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['article']->value['article']['text_snippet'],500);?>

        <?php }?>
      </div>
      <div class="info">
        <?php echo __("By");?>

        <span class="js_user-popover pr10" data-type="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_type'];?>
" data-uid="<?php echo $_smarty_tpl->tpl_vars['article']->value['user_id'];?>
">
          <a href="<?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['post_author_name'];?>
</a>
        </span>
        <i class="fa fa-clock pr5"></i><span class="js_moment pr10" data-time="<?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['article']->value['time'];?>
</span>
        <i class="fa fa-comments pr5"></i><span class="pr10"><?php echo $_smarty_tpl->tpl_vars['article']->value['comments'];?>
</span>
        <i class="fa fa-eye pr5"></i><span class="pr10"><?php echo $_smarty_tpl->tpl_vars['article']->value['article']['views'];?>
</span>
      </div>
    </div>
  </div>
<?php }
}
}
