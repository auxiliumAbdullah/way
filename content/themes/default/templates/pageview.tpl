{include file='_head.tpl'}
{include file='_header.tpl'}

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
        <!-- greetings -->
        <div class="profile-tabs-wrapper custom-scrollbar">

        {include file='greeting.tpl'}
         </div>
        <!-- profile-buttons -->
        <!-- {if $user->_data['can_create_pages']} -->
        <!-- profile-tabs -->
        <!-- <div class="profile-tabs-wrapper custom-scrollbar">
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
        </div> -->
        
        <!-- profile-tabs -->
        
        <!-- {/if} -->
      </div>
      <!-- profile-header -->
		<div class="tabs tabs-style-iconbox"> 
			<nav>
				<ul>
					{foreach $categories as $category}
						<li style="display:inline;" data-val="{__($category['category_name'])}"> <a href="{$system['system_url']}/blogs/category/{$category['category_id']}/{$category['category_url']}">
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
          <div class="col-md-8 mb20 1">
<!-- posts-filter -->
<div class="posts-filter" style="border-bottom:none;">
  <span style="display: none;">{if $_title}{$_title}{else}{__("Recent Updates")}{/if}</span>
  {if $user->_logged_in && !$_filter}
    <div class="float-right" style="display: none;">
      <div class="btn-group btn-group-sm js_posts-filter" data-value="all" title='{__("All")}'>
        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" data-display="static">
          <i class="btn-group-icon fa fa-bars fa-fw"></i> <span class="btn-group-text">{__("All")}</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-item pointer" data-title='{__("All")}' data-value="all"><i class="fa fa-bars fa-fw mr10"></i>{__("All")}</div>
          <div class="dropdown-item pointer" data-title='{__("Text")}' data-value=""><i class="fa fa-comment fa-fw mr10"></i>{__("Text")}</div>
          <div class="dropdown-item pointer" data-title='{__("Links")}' data-value="link"><i class="fa fa-link fa-fw mr10"></i>{__("Links")}</div>
          <div class="dropdown-item pointer" data-title='{__("Media")}' data-value="media"><i class="fa fa-video fa-fw mr10"></i>{__("Media")}</div>
          {if $system['live_enabled'] && $_get != "posts_page" && $_get != "posts_group" && $_get != "posts_event"}
            <div class="dropdown-item pointer" data-title='{__("Live")}' data-value="live"><i class="fa fa-signal fa-fw mr10"></i>{__("Live")}</div>
          {/if}
          <div class="dropdown-item pointer" data-title='{__("Photos")}' data-value="photos"><i class="fa fa-file-image fa-fw mr10"></i>{__("Photos")}</div>
          {if $system['geolocation_enabled']}
            <div class="dropdown-item pointer" data-title='{__("Maps")}' data-value="map"><i class="fa fa-map-marker fa-fw mr10"></i>{__("Maps")}</div>
          {/if}
          {if $system['blogs_enabled'] && $_get != "posts_page" && $_get != "posts_group" && $_get != "posts_event"}
            <div class="dropdown-item pointer" data-title='{__("Articles")}' data-value="article"><i class="fa fa-file-alt fa-fw mr10"></i>{__("Articles")}</div>
          {/if}
          {if $system['market_enabled'] && $_get != "posts_page" && $_get != "posts_group" && $_get != "posts_event"}
            <div class="dropdown-item pointer" data-title='{__("Products")}' data-value="product"><i class="fa fa-shopping-cart fa-fw mr10"></i>{__("Products")}</div>
          {/if}
          {if $system['funding_enabled'] && $_get != "posts_page" && $_get != "posts_group" && $_get != "posts_event"}
            <div class="dropdown-item pointer" data-title='{__("Funding")}' data-value="product"><i class="fa fa-hand-holding-usd fa-fw mr10"></i>{__("Funding")}</div>
          {/if}
          {if $system['offers_enabled'] && $_get != "posts_group" && $_get != "posts_event"}
            <div class="dropdown-item pointer" data-title='{__("Offers")}' data-value="offer"><i class="fa fa-tags fa-fw mr10"></i>{__("Offers")}</div>
          {/if}
          {if $system['jobs_enabled'] && $_get != "posts_group" && $_get != "posts_event"}
            <div class="dropdown-item pointer" data-title='{__("Jobs")}' data-value="job"><i class="fa fa-briefcase fa-fw mr10"></i>{__("Jobs")}</div>
          {/if}
          {if $system['polls_enabled']}
            <div class="dropdown-item pointer" data-title='{__("Polls")}' data-value="poll"><i class="fa fa-chart-pie fa-fw mr10"></i>{__("Polls")}</div>
          {/if}
          {if $system['videos_enabled']}
            <div class="dropdown-item pointer" data-title='{__("Videos")}' data-value="video"><i class="fa fa-film fa-fw mr10"></i>{__("Videos")}</div>
          {/if}
          {if $system['audio_enabled']}
            <div class="dropdown-item pointer" data-title='{__("Audios")}' data-value="audio"><i class="fa fa-music fa-fw mr10"></i>{__("Audios")}</div>
          {/if}
          {if $system['file_enabled']}
            <div class="dropdown-item pointer" data-title='{__("Files")}' data-value="file"><i class="fa fa-file-alt fa-fw mr10"></i>{__("Files")}</div>
          {/if}
        </div>
      </div>
    </div>
  {elseif $_filter == "article"}
    {if $user->_data['can_write_articles']}
      <div class="float-right">
        <a href="{$system['system_url']}/blogs/new" class="btn btn-sm btn-primary">
          <i class="fa fa-plus-circle mr5"></i>{__("Add New Article")}
        </a>
      </div>
    {/if}
  {elseif $_filter == "product"}
    {if $user->_data['can_sell_products']}
      <div class="float-right">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/product.php?do=create">
          <i class="fa fa-plus-circle mr5"></i>{__("Add New Product")}
        </button>
      </div>
    {/if}
  {elseif $_filter == "funding"}
    {if $user->_data['can_raise_funding']}
      <div class="float-right">
        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-url="posts/funding.php?do=create">
          <i class="fa fa-plus-circle mr5"></i>{__("Add Funding Request")}
        </button>
      </div>
    {/if}
  {/if}

  <!-- newsfeed location filter -->
  {if $system['newsfeed_location_filter_enabled'] && in_array($page, ['index', 'group', 'event']) && $view != "boosted_posts" && !$_filter}
    <div class="float-right mr10">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-globe fa-fw"></i>
        {if $selected_country}
          <span>{$selected_country['country_name']}</span>
        {else}
          <span>{__("All Countries")}</span>
        {/if}
      </a>
      <div class="dropdown-menu dropdown-menu-right countries-dropdown">
        <div class="js_scroller">
          <a class="dropdown-item" href="?country=all">
            {__("All Countries")}
          </a>
          {foreach $countries as $country}
            <a class="dropdown-item" href="?country={$country['country_name']}">
              {$country['country_name']}
            </a>
          {/foreach}
        </div>
      </div>
    </div>
  {/if}
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
  {__("View")} <span>0</span> {__("New Posts")}
</button>

<div class="js_posts_stream_staging" style="display: none;"></div>
<!-- posts staging -->

<!-- posts stream -->
<div class="js_posts_stream" data-get="{$_get}" data-filter="{if $_filter}{$_filter}{else}all{/if}" data-country="{if $selected_country}{$selected_country['country_id']}{else}all{/if}" {if $_id}data-id="{$_id}" {/if}>
  {if $posts}
    <ul>
      <!-- posts -->
      {foreach $posts as $post}
        {include file='__feeds_post_view.tpl' _get=$_get}
      {/foreach}
      <!-- posts -->
    </ul>

    <!-- see-more -->
    <div data-is-login="{$user->_logged_in}" class="alert alert-post see-more mb20 js_see-more js_see-more-infinite" data-get="{$get}" data-filter="{if $_filter}{$_filter}{else}all{/if}" data-country="{if $selected_country}{$selected_country['country_id']}{else}all{/if}" {if $_id}data-id="{$_id}" {/if}>
      <span>{__("More Stories")}</span>
      <div class="loader loader_small x-hidden"></div>
    </div>
    <!-- see-more -->
  {else}
    <div class="js_posts_stream" data-get="{$_get}" data-filter="{if $_filter}{$_filter}{else}all{/if}" data-country="{if $selected_country}{$selected_country['country_id']}{else}all{/if}" {if $_id}data-id="{$_id}" {/if}>
      <ul>
        {include file='_no_data.tpl'}
      </ul>
    </div>
  {/if}
</div>
<!-- posts stream -->
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
			{include file='_pagesbox.tpl'}			

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
			{include file='_ads.tpl'}
            {include file='_ads_campaigns.tpl'}
            {include file='_widget.tpl'}

          </div>
          <!-- right panel -->
        </div>
      </div>
      <!-- content panel -->
  </div>
</div>
<script>
  AOS.init();
</script>
<!-- page content -->

{include file='_footer.tpl'}