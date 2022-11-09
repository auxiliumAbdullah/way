{include file='_head.tpl'}
{include file='_header.tpl'}
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
      {include file='_sidebar.tpl'}
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 offcanvas-mainbar">
      <!-- profile-header -->
      <div class="profile-header">
        <!-- profile-cover -->
        <div class="profile-cover-wrapper">
          {if $spage['page_cover_id']}
            <!-- full-cover -->
            <img class="js_position-cover-full x-hidden" src="{$spage['page_cover_full']}">
            <!-- full-cover -->

            <!-- cropped-cover -->
            <img class="js_position-cover-cropped js_lightbox" data-init-position="{$spage['page_cover_position']}" data-id="{$spage['page_cover_id']}" data-image="{$spage['page_cover_full']}" data-context="album" src="{$spage['page_cover']}" alt="{$spage['page_title']}">
            <!-- cropped-cover -->
          {/if}

          {if $spage['i_admin']}
            <!-- buttons -->
            <div class="profile-cover-buttons">
              <div class="profile-cover-change">
                <i class="fa fa-camera js_x-uploader" data-handle="cover-page" data-id="{$spage['page_id']}"></i>
              </div>
              <div class="profile-cover-position {if !$spage['page_cover']}x-hidden{/if}">
                <input class="js_position-picture-val" type="hidden" name="position-picture-val">
                <i class="fa fa-crop-alt js_init-position-picture" data-handle="page" data-id="{$spage['page_id']}"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-check fa-fw js_save-position-picture"></i>
              </div>
              <div class="profile-cover-position-buttons">
                <i class="fa fa-times fa-fw js_cancel-position-picture"></i>
              </div>
              <div class="profile-cover-delete {if !$spage['page_cover']}x-hidden{/if}">
                <i class="fa fa-trash js_delete-cover" data-handle="cover-page" data-id="{$spage['page_id']}"></i>
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
              <i class="fa fa-arrows-alt mr5"></i>{__("Drag to reposition cover")}
            </div>
            <!-- loaders -->
          {/if}
        </div>
        <!-- profile-cover -->

        <!-- profile-avatar -->
        <div class="profile-avatar-wrapper">
          <img {if !$spage['page_picture_default']} class="js_lightbox" data-id="{$spage['page_picture_id']}" data-image="{$spage['page_picture_full']}" data-context="album" {/if} src="{$spage['page_picture']}" alt="{$spage['page_title']}">

          {if $spage['i_admin']}
            <!-- buttons -->
            <div class="profile-avatar-change">
              <i class="fa fa-camera js_x-uploader" data-handle="picture-page" data-id="{$spage['page_id']}"></i>
            </div>
            <div class="profile-avatar-crop {if $spage['page_picture_default']}x-hidden{/if}">
              <i class="fa fa-crop-alt js_init-crop-picture" data-image="{$spage['page_picture_full']}" data-handle="page" data-id="{$spage['page_id']}"></i>
            </div>
            <div class="profile-avatar-delete {if $spage['page_picture_default']}x-hidden{/if}">
              <i class="fa fa-trash js_delete-picture" data-handle="picture-page" data-id="{$spage['page_id']}"></i>
            </div>
            <!-- buttons -->
            <!-- loaders -->
            <div class="profile-avatar-change-loader">
              <div class="progress x-progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- loaders -->
          {/if}
        </div>
        <!-- profile-avatar -->

        <!-- profile-name -->
        <div class="profile-name-wrapper">
          <a href="{$system['system_url']}/pages/{$spage['page_name']}">{$spage['page_title']}</a>
          {if $spage['page_verified']}
            <i data-toggle="tooltip" data-placement="top" title='{__("Verified Page")}' class="fa fa-check-circle fa-fw verified-badge"></i>
          {/if}
        </div>
        <!-- profile-name -->

        <!-- profile-buttons -->
        <div class="profile-buttons-wrapper">
          <!-- like -->
          {if $spage['i_like']}
            <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="{$spage['page_id']}">
              <i class="fa fa-heart mr5"></i>{__("Unlike")}
            </button>
          {else}
            <button type="button" class="btn btn-sm btn-primary js_like-page" data-id="{$spage['page_id']}">
              <i class="fa fa-heart mr5"></i>{__("Like")}
            </button>
          {/if}
          <!-- like -->

          <!-- custom button -->
          {if $spage['page_action_text'] && $spage['page_action_url']}
            <a target="_blank" href="{$spage['page_action_url']}" class="btn btn-sm btn-{$spage['page_action_color']}">{$spage['page_action_text']}</a>
          {/if}
          <!-- custom button -->

          {if $spage['i_admin']}
            {if $system['packages_enabled']}
              <!-- boost -->
              {if $user->_data['can_boost_pages']}
                {if $spage['page_boosted']}
                  <button type="button" class="btn btn-sm btn-danger js_unboost-page" data-id="{$spage['page_id']}">
                    <i class="fa fa-bolt mr5"></i>{__("Unboost")}
                  </button>
                {else}
                  <button type="button" class="btn btn-sm btn-danger js_boost-page" data-id="{$spage['page_id']}">
                    <i class="fa fa-bolt mr5"></i>{__("Boost")}
                  </button>
                {/if}
              {else}
                <a href="{$system['system_url']}/packages" class="btn btn-sm btn-danger">
                  <i class="fa fa-bolt mr5"></i>{__("Boost Page")}
                </a>
              {/if}
              <!-- boost -->
            {/if}
          {else}
            {if $user->_logged_in}
              <!-- report -->
              <div class="d-inline-block dropdown ml5">
                <button type="button" class="btn btn-icon btn-rounded btn-light" data-toggle="dropdown" data-display="static">
                  <i class="fa fa-ellipsis-v fa-fw"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                  <!-- report -->
                  <div class="dropdown-item pointer" data-toggle="modal" data-url="data/report.php?do=create&handle=page&id={$spage['page_id']}">
                    <i class="fa fa-flag fa-fw mr10"></i>{__("Report")}
                  </div>
                  <!-- report -->
                  <!-- manage -->
                  {if $user->_is_admin}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{$system['system_url']}/admincp/pages/edit_page/{$spage['page_id']}">
                      <i class="fa fa-cog fa-fw mr10"></i>{__("Edit in Admin Panel")}
                    </a>
                  {elseif $user->_is_moderator}
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{$system['system_url']}/modcp/pages/edit_page/{$spage['page_id']}">
                      <i class="fa fa-cog fa-fw mr10"></i>{__("Edit in Moderator Panel")}
                    </a>
                  {/if}
                  <!-- manage -->
                </div>
              </div>
              <!-- report -->
            {/if}
          {/if}
        </div>
        <!-- profile-buttons -->
        {if $user->_data['can_create_pages']}
        <!-- profile-tabs -->
        <div class="profile-tabs-wrapper custom-scrollbar">
          <ul>
            <li>
              <a href="{$system['system_url']}/pages/{$spage['page_name']}" {if $view == ""}class="active" {/if}>
                <i class="fa fa-newspaper fa-fw mr5"></i>{__("Timeline")}
              </a>
            </li>
            <li>
              <a href="{$system['system_url']}/pages/{$spage['page_name']}/photos" {if $view == "photos" || $view == "albums" || $view == "album"}class="active" {/if}>
                <i class="fa fa-images fa-fw mr5"></i>{__("Photos")}
              </a>
            </li>
            <li>
              <a href="{$system['system_url']}/pages/{$spage['page_name']}/videos" {if $view == "videos"}class="active" {/if}>
                <i class="fa fa-video fa-fw mr5"></i>{__("Videos")}
              </a>
            </li>
            {if $spage['i_like']}
              <li>
                <a href="{$system['system_url']}/pages/{$spage['page_name']}/invites" {if $view == "invites"}class="active" {/if}>
                  <i class="fa fa-user-tag fa-fw mr5"></i>{__("Invite Friends")}
                </a>
              </li>
            {/if}
            {if $spage['i_admin']}
              <li>
                <a href="{$system['system_url']}/pages/{$spage['page_name']}/settings" {if $view == "settings"}class="active" {/if}>
                  <i class="fa fa-cog fa-fw mr5"></i>{__("Settings")}
                </a>
              </li>
            {/if}
          </ul>
        </div>
        <!-- profile-tabs -->
        {/if}
      </div>
      <!-- profile-header -->
		<div class="tabs tabs-style-iconbox"> 
			<nav>
				<ul>
					{foreach $categories as $category}
						<li style="display:inline;" data-val="{__($category['category_name'])}"> <a href="{$system['system_url']}/blogsfront/category/{$category['category_id']}/{$category['category_url']}">
						  <span>{__($category['category_name'])}</span>
						</a></li>
					{/foreach}
				</ul>
			</nav>
		</div>
		<!-- content panel -->
      <div class="col-12 offcanvas-mainbar">
        <div class="row">
          <!-- left panel -->
		  
		  <div class="col-md-2 mb20 tabbing-column">
		  {if $pages}
              <ul>
                <li style="display:inline;" data-val="Home"> <a href="https://waybillion.link/blogsfront">
           <img src="https://waybillion.link/content/uploads/photos/logo-new.png">
          </a></li>
                {foreach $pages as $page}
					<li style="display:inline;" class="{if $page['page_id'] == $spage['page_id']}active{/if}" data-val="{__($page['page_name'])}"> <a href="{$system['system_url']}/blogsfront/pageview/{$page['page_name']}/">
					 <img src="{$page['page_picture']}">
					</a></li>
				{/foreach}
              </ul>
			{/if}
		  </div>
          <div class="col-md-6 mb20 blogsfrontview">
            {include file='_posts.tpl' _get="posts_page" _id=$spage['page_id']}
          </div>
          <!-- left panel -->

          <!-- right panel -->
          <div class="col-md-4">
            <!-- add new article -->
            {if $user->_logged_in && $user->_data['can_write_articles']}
              <div class="mb10 d-none d-sm-block">
                <a href="{$system['system_url']}/blogs/new" class="btn btn-success btn-block">
                  <i class="fa fa-edit mr5"></i>{__("Write New Article")}
                </a>
              </div>
            {/if}
            <!-- add new article -->

            {include file='_ads.tpl'}
            {include file='_widget.tpl'}

            {if $category['category_description']}
              <!-- category description -->
              <div class="articles-widget-header">
                <div class="articles-widget-title">{__("Description")}</div>
              </div>
              <div class="mb15">
                {__($category['category_description'])}
              </div>
              <!-- category description -->
            {/if}

            {if $blogs_categories}
              <!-- blogs categories -->
              <div class="articles-widget-header">
                <div class="articles-widget-title">{__("Sub-Categories")}</div>
              </div>
              <ul class="article-categories clearfix">
                {foreach $blogs_categories as $category}
                  <li>
                    <a class="article-category" href="{$system['system_url']}/blogs/category/{$category['category_id']}/{$category['category_url']}">
                      {__($category['category_name'])}
                    </a>
                  </li>
                {/foreach}
              </ul>
              <!-- blogs categories -->
            {/if}
			{include file='_tabs.tpl'}
          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->
  </div>
</div>
<!-- page content -->

{include file='_footer.tpl'}