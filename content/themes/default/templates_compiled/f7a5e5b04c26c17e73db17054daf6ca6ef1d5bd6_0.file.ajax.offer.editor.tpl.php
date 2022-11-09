<?php
/* Smarty version 4.2.0, created on 2022-10-19 04:15:06
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.offer.editor.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634f79caa629b2_38820097',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7a5e5b04c26c17e73db17054daf6ca6ef1d5bd6' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.offer.editor.tpl',
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
function content_634f79caa629b2_38820097 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fas fa-tag mr5"></i><?php echo __("Edit Offer");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="posts/edit.php">
  <div class="modal-body">
    <div class="row">
      <!-- discount type -->
      <div class="form-group col-md-6">
        <label class="form-control-label"><?php echo __("Type");?>
</label>
        <select id="js_discount-type" name="discount_type" class="form-control">
          <option value="discount_percent" <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] == "discount_percent") {?>selected<?php }?>><?php echo __("Discount Percent");?>
</option>
          <option value="discount_amount" <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] == "discount_amount") {?>selected<?php }?>><?php echo __("Discount Amount");?>
</option>
          <option value="buy_get_discount" <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] == "buy_get_discount") {?>selected<?php }?>><?php echo __("Buy X Get Y Discount");?>
</option>
          <option value="spend_get_off" <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] == "spend_get_off") {?>selected<?php }?>><?php echo __("Spend X Get Y Off");?>
</option>
          <option value="free_shipping" <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] == "free_shipping") {?>selected<?php }?>><?php echo __("Free Shipping");?>
</option>
        </select>
      </div>
      <!-- discount type -->
      <!-- discount percent -->
      <div id="js_discount-percent" class="form-group col-md-6 <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] != "discount_percent") {?>x-hidden<?php }?>">
        <label class="form-control-label"><?php echo __("Discount Percent");?>
</label>
        <select name="discount_percent" class="form-control">
          <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 99+1 - (1) : 1-(99)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_percent'] == $_smarty_tpl->tpl_vars['i']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
%</option>
          <?php }
}
?>
        </select>
      </div>
      <!-- discount percent -->
      <!-- discount amount -->
      <div id="js_discount-amount" class="form-group col-md-6 <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] != "discount_amount") {?>x-hidden<?php }?>">
        <label class="form-control-label"><?php echo __("Discount Amount");?>
</label>
        <div class="input-group">
          <?php if ($_smarty_tpl->tpl_vars['system']->value['system_currency_dir'] == "left") {?>
            <div class="input-group-prepend">
              <span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_currency_symbol'];?>
</span>
            </div>
          <?php }?>
          <input name="discount_amount" type="text" class="form-control" placeholder="0.00" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['offer']['discount_amount'];?>
">
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
    <div id="js_buy-get-discount" <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] != "buy_get_discount") {?>class="x-hidden" <?php }?>>
      <div class="row">
        <div class="form-group col-md-6">
          <label class="form-control-label"><?php echo __("Buy");?>
</label>
          <input name="buy_x" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['offer']['buy_x'];?>
">
          <span class="form-text">
            <?php echo __("Enter numric value (Example: 5)");?>

          </span>
        </div>
        <div class="form-group col-md-6">
          <label class="form-control-label"><?php echo __("Get");?>
</label>
          <input name="get_y" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['offer']['get_y'];?>
">
          <span class="form-text">
            <?php echo __("Enter numric value (Example: 2)");?>

          </span>
        </div>
      </div>
    </div>
    <!-- buy get discount -->
    <!-- spend get off -->
    <div id="js_spend-get-off" <?php if ($_smarty_tpl->tpl_vars['post']->value['offer']['discount_type'] != "spend_get_off") {?>class="x-hidden" <?php }?>>
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
            <input name="spend_x" type="text" class="form-control" placeholder="0.00" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['offer']['spend_x'];?>
">
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
            <input name="amount_y" type="text" class="form-control" placeholder="0.00" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['offer']['amount_y'];?>
">
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
          <input type='text' class="form-control datetimepicker-input" data-target="#end_date" name="end_date" value="<?php echo get_datetime($_smarty_tpl->tpl_vars['post']->value['offer']['end_date']);?>
" />
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
            <?php $_smarty_tpl->_subTemplateRender('file:__categories.recursive_options.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('data_category'=>$_smarty_tpl->tpl_vars['post']->value['offer']['category_id']), 0, true);
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
      <input name="title" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['offer']['title'];?>
">
    </div>
    <!-- title -->
    <!-- description -->
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Description");?>
</label>
      <textarea name="description" rows="5" dir="auto" class="form-control"><?php echo $_smarty_tpl->tpl_vars['post']->value['text_plain'];?>
</textarea>
    </div>
    <!-- description -->
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value['basic']) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value['basic'],'_registration'=>false), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- thumbnail -->
    <div class="form-group">
      <label class="form-control-label"><?php echo __("Thumbnail");?>
</label>
      <div class="x-image" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['system']->value['system_uploads'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['offer']['thumbnail'];?>
')">
        <div class="x-image-loader">
          <div class="progress x-progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <i class="fa fa-camera fa-lg js_x-uploader" data-handle="x-image"></i>
        <input type="hidden" class="js_x-image-input" name="thumbnail" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['offer']['thumbnail'];?>
">
      </div>
    </div>
    <!-- thumbnail -->
    <!-- error -->
    <div class="alert alert-danger mb0 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <input type="hidden" name="handle" value="offer">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['post_id'];?>
">
    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
    <button type="submit" class="btn btn-primary"><?php echo __("Save");?>
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
  })
<?php echo '</script'; ?>
><?php }
}
