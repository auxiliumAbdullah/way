<?php
/* Smarty version 4.2.0, created on 2022-11-08 20:56:33
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_pagesbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636a52010dfd61_81662334',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb04feb7f1e69afbd04c7039b56066ebe769f3dc' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_pagesbox.tpl',
      1 => 1667912167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a52010dfd61_81662334 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- pro pages -->
              <?php if ($_smarty_tpl->tpl_vars['suggested_pages']->value) {?>
              <div class="card bg-gradient-teal border-0" data-aos="fade-up"
     data-aos-duration="1000">
                <div class="card-header ptb20 bg-transparent border-bottom-0">
                  <?php if ($_smarty_tpl->tpl_vars['system']->value['packages_enabled'] && !$_smarty_tpl->tpl_vars['user']->value->_data['user_subscribed']) {?>
                    <div class="float-right">
                      <small><a class="text-white text-underline" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/packages"><?php echo __("Upgrade");?>
</a></small>
                    </div>
                  <?php }?>
                  <h6 class="pb0"><i class="fa fa-flag-checkered mr5"></i> <?php echo __("Pro Pages");?>
</h6>
                </div>
                <div class="card-body pt0 plr5">
                  <div class="pro-box-wrapper <?php if (count($_smarty_tpl->tpl_vars['suggested_pages']->value) > 3) {?>js_slick<?php } else { ?>full-opacity<?php }?>">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['suggested_pages']->value, '_page');
$_smarty_tpl->tpl_vars['_page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['_page']->value) {
$_smarty_tpl->tpl_vars['_page']->do_else = false;
?>
                      <a class="user-box text-white" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/view/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];?>
">
                        <img alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" />
                        <div class="newname" title="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
">
                          <span><?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
</span>
                        </div>
                      </a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </div>
                </div>
              </div>
            <?php }?> 
            <!-- pro pages --><?php }
}
