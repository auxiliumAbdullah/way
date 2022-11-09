<?php
/* Smarty version 4.2.0, created on 2022-10-18 09:58:37
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/admin.notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634e78cddc4c49_06007067',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a5e192c9a09c9b09ac820ee2b097747866ba2eb' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/admin.notifications.tpl',
      1 => 1648004554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634e78cddc4c49_06007067 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
  <div class="card-header with-icon">
    <i class="fa fa-bell mr10"></i><?php echo __("Mass Notifications");?>

  </div>

  <!-- Mass Notifications -->
  <form class="js_ajax-forms" data-url="admin/notifications.php">
    <div class="card-body">
      <div class="alert alert-primary">
        <div class="icon">
          <i class="fa fa-bell fa-2x"></i>
        </div>
        <div class="text">
          <strong><?php echo __("Mass Notifications");?>
</strong><br>
          <?php echo __("Enable you to send notifications to all site users");?>
.<br>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("URL");?>

        </label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="url">
          <span class="form-text">
            <?php echo __("Notification link used when user clicks on the notification");?>

          </span>
        </div>
      </div>

      <div class="form-group form-row">
        <label class="col-md-3 form-control-label">
          <?php echo __("Message");?>

        </label>
        <div class="col-sm-9">
          <textarea class="form-control" rows="3" name="message"></textarea>
        </div>
      </div>

      <!-- success -->
      <div class="alert alert-success mb0 x-hidden"></div>
      <!-- success -->

      <!-- error -->
      <div class="alert alert-danger mb0 x-hidden"></div>
      <!-- error -->
    </div>
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-danger">
        <i class="fa fa-paper-plane mr10"></i><?php echo __("Send");?>

      </button>
    </div>
  </form>
  <!-- Mass Notifications -->

</div><?php }
}
