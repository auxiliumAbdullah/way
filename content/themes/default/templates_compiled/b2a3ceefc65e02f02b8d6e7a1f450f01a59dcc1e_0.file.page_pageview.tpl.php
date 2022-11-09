<?php
/* Smarty version 4.2.0, created on 2022-11-09 15:26:59
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/page_pageview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636b56437d2eb0_19887537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2a3ceefc65e02f02b8d6e7a1f450f01a59dcc1e' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/page_pageview.tpl',
      1 => 1667978742,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:__feeds_post_view.tpl' => 1,
    'file:_no_data.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_tabs.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_636b56437d2eb0_19887537 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u246756914/domains/waybillion.link/public_html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<?php echo '<script'; ?>
 src="https://unpkg.com/aos@2.3.1/dist/aos.js"><?php echo '</script'; ?>
>

<!-- page content -->
<div class="container offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 col-md-4 col-lg-3 d-block d-sm-none d-md-block offcanvas-sidebar mt20 js_sticky-sidebar">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 col-md-8 col-lg-9 offcanvas-mainbar">
      <!-- profile-header -->
      <div class="profile-header" >
        <!-- profile-cover -->
        <div class="profile-cover-wrapper">
          <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_cover_id']) {?>
            <!-- full-cover -->
            <img class="js_position-cover-full x-hidden" src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_full'];?>
">
            <!-- full-cover -->

            <!-- cropped-cover -->
            <img class="js_position-cover-cropped js_lightbox" data-init-position="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_position'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover_full'];?>
" data-context="album" src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_cover'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">
            <!-- cropped-cover -->
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
            <!-- buttons -->
            <div class="profile-cover-buttons">
              <div class="profile-cover-change">
                <i class="fa fa-camera js_x-uploader" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
              </div>
              <div class="profile-cover-position <?php if (!$_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?>x-hidden<?php }?>">
                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                <i class="fa fa-crop-alt js_init-position-picture" data-handle="page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-check fa-fw js_save-position-picture"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
              </div>
              <div class="profile-cover-delete <?php if (!$_smarty_tpl->tpl_vars['spage']->value['page_cover']) {?>x-hidden<?php }?>">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
              </div>
            </div>
            <!-- buttons -->

            <!-- loaders -->
            <div class="profile-cover-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <div class="profile-cover-position-loader">
              <i class="fa fa-arrows-alt mr5"></i><?php echo __("Drag to reposition cover");?>

            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-cover -->

        <!-- profile-avatar -->
        <div class="profile-avatar-wrapper">
          <img <?php if (!$_smarty_tpl->tpl_vars['spage']->value['page_picture_default']) {?> class="js_lightbox" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture_id'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture_full'];?>
" data-context="album" <?php }?> src="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
">

          <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
            <!-- buttons -->
            <div class="profile-avatar-change">
              <i class="fa fa-camera js_x-uploader" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
            </div>
            <div class="profile-avatar-crop <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_picture_default']) {?>x-hidden<?php }?>">
              <i class="fa fa-crop-alt js_init-crop-picture" data-image="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_picture_full'];?>
" data-handle="page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
            </div>
            <div class="profile-avatar-delete <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_picture_default']) {?>x-hidden<?php }?>">
              <i class="fa fa-trash js_delete-picture" data-handle="picture-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
"></i>
            </div>
            <!-- buttons -->
            <!-- loaders -->
            <div class="profile-avatar-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- loaders -->
          <?php }?>
        </div>
        <!-- profile-avatar -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_title'];?>
</a>
          <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_verified']) {?>
            <i data-toggle="tooltip" data-placement="top" title='<?php echo __("Verified Page");?>
' class="fa fa-check-circle fa-fw verified-badge"></i>
          <?php }?>
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
          <!-- like -->
          <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
            <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
              <i class="fa fa-heart mr5"></i><?php echo __("Unlike");?>

            </button>
          <?php } else { ?>
            <button type="button" class="btn btn-sm btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
              <i class="fa fa-heart mr5"></i><?php echo __("Like");?>

            </button>
          <?php }?>
          <!-- like -->

          <!-- custom button -->
          <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_action_text'] && $_smarty_tpl->tpl_vars['spage']->value['page_action_url']) {?>
            <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_action_url'];?>
" class="btn btn-sm btn-<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_action_color'];?>
"><?php echo $_smarty_tpl->tpl_vars['spage']->value['page_action_text'];?>
</a>
          <?php }?>
          <!-- custom button -->

          <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
            <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
              <!-- boost -->
              <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_boost_pages']) {?>
                <?php if ($_smarty_tpl->tpl_vars['spage']->value['page_boosted']) {?>
                  <button type="button" class="btn btn-sm btn-danger js_unboost-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <i class="fa fa-bolt mr5"></i><?php echo __("Unboost");?>

                  </button>
                <?php } else { ?>
                  <button type="button" class="btn btn-sm btn-danger js_boost-page" data-id="<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <i class="fa fa-bolt mr5"></i><?php echo __("Boost");?>

                  </button>
                <?php }?>
              <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages" class="btn btn-sm btn-danger">
                  <i class="fa fa-bolt mr5"></i><?php echo __("Boost Page");?>

                </a>
              <?php }?>
              <!-- boost -->
            <?php }?>
          <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
              <!-- report -->
              <div class="d-inline-block dropdown ml5">
                <button type="button" class="btn btn-icon btn-rounded btn-light" data-toggle="dropdown" data-display="static">
                  <i class="fa fa-ellipsis-v fa-fw"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <!-- report -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=page&id=<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                    <i class="fa fa-flag fa-fw mr10"></i><?php echo __("Report");?>

                  </div>
                  <!-- report -->
                  <!-- manage -->
                  <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp/pages/edit_page/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <i class="fa fa-cog fa-fw mr10"></i><?php echo __("Edit in Admin Panel");?>

                    </a>
                  <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp/pages/edit_page/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_id'];?>
">
                      <i class="fa fa-cog fa-fw mr10"></i><?php echo __("Edit in Moderator Panel");?>

                    </a>
                  <?php }?>
                  <!-- manage -->
                </div>
              </div>
              <!-- report -->
            <?php }?>
          <?php }?>
        </div>
        <!-- profile-buttons -->
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_pages']) {?>
        <!-- profile-tabs -->
        <div class="profile-tabs-wrapper custom-scrollbar">
          <ul>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
                <i class="fa fa-newspaper fa-fw mr5"></i><?php echo __("Timeline");?>

              </a>
            </li>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/photos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "photos" || $_smarty_tpl->tpl_vars['view']->value == "albums" || $_smarty_tpl->tpl_vars['view']->value == "album") {?>class="active" <?php }?>>
                <i class="fa fa-images fa-fw mr5"></i><?php echo __("Photos");?>

              </a>
            </li>
            <li>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/videos" <?php if ($_smarty_tpl->tpl_vars['view']->value == "videos") {?>class="active" <?php }?>>
                <i class="fa fa-video fa-fw mr5"></i><?php echo __("Videos");?>

              </a>
            </li>
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_like']) {?>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/invites" <?php if ($_smarty_tpl->tpl_vars['view']->value == "invites") {?>class="active" <?php }?>>
                  <i class="fa fa-user-tag fa-fw mr5"></i><?php echo __("Invite Friends");?>

                </a>
              </li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['spage']->value['i_admin']) {?>
              <li>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/<?php echo $_smarty_tpl->tpl_vars['spage']->value['page_name'];?>
/settings" <?php if ($_smarty_tpl->tpl_vars['view']->value == "settings") {?>class="active" <?php }?>>
                  <i class="fa fa-cog fa-fw mr5"></i><?php echo __("Settings");?>

                </a>
              </li>
            <?php }?>
            <!-- <li><span class="publishernew"></span></li>
            <li><?php echo smarty_modifier_date_format(time(),"%A");?>
 , <?php echo smarty_modifier_date_format(time(),"%H:%M %P");?>
</li> -->
            <!-- <li> </li> -->
          </ul>
        </div>
        <!-- profile-tabs -->
      
        <?php }?>
      </div>
      <!-- profile-header -->
		<div class="tabs tabs-style-iconbox 1"> 
			<nav>
				<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
						<li style="display:inline;" data-val="<?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
"> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
						  <span><?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>
</span>
						</a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</nav>
		</div>
		<!-- content panel -->
      <div class="col-12 offcanvas-mainbar 1">
        <div class="row">
          <!-- left panel -->
          <div class="col-md-7 mb20">
            <!-- posts-filter -->
<div class="posts-filter">
  <span><?php if ($_smarty_tpl->tpl_vars['_title']->value) {
echo $_smarty_tpl->tpl_vars['_title']->value;
} else {
echo __("Recent Updates");
}?></span>
  <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && !$_smarty_tpl->tpl_vars['_filter']->value) {?>
    <div class="float-right">
      <div class="btn-group btn-group-sm js_posts-filter" data-value="all" title='<?php echo __("All");?>
'>
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static">
          <i class="btn-group-icon fa fa-bars fa-fw"></i> <span class="btn-group-text"><?php echo __("All");?>
</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-item pointer" data-title='<?php echo __("All");?>
' data-value="all"><i class="fa fa-bars fa-fw mr10"></i><?php echo __("All");?>
</div>
          <div class="dropdown-item pointer" data-title='<?php echo __("Text");?>
' data-value=""><i class="fa fa-comment fa-fw mr10"></i><?php echo __("Text");?>
</div>
          <div class="dropdown-item pointer" data-title='<?php echo __("Links");?>
' data-value="link"><i class="fa fa-link fa-fw mr10"></i><?php echo __("Links");?>
</div>
          <div class="dropdown-item pointer" data-title='<?php echo __("Media");?>
' data-value="media"><i class="fa fa-video fa-fw mr10"></i><?php echo __("Media");?>
</div>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['live_enabled'] && $_smarty_tpl->tpl_vars['_get']->value != "posts_page" && $_smarty_tpl->tpl_vars['_get']->value != "posts_group" && $_smarty_tpl->tpl_vars['_get']->value != "posts_event") {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Live");?>
' data-value="live"><i class="fa fa-signal fa-fw mr10"></i><?php echo __("Live");?>
</div>
          <?php }?>
          <div class="dropdown-item pointer" data-title='<?php echo __("Photos");?>
' data-value="photos"><i class="fa fa-file-image fa-fw mr10"></i><?php echo __("Photos");?>
</div>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['geolocation_enabled']) {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Maps");?>
' data-value="map"><i class="fa fa-map-marker fa-fw mr10"></i><?php echo __("Maps");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled'] && $_smarty_tpl->tpl_vars['_get']->value != "posts_page" && $_smarty_tpl->tpl_vars['_get']->value != "posts_group" && $_smarty_tpl->tpl_vars['_get']->value != "posts_event") {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Articles");?>
' data-value="article"><i class="fa fa-file-alt fa-fw mr10"></i><?php echo __("Articles");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled'] && $_smarty_tpl->tpl_vars['_get']->value != "posts_page" && $_smarty_tpl->tpl_vars['_get']->value != "posts_group" && $_smarty_tpl->tpl_vars['_get']->value != "posts_event") {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Products");?>
' data-value="product"><i class="fa fa-shopping-cart fa-fw mr10"></i><?php echo __("Products");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_enabled'] && $_smarty_tpl->tpl_vars['_get']->value != "posts_page" && $_smarty_tpl->tpl_vars['_get']->value != "posts_group" && $_smarty_tpl->tpl_vars['_get']->value != "posts_event") {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Funding");?>
' data-value="product"><i class="fa fa-hand-holding-usd fa-fw mr10"></i><?php echo __("Funding");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['offers_enabled'] && $_smarty_tpl->tpl_vars['_get']->value != "posts_group" && $_smarty_tpl->tpl_vars['_get']->value != "posts_event") {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Offers");?>
' data-value="offer"><i class="fa fa-tags fa-fw mr10"></i><?php echo __("Offers");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['jobs_enabled'] && $_smarty_tpl->tpl_vars['_get']->value != "posts_group" && $_smarty_tpl->tpl_vars['_get']->value != "posts_event") {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Jobs");?>
' data-value="job"><i class="fa fa-briefcase fa-fw mr10"></i><?php echo __("Jobs");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['polls_enabled']) {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Polls");?>
' data-value="poll"><i class="fa fa-chart-pie fa-fw mr10"></i><?php echo __("Polls");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['videos_enabled']) {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Videos");?>
' data-value="video"><i class="fa fa-film fa-fw mr10"></i><?php echo __("Videos");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['audio_enabled']) {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Audios");?>
' data-value="audio"><i class="fa fa-music fa-fw mr10"></i><?php echo __("Audios");?>
</div>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['system']->value['file_enabled']) {?>
            <div class="dropdown-item pointer" data-title='<?php echo __("Files");?>
' data-value="file"><i class="fa fa-file-alt fa-fw mr10"></i><?php echo __("Files");?>
</div>
          <?php }?>
        </div>
      </div>
    </div>
  <?php } elseif ($_smarty_tpl->tpl_vars['_filter']->value == "article") {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
      <div class="float-right">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new" class="btn btn-sm btn-primary">
          <i class="fa fa-plus-circle mr5"></i><?php echo __("Add New Article");?>

        </a>
      </div>
    <?php }?>
  <?php } elseif ($_smarty_tpl->tpl_vars['_filter']->value == "product") {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products']) {?>
      <div class="float-right">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/product.php?do=create">
          <i class="fa fa-plus-circle mr5"></i><?php echo __("Add New Product");?>

        </button>
      </div>
    <?php }?>
  <?php } elseif ($_smarty_tpl->tpl_vars['_filter']->value == "funding") {?>
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding']) {?>
      <div class="float-right">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/funding.php?do=create">
          <i class="fa fa-plus-circle mr5"></i><?php echo __("Add Funding Request");?>

        </button>
      </div>
    <?php }?>
  <?php }?>

  <!-- newsfeed location filter -->
  <?php if ($_smarty_tpl->tpl_vars['system']->value['newsfeed_location_filter_enabled'] && in_array($_smarty_tpl->tpl_vars['page']->value,array('index','group','event')) && $_smarty_tpl->tpl_vars['view']->value != "boosted_posts" && !$_smarty_tpl->tpl_vars['_filter']->value) {?>
    <div class="float-right mr10">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-globe fa-fw"></i>
        <?php if ($_smarty_tpl->tpl_vars['selected_country']->value) {?>
          <span><?php echo $_smarty_tpl->tpl_vars['selected_country']->value['country_name'];?>
</span>
        <?php } else { ?>
          <span><?php echo __("All Countries");?>
</span>
        <?php }?>
      </a>
      <div class="dropdown-menu dropdown-menu-right countries-dropdown">
        <div class="js_scroller">
          <a class="dropdown-item" href="?country=all">
            <?php echo __("All Countries");?>

          </a>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['countries']->value, 'country');
$_smarty_tpl->tpl_vars['country']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['country']->value) {
$_smarty_tpl->tpl_vars['country']->do_else = false;
?>
            <a class="dropdown-item" href="?country=<?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>
">
              <?php echo $_smarty_tpl->tpl_vars['country']->value['country_name'];?>

            </a>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      </div>
    </div>
  <?php }?>
  <!-- newsfeed location filter -->
</div>
<!-- posts-filter -->

<!-- posts-loader -->
<div class="post x-hidden js_posts_loader">
  <div class="post-body with-loader">
    <div class="panel-effect">
      <div class="fake-effect fe-0"></div>
      <div class="fake-effect fe-1"></div>
      <div class="fake-effect fe-2"></div>
      <div class="fake-effect fe-3"></div>
      <div class="fake-effect fe-4"></div>
      <div class="fake-effect fe-5"></div>
      <div class="fake-effect fe-6"></div>
      <div class="fake-effect fe-7"></div>
      <div class="fake-effect fe-8"></div>
      <div class="fake-effect fe-9"></div>
      <div class="fake-effect fe-10"></div>
      <div class="fake-effect fe-11"></div>
    </div>
  </div>
</div>
<!-- posts-loader -->

<!-- posts staging -->
<button class="btn btn-primary rounded-pill posts-staging-btn js_view-staging-posts">
  <?php echo __("View");?>
 <span>0</span> <?php echo __("New Posts");?>

</button>

<div class="js_posts_stream_staging" style="display: none;"></div>
<!-- posts staging -->

<!-- posts stream -->
<div class="js_posts_stream" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->tpl_vars['selected_country']->value) {
echo $_smarty_tpl->tpl_vars['selected_country']->value['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>
  <?php if ($_smarty_tpl->tpl_vars['posts']->value) {?>
    <ul>
      <!-- posts -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post_view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>$_smarty_tpl->tpl_vars['_get']->value), 0, true);
?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <!-- posts -->
    </ul>

    <!-- see-more -->
    <div data-is-login="<?php echo $_smarty_tpl->tpl_vars['user']->value->_logged_in;?>
" class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="<?php echo $_smarty_tpl->tpl_vars['get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->tpl_vars['selected_country']->value) {
echo $_smarty_tpl->tpl_vars['selected_country']->value['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>
      <span><?php echo __("More Stories");?>
</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  <?php } else { ?>
    <div class="js_posts_stream" data-get="<?php echo $_smarty_tpl->tpl_vars['_get']->value;?>
" data-filter="<?php if ($_smarty_tpl->tpl_vars['_filter']->value) {
echo $_smarty_tpl->tpl_vars['_filter']->value;
} else { ?>all<?php }?>" data-country="<?php if ($_smarty_tpl->tpl_vars['selected_country']->value) {
echo $_smarty_tpl->tpl_vars['selected_country']->value['country_id'];
} else { ?>all<?php }?>" <?php if ($_smarty_tpl->tpl_vars['_id']->value) {?>data-id="<?php echo $_smarty_tpl->tpl_vars['_id']->value;?>
" <?php }?>>
      <ul>
        <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      </ul>
    </div>
  <?php }?>
</div>
<!-- posts stream -->
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-5">
            <!-- add new article -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
              <div class="mb10 d-none d-sm-block" data-aos="fade-up" data-aos-duration="3000">
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/new" class="btn btn-success btn-block">
                  <i class="fa fa-edit mr5"></i><?php echo __("Write New Article");?>

                </a>
              </div>
            <?php }?>
            <!-- add new article -->

            <?php $_smarty_tpl->_subTemplateRender('file:_ads.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			               <?php $_smarty_tpl->_subTemplateRender('file:_widget.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

            <?php if ($_smarty_tpl->tpl_vars['category']->value['category_description']) {?>
              <!-- category description -->
              <div class="articles-widget-header">
                <div class="articles-widget-title"><?php echo __("Description");?>
</div>
              </div>
              <div class="mb15">
                <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_description']);?>

              </div>
              <!-- category description -->
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['blogs_categories']->value) {?>
              <!-- blogs categories -->
              <div class="articles-widget-header">
                <div class="articles-widget-title"><?php echo __("Sub-Categories");?>
</div>
              </div>
              <ul class="article-categories clearfix">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                  <li>
                    <a class="article-category" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
                      <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

                    </a>
                  </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
              <!-- blogs categories -->
            <?php }?>
			<?php $_smarty_tpl->_subTemplateRender('file:_tabs.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->
  </div>
</div>
<?php echo '<script'; ?>
>
  AOS.init();
<?php echo '</script'; ?>
>

<!-- page content -->
<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
