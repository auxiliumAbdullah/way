<?php
/* Smarty version 4.2.0, created on 2022-11-08 07:33:16
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636a063c344937_65087720',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc4ca944c8a2ca43b1a61f347ac0e4d1cdde19a6' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/_tabs.tpl',
      1 => 1667892789,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636a063c344937_65087720 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/u246756914/domains/waybillion.link/public_html/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="tab-outer-box-1" data-aos-duration="1000">
<div class="tab" data-aos="fade-up" data-aos-duration="1000">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Popular</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Discover</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Trending</button>
</div> 

<div id="London" class="tabcontent">
<?php if ($_smarty_tpl->tpl_vars['popular']->value) {?>
    <ul>
      <!-- posts -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['popular']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
	  <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['article']['title']) && !empty($_smarty_tpl->tpl_vars['post']->value['article']['text_snippet'])) {?>
       <li data-aos="fade-up" data-aos-duration="1000"> <a href="https://waybillion.link/blogs/<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['title_url'];?>
" ><h5><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['article']['title'],90);?>
</h5></a> <div class="post-time"><i class="fa fa-clock pr5"></i><span class="js_moment pr10" data-time="<?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</span></div>
       <a href="https://waybillion.link/blogs/<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['title_url'];?>
" ><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['article']['text_snippet'],90);?>
</a></li>
	    <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </ul>
<?php }?>
</div>

<div id="Paris" class="tabcontent">
<?php if ($_smarty_tpl->tpl_vars['discover']->value) {?>
    <ul>
      <!-- posts -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['discover']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
		 <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['article']['title']) && !empty($_smarty_tpl->tpl_vars['post']->value['article']['text_snippet'])) {?>
       <li data-aos="fade-up" data-aos-duration="1000"> <a href="https://waybillion.link/blogs/<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['title_url'];?>
" ><h5><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['article']['title'],90);?>
</h5></a> <div class="post-time"><i class="fa fa-clock pr5"></i><span class="js_moment pr10" data-time="<?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['time'];?>
</span></div>
       <a href="https://waybillion.link/blogs/<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['post_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['article']['title_url'];?>
" ><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value['article']['text_snippet'],90);?>
</a></li>
	    <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	  </ul>
	  
<?php }?>
</div> 

<div id="Tokyo" class="tabcontent"> 
</div>
 <?php if ($_smarty_tpl->tpl_vars['trending']->value) {?>
    <ul>
      <!-- posts -->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trending']->value, 'post');
$_smarty_tpl->tpl_vars['post']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->do_else = false;
?>
       <li data-aos="fade-up" data-aos-duration="1000"><a href="https://waybillion.link/search/hashtag/<?php echo $_smarty_tpl->tpl_vars['post']->value['hashtag'];?>
" ><h5>#<?php echo $_smarty_tpl->tpl_vars['post']->value['hashtag'];?>
</h5></a></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	 </ul> 
<?php }?>
</div>
<?php echo '<script'; ?>
>
document.getElementById("defaultOpen").click();
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
<?php echo '</script'; ?>
>



   

<?php }
}
