<?php /* Smarty version Smarty-3.1.7, created on 2016-07-11 00:23:20
         compiled from "/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/DashBoardContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2863201485782e6f82f5450-78739263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9b87d5a2c3d819dc833e3b379e1cbae976694bb' => 
    array (
      0 => '/var/www/html/crm/includes/runtime/../../layouts/vlayout/modules/Vtiger/dashboards/DashBoardContents.tpl',
      1 => 1426863274,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2863201485782e6f82f5450-78739263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGETS' => 0,
    'WIDGET' => 0,
    'WIDGETDOMID' => 0,
    'COLUMNS' => 0,
    'ROW' => 0,
    'ROWCOUNT' => 0,
    'COLCOUNT' => 0,
    'CURRENT_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5782e6f8409bb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5782e6f8409bb')) {function content_5782e6f8409bb($_smarty_tpl) {?>
<div class="gridster"><ul><?php $_smarty_tpl->tpl_vars['COLUMNS'] = new Smarty_variable(2, null, 0);?><?php $_smarty_tpl->tpl_vars['ROW'] = new Smarty_variable(1, null, 0);?><?php  $_smarty_tpl->tpl_vars['WIDGET'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['WIDGET']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['WIDGETS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->key => $_smarty_tpl->tpl_vars['WIDGET']->value){
$_smarty_tpl->tpl_vars['WIDGET']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['count']['index']++;
?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='MiniList'){?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable(($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')), null, 0);?><?php }elseif($_smarty_tpl->tpl_vars['WIDGET']->value->getName()=='Notebook'){?><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable(($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')), null, 0);?><?php }?><li id="<?php echo $_smarty_tpl->tpl_vars['WIDGETDOMID']->value;?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%$_smarty_tpl->tpl_vars['COLUMNS']->value==0&&$_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']!=0){?> <?php $_smarty_tpl->tpl_vars['ROWCOUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['ROW']->value+1, null, 0);?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROWCOUNT']->value);?>
" <?php }else{ ?> data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROW']->value);?>
" <?php }?><?php $_smarty_tpl->tpl_vars['COLCOUNT'] = new Smarty_variable(($_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index']%$_smarty_tpl->tpl_vars['COLUMNS']->value)+1, null, 0);?> data-col="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
" data-sizex="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-sizey="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"class="dashboardWidget dashboardWidget_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['count']['index'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
" data-mode="open" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
"></li><?php } ?></ul><input type="hidden" id=row value="<?php echo $_smarty_tpl->tpl_vars['ROWCOUNT']->value;?>
" /><input type="hidden" id=col value="<?php echo $_smarty_tpl->tpl_vars['COLCOUNT']->value;?>
" /><input type="hidden" id="userDateFormat" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('date_format');?>
" /></div><?php }} ?>