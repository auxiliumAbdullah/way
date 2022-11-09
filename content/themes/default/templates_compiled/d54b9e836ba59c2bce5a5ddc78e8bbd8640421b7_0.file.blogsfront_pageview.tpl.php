<?php
/* Smarty version 4.2.0, created on 2022-11-09 20:54:59
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/blogsfront_pageview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636ba323938532_56727602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd54b9e836ba59c2bce5a5ddc78e8bbd8640421b7' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/blogsfront_pageview.tpl',
      1 => 1667998493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_posts.tpl' => 1,
    'file:_ads.tpl' => 1,
    'file:_widget.tpl' => 1,
    'file:_tabs.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_636ba323938532_56727602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<style>
.tabbing-column ul {
    display: flex;
    flex-wrap: wrap;
}
.tabbing-column ul li {
    display: block;
    width: 100%;
    background-size: cover;
    position: relative;
    background: #2b354c;
}
.tabbing-column ul li a {
    display: inline-block;
    width: 100%;
    padding: 20px 20px;
}
.tabbing-column img {
    width: 100% !important;
    border-radius: 50%;
    object-fit: cover;
}
.tabbing-column ul li:before {
    position: absolute;
    right: -34px;
    top: 50%;
    border-left: 17px solid transparent;
    border-right: 17px solid transparent;
    border-bottom: 17px solid transparent;
    border-top: 17px solid transparent;
    content: "";
    transform: translateY(-50%);
}
.tabbing-column ul li.active {
    background: #f69d7d;
}
.tabbing-column ul li.active:before{
border-left: 17px solid #f69d7d;
}
.blogsfrontview .posts-filter {
    display: none;
}
@media screen and (max-width: 991px) and (min-width: 768px){
.container, .container-md, .container-sm {
    max-width: 865px;
}
.tab button {
    padding: 12px 7px;
    font-size: 10px;
}
}
@media screen and (max-width: 767px) {
.tabbing-column ul {
    flex-wrap: nowrap;
}
.tabbing-column ul li.active:before {
    border-top: 17px solid #f69d7d;
	    border-left: 17px solid transparent;
}
.tabbing-column ul li:before {
    position: absolute;
    left: 50%;
    bottom: -51px;
    border-left: 17px solid transparent;
    border-right: 17px solid transparent;
    border-bottom: 17px solid transparent;
    border-top: 17px solid transparent;
    content: "";
    transform: translate(-50%, -50%);
	    right: auto;
    top: auto;
}
}

</style>
<!-- page content -->
<div class="container offcanvas">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none offcanvas-sidebar mt20">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 offcanvas-mainbar">
      <!-- profile-header -->
      <div class="profile-header">
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
          </ul>
        </div>
        <!-- profile-tabs -->
        <?php }?>
      </div>
      <!-- profile-header -->
		<div class="tabs tabs-style-iconbox"> 
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
/blogsfront/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
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
      <div class="col-12 offcanvas-mainbar">
        <div class="row">
          <!-- left panel -->
		  
		  <div class="col-md-2 mb20 tabbing-column">
		  <?php if ($_smarty_tpl->tpl_vars['pages']->value) {?>
              <ul>
                <li style="display:inline;" data-val="Home"> <a href="https://waybillion.link/blogsfront">
           <img src="https://waybillion.link/content/uploads/photos/logo-new.png">
          </a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
					<li style="display:inline;" class="<?php if ($_smarty_tpl->tpl_vars['page']->value['page_id'] == $_smarty_tpl->tpl_vars['spage']->value['page_id']) {?>active<?php }?>" data-val="<?php echo __($_smarty_tpl->tpl_vars['page']->value['page_name']);?>
"> <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogsfront/pageview/<?php echo $_smarty_tpl->tpl_vars['page']->value['page_name'];?>
/">
					 <img src="<?php echo $_smarty_tpl->tpl_vars['page']->value['page_picture'];?>
">
					</a></li>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
			<?php }?>
		  </div>
          <div class="col-md-6 mb20 blogsfrontview">
            <?php $_smarty_tpl->_subTemplateRender('file:_posts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_get'=>"posts_page",'_id'=>$_smarty_tpl->tpl_vars['spage']->value['page_id']), 0, false);
?>
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-4">
            <!-- add new article -->
            <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
              <div class="mb10 d-none d-sm-block">
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
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
