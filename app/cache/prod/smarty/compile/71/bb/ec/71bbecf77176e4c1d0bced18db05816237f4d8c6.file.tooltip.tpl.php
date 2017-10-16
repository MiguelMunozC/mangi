<?php /* Smarty version Smarty-3.1.19, created on 2017-10-15 18:28:57
         compiled from "C:\xampp\htdocs\mangi\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140349468959e3d31974d392-26172416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71bbecf77176e4c1d0bced18db05816237f4d8c6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mangi\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1508099313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140349468959e3d31974d392-26172416',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e3d319750a90_30427346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e3d319750a90_30427346')) {function content_59e3d319750a90_30427346($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
