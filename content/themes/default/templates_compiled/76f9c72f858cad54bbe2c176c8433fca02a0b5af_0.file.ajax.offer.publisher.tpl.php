<?php
/* Smarty version 4.2.0, created on 2022-10-18 11:36:27
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.offer.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634e8fbb9b4d79_55509460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76f9c72f858cad54bbe2c176c8433fca02a0b5af' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.offer.publisher.tpl',
      1 => 1648004614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_634e8fbb9b4d79_55509460 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fas fa-tag mr5"></i><?php echo __("Create New Offer");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="posts/offer.php?do=publish">
  <div class="modal-body">
    <div class="row">
      <!-- discount type -->
      <div class="form-group col-md-6">
        <label class="form-control-label"><?php echo __("Type");?>
</label>
        <select id="js_discount-type" name="discount_type" class="form-control">
          <option value="discount_percent"><?php echo __("Discount Percent");?>
</option>
          <option value="discount_amount"><?php echo __("Discount Amount");?>
</option>
          <option value="buy_get_discount"><?php echo __("Buy X Get Y Discount");?>
</option>
          <option value="spend_get_off"><?php echo __("Spend X Get Y Off");?>
</option>
          <option value="free_shipping"><?php echo __("Free Shipping");?>
</option>
        </select>
      </div>
      <!-- discount type -->
      <!-- discount percent -->
      <div id="js_discount-percent" class="form-group col-md-6">
        <label class="form-control-label"><?php echo __("Discount Percent");?>
</label>
        <select name="discount_percent" class="form-control">
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 99+1 - (1) : 1-(99)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
%</option>
          <?php }
}
?>
        </select>
      </div>
      <!-- discount percent -->
      <!-- discount amount -->
      <div id="js_discount-amount" class="form-group col-md-6 x-hidden">
        <label class="form-control-label"><?php echo __("Discount Amount");?>
</label>
        <div class="input-group">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "left") {?>
            <div class="input-group-prepend">
              <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
            </div>
          <?php }?>
          <div class="input-group-prepend">
            <div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</div>
          </div>
          <input name="discount_amount" type="text" class="form-control" placeholder="0.00">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "right") {?>
            <div class="input-group-append">
              <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
            </div>
          <?php }?>
        </div>
      </div>
      <!-- discount amount -->
    </div>
    <!-- buy get discount -->
    <div id="js_buy-get-discount" class="x-hidden">
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-control-label"><?php echo __("Buy");?>
</label>
          <input name="buy_x" type="text" class="form-control">
          <span class="form-text">
            <?php echo __("Enter numric value (Example: 5)");?>

          </span>
        </div>
        <div class="form-group col-md-6">
          <label class="form-control-label"><?php echo __("Get");?>
</label>
          <input name="get_y" type="text" class="form-control">
          <span class="form-text">
            <?php echo __("Enter numric value (Example: 2)");?>

          </span>
        </div>
      </div>
    </div>
    <!-- buy get discount -->
    <!-- spend get off -->
    <div id="js_spend-get-off" class="x-hidden">
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-control-label"><?php echo __("Spend");?>
</label>
          <div class="input-group">
            <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "left") {?>
              <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
              </div>
            <?php }?>
            <input name="spend_x" type="text" class="form-control" placeholder="0.00">
            <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "right") {?>
              <div class="input-group-append">
                <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="form-group col-md-6">
          <label class="form-control-label"><?php echo __("Amount Off");?>
</label>
          <div class="input-group">
            <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "left") {?>
              <div class="input-group-prepend">
                <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
              </div>
            <?php }?>
            <input name="amount_y" type="text" class="form-control" placeholder="0.00">
            <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "right") {?>
              <div class="input-group-append">
                <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
    <!-- spend get off -->
    <div class="row">
      <!-- end date -->
      <div class="form-group col-md-6">
        <label class="form-control-label"><?php echo __("End Date");?>
</label>
        <div class="input-group date js_datetimepicker" id="end_date" data-target-input="nearest">
          <input type='text' class="form-control datetimepicker-input" data-target="#end_date" name="end_date" />
          <div class="input-group-append" data-target="#end_date" data-toggle="datetimepicker">
            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
          </div>
        </div>
      </div>
      <!-- end date -->
      <!-- category -->
      <div class="form-group col-md-6">
        <label class="form-control-label"><?php echo __("Category");?>
</label>
        <select name="category" class="form-control">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['offers_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
            <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
      </div>
      <!-- category -->
    </div>
    <!-- title -->
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Discounted Items and/or Services");?>
</label>
      <input name="title" type="text" class="form-control">
    </div>
    <!-- title -->
    <!-- description -->
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"></textarea>
    </div>
    <!-- description -->
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- thumbnail -->
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Thumbnail");?>
</label>
      <div class="x-image">
        <div class="x-image-loader">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
        <input type="hidden" class="js_x-image-input" name="thumbnail" value="">
      </div>
    </div>
    <!-- thumbnail -->
    <!-- error -->
    <div class="alert alert-danger mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="page_id" value="<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
">
    <button type="submit" class="btn btn-primary"><?php echo __("Publish");?>
</button>
  </div>
</form>

<?php echo '<script'; ?>
>
  $(function() {
    /* handle offer input dependencies */
    $('#js_discount-type').on('change', function() {
      switch ($(this).val()) {
        case "discount_percent":
          $("#js_discount-percent").show();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;

        case "discount_amount":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").show();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;

        case "buy_get_discount":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").show();
          $("#js_spend-get-off").hide();
          break;

        case "spend_get_off":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").show();
          break;

        case "free_shipping":
          $("#js_discount-percent").hide();
          $("#js_discount-amount").hide();
          $("#js_buy-get-discount").hide();
          $("#js_spend-get-off").hide();
          break;
      }
    });
  });
<?php echo '</script'; ?>
><?php }
}
