<?php
/* Smarty version 4.2.0, created on 2022-11-07 05:22:39
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_post_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6368961fd38f52_79213655',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffc9891961599bec20592893831c6a44faf200cc' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_post_view.tpl',
      1 => 1667798552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_post.body.view.tpl' => 1,
    'file:__reaction_emojis.tpl' => 3,
    'file:__svg_icons.tpl' => 3,
    'file:__feeds_post.comments.tpl' => 1,
  ),
),false)) {
function content_6368961fd38f52_79213655 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['standalone']->value) {?><li class="img_shape<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['type'];?>
"><?php }?>
<style>
.img_shape1 .post-media-image div {
    width: 710px;
    height: 710px;
}
.img_shape2 .post-media-image div {
    width: 710px;
}
</style>
  <!-- post -->
  <div class="post 
                <?php if ($_smarty_tpl->tpl_vars['_get']->value == "posts_profile" && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['post']->value['author_id'] && ($_smarty_tpl->tpl_vars['post']->value['is_hidden'] || $_smarty_tpl->tpl_vars['post']->value['is_anonymous'])) {?>is_hidden<?php }?> 
                <?php if ($_smarty_tpl->tpl_vars['boosted']->value) {?>boosted<?php }?> 
                <?php if (($_smarty_tpl->tpl_vars['post']->value['in_group'] && !$_smarty_tpl->tpl_vars['post']->value['group_approved']) || ($_smarty_tpl->tpl_vars['post']->value['in_event'] && !$_smarty_tpl->tpl_vars['post']->value['event_approved'])) {?>pending<?php }?>
            " data-id="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">

    <?php if (($_smarty_tpl->tpl_vars['post']->value['in_group'] && !$_smarty_tpl->tpl_vars['post']->value['group_approved']) || ($_smarty_tpl->tpl_vars['post']->value['in_event'] && !$_smarty_tpl->tpl_vars['post']->value['event_approved'])) {?>
      <div class="pending-icon" data-toggle="tooltip" title="<?php echo __("Pending Post");?>
">
        <i class="fa fa-clock"></i>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['standalone']->value && $_smarty_tpl->tpl_vars['pinned']->value) {?>
      <div class="pin-icon" data-toggle="tooltip" title="<?php echo __("Pinned Post");?>
">
        <i class="fa fa-bookmark"></i>
      </div>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['standalone']->value && $_smarty_tpl->tpl_vars['boosted']->value) {?>
      <div class="boosted-icon" data-toggle="tooltip" title="<?php echo __("Promoted");?>
">
        <i class="fa fa-bullhorn"></i>
      </div>
    <?php }?>

    <!-- memory post -->
    <?php if ($_smarty_tpl->tpl_vars['_get']->value == "memories") {?>
      <div class="post-memory-header">
        <span class="js_moment" data-time="<?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</span>
      </div>
    <?php }?>
    <!-- memory post -->

    <!-- post body -->
    <div class="post-body">

      <!-- post top alert -->
      <?php if ($_smarty_tpl->tpl_vars['_get']->value == "posts_profile" && $_smarty_tpl->tpl_vars['user']->value->_data['user_id'] == $_smarty_tpl->tpl_vars['post']->value['author_id'] && ($_smarty_tpl->tpl_vars['post']->value['is_hidden'] || $_smarty_tpl->tpl_vars['post']->value['is_anonymous'])) {?>
        <div class="post-top-alert"><?php echo __("Only you can see this post");?>
</div>
      <?php }?>
      <!-- post top alert -->

      <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.body.view.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_post'=>$_smarty_tpl->tpl_vars['post']->value,'_shared'=>false), 0, false);
?>

      <!-- post stats -->
      <div class="post-stats clearfix">
        <!-- reactions stats -->
        <?php if ($_smarty_tpl->tpl_vars['post']->value['reactions_total_count'] > 0) {?>
          <div class="float-left mr10" data-toggle="modal" data-url="posts/who_reacts.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
            <div class="reactions-stats">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['post']->value['reactions'], 'reaction_count', false, 'reaction_type');
$_smarty_tpl->tpl_vars['reaction_count']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction_type']->value => $_smarty_tpl->tpl_vars['reaction_count']->value) {
$_smarty_tpl->tpl_vars['reaction_count']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['reaction_count']->value > 0) {?>
                  <div class="reactions-stats-item">
                    <div class="inline-emoji no_animation">
                      <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction_type']->value), 0, true);
?>
                    </div>
                  </div>
                <?php }?>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <!-- reactions count -->
              <span>
                <?php echo $_smarty_tpl->tpl_vars['post']->value['reactions_total_count'];?>

              </span>
              <!-- reactions count -->
            </div>
          </div>
        <?php }?>
        <!-- reactions stats -->

        <!-- comments & shares & views & plays & donations -->
        <span class="float-right">
          <!-- comments -->
          <span class="pointer js_comments-toggle">
            <i class="fa fa-comments"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['comments'];?>
 <?php echo __("Comments");?>

          </span>
          <!-- comments -->

          <!-- shares -->
          <span class="pointer ml10 <?php if ($_smarty_tpl->tpl_vars['post']->value['shares'] == 0) {?>x-hidden<?php }?>" data-toggle="modal" data-url="posts/who_shares.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
            <i class="fa fa-share"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['shares'];?>
 <?php echo __("Shares");?>

          </span>
          <!-- shares -->

          <!-- views -->
          <?php if ($_smarty_tpl->tpl_vars['system']->value['posts_views_enabled']) {?>
            <span class="pointer ml10">
              <i class="fa fa-eye"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['views'];?>
 <?php echo __("Views");?>

            </span>
          <?php }?>
          <!-- views -->

          <!-- video views -->
          <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "video") {?>
            <span class="pointer ml10">
              <i class="fas fa-play-circle mr5"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['video']['views'];?>

            </span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "shared" && $_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == "video") {?>
            <span class="pointer ml10">
              <i class="fas fa-play-circle mr5"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['video']['views'];?>

            </span>
          <?php }?>
          <!-- video views -->

          <!-- audio views -->
          <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "audio") {?>
            <span class="pointer ml10">
              <i class="fas fa-play-circle mr5"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['audio']['views'];?>

            </span>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "shared" && $_smarty_tpl->tpl_vars['post']->value['origin']['post_type'] == "audio") {?>
            <span class="pointer ml10">
              <i class="fas fa-play-circle mr5"></i><?php echo $_smarty_tpl->tpl_vars['post']->value['origin']['audio']['views'];?>

            </span>
          <?php }?>
          <!-- audio views -->

          <!-- donations -->
          <?php if ($_smarty_tpl->tpl_vars['post']->value['post_type'] == "funding") {?>
            <span class="pointer ml10" data-toggle="modal" data-url="posts/who_donates.php?post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
              <i class="fa fa-hand-holding-usd"></i> <?php echo $_smarty_tpl->tpl_vars['post']->value['funding']['total_donations'];?>
 <?php echo __("Donations");?>

            </span>
          <?php }?>
          <!-- donations -->
        </span>
        <!-- comments & shares & views & plays & donations -->
      </div>
      <!-- post stats -->

      <!-- post actions -->
      <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in && $_smarty_tpl->tpl_vars['_get']->value != "posts_information") {?>
        <div class="post-actions clearfix">
          <!-- reactions -->
          <div class="action-btn unselectable reactions-wrapper <?php if ($_smarty_tpl->tpl_vars['post']->value['i_react']) {?>js_unreact-post<?php }?>" data-reaction="<?php echo $_smarty_tpl->tpl_vars['post']->value['i_reaction'];?>
">
            <!-- reaction-btn -->
            <div class="reaction-btn">
              <?php if (!$_smarty_tpl->tpl_vars['post']->value['i_react']) {?>
                <div class="reaction-btn-icon">
                  <i class="far fa-smile fa-lg fa-fw"></i>
                </div>
                <span class="reaction-btn-name"><?php echo __("React");?>
</span>
              <?php } else { ?>
                <div class="reaction-btn-icon">
                  <div class="inline-emoji no_animation">
                    <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['post']->value['i_reaction']), 0, true);
?>
                  </div>
                </div>
                <span class="reaction-btn-name <?php echo $_smarty_tpl->tpl_vars['post']->value['i_reaction_details']['color'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['i_reaction_details']['title'];?>
</span>
              <?php }?>
            </div>
            <!-- reaction-btn -->

            <!-- reactions-container -->
            <div class="reactions-container">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reactions']->value, 'reaction');
$_smarty_tpl->tpl_vars['reaction']->iteration = 0;
$_smarty_tpl->tpl_vars['reaction']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reaction']->value) {
$_smarty_tpl->tpl_vars['reaction']->do_else = false;
$_smarty_tpl->tpl_vars['reaction']->iteration++;
$__foreach_reaction_1_saved = $_smarty_tpl->tpl_vars['reaction'];
?>
                <div class="reactions_item reaction reaction-<?php echo $_smarty_tpl->tpl_vars['reaction']->iteration;?>
 js_react-post" data-reaction="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['reaction'];?>
" data-reaction-color="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['color'];?>
" data-title="<?php echo $_smarty_tpl->tpl_vars['reaction']->value['title'];?>
">
                  <?php $_smarty_tpl->_subTemplateRender('file:__reaction_emojis.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_reaction'=>$_smarty_tpl->tpl_vars['reaction']->value['reaction']), 0, true);
?>
                </div>
              <?php
$_smarty_tpl->tpl_vars['reaction'] = $__foreach_reaction_1_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <!-- reactions-container -->
          </div>
          <!-- reactions -->

          <!-- comment -->
          <div class="action-btn js_comment <?php if ($_smarty_tpl->tpl_vars['post']->value['comments_disabled']) {?>x-hidden<?php }?>">
            <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"comment",'width'=>"16px",'height'=>"16px",'class'=>"mr5"), 0, false);
?>
            <span><?php echo __("Comment");?>
</span>
          </div>
          <!-- comment -->

          <!-- share -->
          <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public" || ($_smarty_tpl->tpl_vars['post']->value['in_group'] && $_smarty_tpl->tpl_vars['post']->value['group_privacy'] == "public") || ($_smarty_tpl->tpl_vars['post']->value['in_event'] && $_smarty_tpl->tpl_vars['post']->value['event_privacy'] == "public")) {?>
            <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'width'=>"16px",'height'=>"16px",'class'=>"mr5"), 0, true);
?>
              <span><?php echo __("Share");?>
</span>
            </div>
          <?php }?>
          <!-- share -->
		  <?php if ($_smarty_tpl->tpl_vars['_post']->value['i_save']) {?>
            <div href="#" class="action-btn pointer js_unsave-post">
              <div class="action no-desc">
                <i class="fa fa-bookmark fa-fw"></i> <span><?php echo __("Unsave Post");?>
</span>
              </div>
            </div>
          <?php } else { ?>
            <div class="action-btn pointer js_save-post">
              <div class="action no-desc">
                <i class="fa fa-bookmark fa-fw"></i> <span><?php echo __("Save Post");?>
</span>
              </div>
            </div>
          <?php }?>
        </div>
      <?php }?>
      <!-- post actions -->

    </div>
    <!-- post body -->

    <!-- post footer -->
    <?php if ($_smarty_tpl->tpl_vars['user']->value->_logged_in) {?>
      <div class="post-footer <?php if (!$_smarty_tpl->tpl_vars['standalone']->value) {?>x-hidden<?php }?>">
        <!-- comments -->
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_post.comments.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <!-- comments -->
      </div>
    <?php } else { ?>
      <div class="post-footer">
        <div class="post-comments">
          <div class="pb10">
            <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/signin"><?php echo __("Please log in to like and comment!");?>
</a>
          </div>
		  <?php if ($_smarty_tpl->tpl_vars['post']->value['privacy'] == "public" || ($_smarty_tpl->tpl_vars['post']->value['in_group'] && $_smarty_tpl->tpl_vars['post']->value['group_privacy'] == "public") || ($_smarty_tpl->tpl_vars['post']->value['in_event'] && $_smarty_tpl->tpl_vars['post']->value['event_privacy'] == "public")) {?>
            <div class="action-btn" data-toggle="modal" data-url="posts/share.php?do=create&post_id=<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
              <?php $_smarty_tpl->_subTemplateRender('file:__svg_icons.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('icon'=>"share",'width'=>"16px",'height'=>"16px",'class'=>"mr5"), 0, true);
?>
              <b><?php echo __("Share");?>
</b>
            </div>
          <?php }?>
        </div>
      </div>
    <?php }?>
    <!-- post footer -->

    <!-- post approval -->
    <?php if (($_smarty_tpl->tpl_vars['post']->value['in_group'] && $_smarty_tpl->tpl_vars['post']->value['is_group_admin'] && !$_smarty_tpl->tpl_vars['post']->value['group_approved']) || ($_smarty_tpl->tpl_vars['post']->value['in_event'] && $_smarty_tpl->tpl_vars['post']->value['is_event_admin'] && !$_smarty_tpl->tpl_vars['post']->value['event_approved'])) {?>
      <div class="post-approval">
        <button class="btn btn-success btn-sm mr5 js_approve-post"><i class="fa fa-check mr5"></i><?php echo __("Approve");?>
</button>
        <button class="btn btn-danger btn-sm js_delete-post"><i class="fa fa-times mr5"></i><?php echo __("Decline");?>
</button>
      </div>
    <?php }?>
    <!-- post approval -->

  </div>
  <!-- post -->
  <?php if (!$_smarty_tpl->tpl_vars['standalone']->value) {?>
</li><?php }
}
}
