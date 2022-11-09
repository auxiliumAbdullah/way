<?php
/* Smarty version 4.2.0, created on 2022-11-04 11:20:56
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6364f598a8c395_68061320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82228d2a9266faa27594bb5d698e3eb708ace329' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_sidebar.tpl',
      1 => 1667560853,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__svg_icons.tpl' => 11,
  ),
),false)) {
function content_6364f598a8c395_68061320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card main-side-nav-card">
  <div class="card-body with-nav">
    <ul class="main-side-nav">

      <!-- basic -->
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <li>
          <a>
            <img class="rounded-circle" src="https://waybillion.link/content/themes/default/images/home/icon2/Female Avatar.png" alt="">
            <span><?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</span>
          </a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>

          <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/messages">
             <img class="rounded-circle" src="https://waybillion.link/content/themes/default/images/home/icon2/Chat.png" alt="">
            <?php echo __("Messages");?>

          </a>
        </li>

        <?php }?> 

        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/settings">
           <img class="rounded-circle" src="https://waybillion.link/content/themes/default/images/home/icon2/Gear.png" alt="">
            <?php echo __("Settings");?>

          </a>
        </li>

        <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?>
          <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/admincp">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dashboard",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, false);
?>
              <?php echo __("Admin Panel");?>

            </a>
          </li>
        <?php } elseif ($_smarty_tpl->tpl_vars['user']->value->_is_moderator) {?>
          <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/modcp">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"dashboard",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Moderator Panel");?>

            </a>
          </li>
        <?php }?>
      <?php }?>
      <!-- basic -->

      <!-- favorites -->
      <li class="ptb5">
        <strong><small class="text-muted"><?php echo mb_strtoupper(__("favorites"), 'UTF-8');?>
</small></strong>
      </li>

      <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == '' || $_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>class="active" <?php }?>>
        <?php if (!$_smarty_tpl->tpl_vars['user']->value->_logged_in || (!$_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled'] && !$_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled'])) {?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
              <img class="rounded-circle" src="https://waybillion.link/content/themes/default/images/home/icon2/Notebook.png" alt="">
            <?php echo __("News Feed");?>

          </a>
        <?php } else { ?>
          <a href="#newsfeed" data-toggle="collapse" <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>aria-expanded="true" <?php }?>>
            <img class="rounded-circle" src="https://waybillion.link/content/themes/default/images/home/icon2/Notebook.png" alt="">
            <?php echo __("News Feed");?>

          </a>
          <div class='collapse <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && ($_smarty_tpl->tpl_vars['view']->value == "discover" || $_smarty_tpl->tpl_vars['view']->value == "popular")) {?>show<?php }?>' id="newsfeed">
            <ul>
              <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == '') {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
">
                  <img class="rounded-circle" src="https://waybillion.link/content/themes/default/images/home/icon2/Notebook.png" alt="">
                  <?php echo __("Recent Updates");?>

                </a>
              </li>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['popular_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "popular") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/popular">
                    <img class="rounded-circle" src="https://waybillion.link/content/themes/default/images/home/icon2/Notebook.png" alt="">
                    <?php echo __("Popular Posts");?>

                  </a>
                </li>
              <?php }?>
              <?php if ($_smarty_tpl->tpl_vars['system']->value['discover_posts_enabled']) {?>
                <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "discover") {?>class="active" <?php }?>>
                  <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/discover">
                    <img class="rounded-circle" src="https://waybillion.link/content/themes/default/images/home/icon2/Notebook.png" alt="">
                    <?php echo __("Discover Posts");?>

                  </a>
                </li>
              <?php }?>
            </ul>
          </div>
        <?php }?>
      </li>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_write_articles']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "articles") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/articles">
            <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Paper _ Pencil.png" alt="">
            <?php echo __("My Articles");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_sell_products']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "products") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/products">
            <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Shopping Bag.png" alt="">
            <?php echo __("My Products");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_raise_funding']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "funding_requests") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/funding_requests">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"money-bag",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("My Funding");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "saved") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/saved">
           <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Book.png" alt="">
            <?php echo __("Saved Posts");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['memories_enabled']) {?>
          <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "memories") {?>class="active" <?php }?>>
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/memories">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"memories",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
              <?php echo __("Memories");?>

            </a>
          </li>
        <?php }?>
      <?php }?>
      <!-- favorites -->

      <!-- advertising -->
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
        <?php if ($_smarty_tpl->tpl_vars['system']->value['can_create_ads'] || $_smarty_tpl->tpl_vars['system']->value['wallet_enabled'] || $_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>
          <li class="ptb5">
            <small class="text-muted"><?php echo mb_strtoupper(__("Advertising"), 'UTF-8');?>
</small>
          </li>

          <?php if ($_smarty_tpl->tpl_vars['user']->value->_data['can_create_ads']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "ads") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/ads">
                <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Target.png" alt="">
                <?php echo __("Ads Manager");?>

              </a>
            </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['system']->value['wallet_enabled']) {?>
            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "wallet") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/wallet">
                <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Wallet.png" alt="">
                <?php echo __("Wallet");?>

              </a>
            </li>
          <?php }?>

          <?php if ($_smarty_tpl->tpl_vars['user']->value->_is_admin) {?> <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled']) {?>

            <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "boosted_posts") {?>class="active" <?php }?>>
              <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/posts">
               <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Loadspeaker.png" alt="">
                <?php echo __("Boosted Posts");?>

              </a>
            </li>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
              <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "index" && $_smarty_tpl->tpl_vars['view']->value == "boosted_pages") {?>class="active" <?php }?>>
                <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/boosted/pages">
                     <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Trophy.png" alt="">
                  <?php echo __("Boosted Pages");?>

                </a>
              </li>
            <?php }?>
          <?php }?>

        <?php }?>
        <?php }?>
      <?php }?>
      <!-- advertising -->

      <!-- explore -->
      <li class="ptb5">
        <small class="text-muted"><?php echo mb_strtoupper(__("explore"), 'UTF-8');?>
</small>
      </li>

      
      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "pages") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages">
            <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Location Flag.png" alt="">
            <?php echo __("Pages");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['groups_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "groups") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"groups",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Groups");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['events_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "events") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/events">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"events",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Events");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['blogs_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "blogs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs" >
             <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Edit Tool.png" alt="">
            <?php echo __("Blogs");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['market_enabled']) {?>
        <li>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/market"  >
            <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Smartphone.png" alt="">
            <?php echo __("Marketplace");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['funding_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "funding") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/funding">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"funding",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Funding");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['offers_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "offers") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/offers" >
            <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Shopping Basket.png" alt="">
            <?php echo __("Offers");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['pages_enabled'] && $_smarty_tpl->tpl_vars['system']->value['jobs_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "jobs") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/jobs">
           <img class="" src="https://waybillion.link/content/themes/default/images/home/icon2/Briefcase.png" alt="">
            <?php echo __("Jobs");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['forums_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "forums") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/forums">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"forums",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Forums");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['movies_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "movies") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/movies">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"movies",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Movies");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['games_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "games") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/games">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"games",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Games");?>

          </a>
        </li>
      <?php }?>

      <?php if ($_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled'] || $_smarty_tpl->tpl_vars['system']->value['developers_share_enabled']) {?>
        <li <?php if ($_smarty_tpl->tpl_vars['page']->value == "developers") {?>class="active" <?php }?>>
          <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/developers<?php if (!$_smarty_tpl->tpl_vars['system']->value['developers_apps_enabled']) {?>/share<?php }?>">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"developers",'class'=>"mr10",'width'=>"24px",'height'=>"24px"), 0, true);
?>
            <?php echo __("Developers");?>

          </a>
        </li>
      <?php }?>
      <!-- explore -->
    </ul>
  </div>
</div><?php }
}
