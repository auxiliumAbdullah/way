<?php
/* Smarty version 4.2.0, created on 2022-11-01 10:03:22
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.share.publisher.without.login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6360eeea8e6908_50342648',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd839612769fe9398eb87810ec8c6a4442e985983' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.share.publisher.without.login.tpl',
      1 => 1667296999,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6360eeea8e6908_50342648 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-share mr5"></i><?php echo __("Share");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="posts/share.php?do=publish&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
  <div class="modal-body">
    <div style="margin: 25px auto; width: 60%;">
      <div class="input-group">
        <input type="text" disabled class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
        <div class="input-group-append">
          <button type="button" class="btn btn-light js_clipboard" data-clipboard-text="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" data-toggle="tooltip" data-placement="top" title='<?php echo __("Copy");?>
'>
            <i class="fas fa-copy"></i>
          </button>
        </div>
      </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['system']->value['social_share_enabled']) {?>
      <div class="post-social-share">
        <a href="http://www.facebook.com/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-facebook" target="_blank">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://twitter.com/intent/tweet?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-rounded btn-twitter" target="_blank">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="https://vk.com/share.php?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-vk" target="_blank">
          <i class="fab fa-vk"></i>
        </a>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-linkedin" target="_blank">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://api.whatsapp.com/send?text=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-whatsapp d-none d-sm-inline-block" target="_blank">
          <i class="fab fa-whatsapp"></i>
        </a>
        <a href="https://reddit.com/submit?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-reddit" target="_blank">
          <i class="fab fa-reddit"></i>
        </a>
        <a href="https://pinterest.com/pin/create/button/?url=<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/posts/<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
" class="btn btn-sm btn-rounded btn-social-icon btn-pinterest" target="_blank">
          <i class="fab fa-pinterest"></i>
        </a>
      </div>
    <?php }?>

</form>

<?php echo '<script'; ?>
>
  /* share post */
  $('input[type=radio][name=share_to]').on('change', function() {
    switch ($(this).val()) {
      case 'timeline':
        $('#js_share-to-page').hide();
        $('#js_share-to-group').hide();
        $('#js_share-to-event').hide();
        break;
      case 'page':
        $('#js_share-to-page').fadeIn();
        $('#js_share-to-group').hide();
        $('#js_share-to-event').hide();
        break;
      case 'group':
        $('#js_share-to-page').hide();
        $('#js_share-to-group').fadeIn();
        $('#js_share-to-event').hide();
        break;
      case 'event':
        $('#js_share-to-page').hide();
        $('#js_share-to-group').hide();
        $('#js_share-to-event').fadeIn();
        break;
    }
  });
<?php echo '</script'; ?>
><?php }
}
