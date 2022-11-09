<?php
/* Smarty version 4.2.0, created on 2022-11-07 16:04:04
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_blogcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_63692c74b83188_19729467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0762ba4cc6766a18cd9562b3577c09d94906bfb1' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/__feeds_blogcategories.tpl',
      1 => 1667830542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63692c74b83188_19729467 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['_tpl']->value == "box") {?>
  <li class="col-md-6 col-lg-3">
    <div class="ui-box">
      <div class="img">
        <a href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/pages/pageview/<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_name'];
if ($_smarty_tpl->tpl_vars['_search']->value) {?>?ref=qs<?php }?>">
          <img alt="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_title'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_picture'];?>
" />
        </a>
      </div>
      <div class="mt10">
          
          		<ul class="article-categories clearfix">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs_categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <li>
                  <a class="article-category" href="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/blogs/category/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
                    <?php echo __($_smarty_tpl->tpl_vars['category']->value['category_name']);?>

                  </a>
                </li>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        
      </div>
      <div class="mt10">
        <?php if ($_smarty_tpl->tpl_vars['_page']->value['i_like']) {?>
          <button type="button" class="btn btn-sm btn-primary js_unlike-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
            <i class="fa fa-heart mr5"></i><?php echo __("Unlike");?>

          </button>
        <?php } else { ?>
          <button type="button" class="btn btn-sm btn-primary js_like-page" data-id="<?php echo $_smarty_tpl->tpl_vars['_page']->value['page_id'];?>
">
            <i class="fa fa-heart mr5"></i><?php echo __("Like");?>

          </button>
        <?php }?>
      </div>
    </div>
  </li>

<?php }
}
}
