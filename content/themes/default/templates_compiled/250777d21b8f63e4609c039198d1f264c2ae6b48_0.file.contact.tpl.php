<?php
/* Smarty version 4.2.0, created on 2022-10-17 12:58:54
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634d518e136dd6_40826162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '250777d21b8f63e4609c039198d1f264c2ae6b48' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/contact.tpl',
      1 => 1648004634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_head.tpl' => 1,
    'file:_header.tpl' => 1,
    'file:_sidebar.tpl' => 1,
    'file:_footer.tpl' => 1,
  ),
),false)) {
function content_634d518e136dd6_40826162 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!-- page header -->
<div class="page-header">
  <img class="floating-img d-none d-md-block" src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/themes/<?php echo $_smarty_tpl->tpl_vars['system']->value['theme'];?>
/images/headers/undraw_message_sent_1030.svg">
  <div class="circle-2"></div>
  <div class="circle-3"></div>
  <div class="inner">
    <h2><?php echo __("Contact Us");?>
</h2>
    <p class="text-xlg"><?php echo __("Contact us and we’ll get back to you as soon as possible");?>
</p>
  </div>
</div>
<!-- page header -->

<!-- page content -->
<div class="container offcanvas" style="margin-top: -25px;">
  <div class="row">

    <!-- side panel -->
    <div class="col-12 d-block d-md-none offcanvas-sidebar mt20">
      <?php $_smarty_tpl->_subTemplateRender('file:_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <!-- side panel -->

    <!-- content panel -->
    <div class="col-12 col-md-8 col-lg-6 col-xl-5 mx-md-auto offcanvas-mainbar">
      <div class="card px-4 py-4 shadow">
        <div class="card-body">
          <form class="js_ajax-forms" data-url="core/contact.php">
            <div class="form-group">
              <label class="form-control-label"><?php echo __("Name");?>
 <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
              <label class="form-control-label"><?php echo __("Email");?>
 <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email">
            </div>

            <div class="form-group">
              <label class="form-control-label"><?php echo __("Subject");?>
 <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="subject">
            </div>

            <div class="form-group">
              <label class="form-control-label"><?php echo __("Message");?>
 <span class="text-danger">*</span></label>
              <textarea class="form-control" name="message" rows="5"></textarea>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_enabled']) {?>
              <div class="form-group">
                <!-- reCAPTCHA -->
                <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js' async defer><?php echo '</script'; ?>
>
                <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['system']->value['reCAPTCHA_site_key'];?>
"></div>
                <!-- reCAPTCHA -->
              </div>
            <?php }?>

            <div class="form-group">
              <button type="submit" class="btn btn-md btn-block rounded-pill btn-primary">
                <i class="far fa-envelope-open mr10"></i><?php echo __("Send");?>

              </button>
            </div>

            <!-- success -->
            <div class="alert alert-success x-hidden"></div>
            <!-- success -->

            <!-- error -->
            <div class="alert alert-danger x-hidden"></div>
            <!-- error -->

          </form>
        </div>
      </div>
    </div>
    <!-- content panel -->
  </div>
</div>
<!-- page content -->

<?php $_smarty_tpl->_subTemplateRender('file:_footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
