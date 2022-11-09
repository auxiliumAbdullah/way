<?php
/* Smarty version 4.2.0, created on 2022-11-09 21:53:11
  from '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/greeting.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_636bb0c768a412_64807793',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8842cb0d613d2ba055494c070e6bc06fc0f5811' => 
    array (
      0 => '/home/u246756914/domains/waybillion.link/public_html/content/themes/default/templates/greeting.tpl',
      1 => 1668000892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_636bb0c768a412_64807793 (Smarty_Internal_Template $_smarty_tpl) {
?> <!-- Gereeting -->
 
 
  <div class="row align-items-center">
    <div class="col">
       <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/uploads/photos/icon1.png"/>
         <strong>Good <?php echo $_smarty_tpl->tpl_vars['gretting']->value;
if ($_smarty_tpl->tpl_vars['user']->value->_data['name']) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</strong>  
    </div>
    <div class="col-md-auto">
      <img src="http://openweathermap.org/img/wn/<?php echo $_smarty_tpl->tpl_vars['get_weather']->value['icon'];?>
@2x.png" style="width:25%"><?php echo $_smarty_tpl->tpl_vars['get_weather']->value['temp'];?>
<span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['get_weather']->value['desc'];?>
</span>
    </div>
    <div class="col-md-auto" padding:left ='20px'>
       <?php echo $_smarty_tpl->tpl_vars['current_time']->value;?>

    </div>
  </div>
     
<!-- end Gereeting -->

 <!-- Gereeting -->
   <!-- <div class="alert bg-white banner_bottom_wrapper">
      <div class="left_wraper">
         <img src="<?php echo $_smarty_tpl->tpl_vars['system']->value['system_url'];?>
/content/uploads/photos/icon1.png"/>
         <strong>Good <?php echo $_smarty_tpl->tpl_vars['gretting']->value;
if ($_smarty_tpl->tpl_vars['user']->value->_data['name']) {?>,<?php }?> <?php echo $_smarty_tpl->tpl_vars['user']->value->_data['name'];?>
</strong>
      </div>
      <div class="right_wraper">
          <div class="weather_wrapper"><img src="http://openweathermap.org/img/wn/<?php echo $_smarty_tpl->tpl_vars['get_weather']->value['icon'];?>
@2x.png"><?php echo $_smarty_tpl->tpl_vars['get_weather']->value['temp'];?>
<span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['get_weather']->value['desc'];?>
</span></div>
          <?php echo $_smarty_tpl->tpl_vars['current_time']->value;?>

      </div>
    </div> -->
<!-- end Gereeting --><?php }
}
