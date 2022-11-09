<?php
/* Smarty version 4.2.0, created on 2022-10-20 05:49:21
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.job.candidates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_6350e161cfa670_86391637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '584969ed699d70273088dcb08e62614b78c78346' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/ajax.job.candidates.tpl',
      1 => 1648004596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:__feeds_candidate.tpl' => 1,
    'file:_no_data.tpl' => 1,
  ),
),false)) {
function content_6350e161cfa670_86391637 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-header">
  <h6 class="modal-title">
    <i class="fas fa-briefcase mr5"></i><?php echo __("Job Candidates");?>

  </h6>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <?php if ($_smarty_tpl->tpl_vars['candidates']->value) {?>
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['candidates']->value, 'candidate');
$_smarty_tpl->tpl_vars['candidate']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['candidate']->value) {
$_smarty_tpl->tpl_vars['candidate']->do_else = false;
?>
        <?php $_smarty_tpl->_subTemplateRender('file:__feeds_candidate.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <?php if ($_smarty_tpl->tpl_vars['candidates_count']->value >= $_smarty_tpl->tpl_vars['system']->value['max_results']) {?>
      <!-- see-more -->
      <div class="alert alert-info see-more js_see-more" data-get="job_candidates" data-id="<?php echo $_smarty_tpl->tpl_vars['post_id']->value;?>
">
        <span><?php echo __("See More");?>
</span>
        <div class="loader loader_small x-hidden"></div>
      </div>
      <!-- see-more -->
    <?php }?>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender('file:_no_data.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php }?>
</div><?php }
}
