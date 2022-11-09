<?php
/* Smarty version 4.2.0, created on 2022-10-17 05:55:43
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.group.publisher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_634cee5f078f54_54074050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5123eef954dc706fbd853a2fb5558496ebf28bce' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.group.publisher.tpl',
      1 => 1648004594,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__categories.recursive_options.tpl' => 1,
    'file:__custom_fields.tpl' => 1,
  ),
),false)) {
function content_634cee5f078f54_54074050 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fa fa-users mr10" style="color: #2b53a4;"></i><?php echo __("Create New Group");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<form class="js_ajax-forms" data-url="pages_groups_events/create.php?type=group&do=create">
  <div class="modal-body">
    <div class="form-group">
      <label class="form-control-label" for="title"><?php echo __("Name Your Group");?>
</label>
      <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="form-group">
      <label class="form-control-label" for="username"><?php echo __("Group Username");?>
</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text d-none d-sm-block"><?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/groups/</span>
        </div>
        <input type="text" class="form-control" name="username" id="username">
      </div>
      <span class="form-text">
        <?php echo __("Can only contain alphanumeric characters (A–Z, 0–9) and periods ('.')");?>

      </span>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="privacy"><?php echo __("Select Privacy");?>
</label>
      <select class="form-control selectpicker" name="privacy">
        <option value="public" data-content="<div class='option'><div class='icon'><i class='fa fa-globe fa-2x'></i></div><div class='text'><b><?php echo __("Public Group");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Anyone can see the group, its members and their posts");?>
.</span>
                </div></div>"><?php echo __("Public Group");?>
</option>
        <option value="closed" data-content="<div class='option'><div class='icon'><i class='fa fa-unlock-alt fa-2x'></i></div><div class='text'><b><?php echo __("Closed Group");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only members can see posts");?>
.</span>
                </div></div>"><?php echo __("Closed Group");?>
</option>
        <option value="secret" data-content="<div class='option'><div class='icon'><i class='fa fa-lock fa-2x'></i></div><div class='text'><b><?php echo __("Secret Group");?>
</b><span class='d-none d-md-inline'><br><?php echo __("Only members can find the group and see posts");?>
.</span>
                </div></div>"><?php echo __("Secret Group");?>
</option>
      </select>
    </div>
    <div class="form-group">
      <label class="form-control-label" for="category"><?php echo __("Category");?>
</label>
      <select class="form-control" name="category" id="category">
        <option><?php echo __("Select Category");?>
</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
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
    <div class="form-group">
      <label class="form-control-label" for="description"><?php echo __("About");?>
</label>
      <textarea class="form-control" name="description"></textarea>
    </div>
    <!-- custom fields -->
    <?php if ($_smarty_tpl->tpl_vars['custom_fields']->value) {?>
      <?php $_smarty_tpl->_subTemplateRender('file:__custom_fields.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('_custom_fields'=>$_smarty_tpl->tpl_vars['custom_fields']->value,'_registration'=>true), 0, false);
?>
    <?php }?>
    <!-- custom fields -->
    <!-- error -->
    <div class="alert alert-danger mb0 mt10 x-hidden"></div>
    <!-- error -->
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo __("Cancel");?>
</button>
    <button type="submit" class="btn btn-primary"><?php echo __("Create");?>
</button>
  </div>
</form><?php }
}
