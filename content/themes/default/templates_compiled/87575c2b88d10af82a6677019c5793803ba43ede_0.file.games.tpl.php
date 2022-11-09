<?php
/* Smarty version 4.2.0, created on 2022-10-19 04:01:45
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/games.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634f76a9278a34_50986741',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87575c2b88d10af82a6677019c5793803ba43ede' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/games.tpl',
      1 => 1648004640,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 2,
    'file:__feeds_game.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_634f76a9278a34_50986741 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page content -->
<div class="container mt20 offcanvas">
  <div class="row">

    <?php if ($_smarty_tpl->tpl_vars['view']->value == "game") {?>

      <!-- side panel -->
      <div class="col-12 d-block d-md-none offcanvas-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-12 offcanvas-mainbar">
        <div class="post">
          <div class="ptb20 plr20">
            <div class="post-header mb0">
              <div class="post-avatar">
                <div class="post-avatar-picture" style="background-image:url(<?php echo $_smarty_tpl->tpl_vars['game']->value['thumbnail'];?>
);">
                </div>
              </div>
              <div class="post-meta">
                <div class="float-right">
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games" class="btn btn-sm btn-light d-none d-lg-block">
                    <i class="fa fa-arrow-circle-left mr5"></i><?php echo __("Go Back");?>

                  </a>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games" class="btn btn-sm btn-icon btn-light d-block d-lg-none">
                    <i class="fa fa-arrow-circle-left"></i>
                  </a>
                </div>
                <div class="h6 mt5 mb0"><?php echo $_smarty_tpl->tpl_vars['game']->value['title'];?>
</div>
              </div>
            </div>
          </div>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe frameborder="0" src="<?php echo $_smarty_tpl->tpl_vars['game']->value['source'];?>
"></iframe>
        </div>
      </div>
      <!-- content panel -->

    <?php } else { ?>

      <!-- side panel -->
      <div class="col-md-4 col-lg-3 offcanvas-sidebar js_sticky-sidebar">
        <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      </div>
      <!-- side panel -->

      <!-- content panel -->
      <div class="col-md-8 col-lg-9 offcanvas-mainbar">

        <!-- tabs -->
        <div class="content-tabs rounded-sm shadow-sm clearfix">
          <ul>
            <li <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games"><?php echo __("Discover");?>
</a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
              <li <?php if ($_smarty_tpl->tpl_vars['view']->value == "played") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games/played"><?php echo __("Your Games");?>
</a>
              </li>
            <?php }?>
          </ul>
        </div>
        <!-- tabs -->

        <!-- content -->
        <div>
          <?php if ($_smarty_tpl->tpl_vars['games']->value) {?>
            <ul class="row">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['games']->value, '_game');
$_smarty_tpl->tpl_vars['_game']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_game']->value) {
$_smarty_tpl->tpl_vars['_game']->do_else = false;
?>
                <?php $_smarty_tpl->_subTemplateRender('file:__feeds_game.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_tpl'=>'box'), 0, true);
?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>

            <!-- see-more -->
            <?php if (count($_smarty_tpl->tpl_vars['games']->value) >= $_smarty_tpl->tpl_vars['system']->value['games_results']) {?>
              <div class="alert alert-post see-more js_see-more" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
">
                <span><?php echo __("See More");?>
</span>
                <div class="loader loader_small x-hidden"></div>
              </div>
            <?php }?>
            <!-- see-more -->
          <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php }?>
        </div>
        <!-- content -->

      </div>
      <!-- content panel -->

    <?php }?>

  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
