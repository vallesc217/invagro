<?php /* Smarty version Smarty-3.1.7, created on 2020-09-22 15:23:01
         compiled from "/home/invagroc/crm.invagrocontinentalvet.com/includes/runtime/../../layouts/v7/modules/Vtiger/ModuleSearchResults.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2594985175f6a16d5c8d158-23284494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74878d113f5e45f8ae84dbae886c8a6fded75143' => 
    array (
      0 => '/home/invagroc/crm.invagrocontinentalvet.com/includes/runtime/../../layouts/v7/modules/Vtiger/ModuleSearchResults.tpl',
      1 => 1572927986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2594985175f6a16d5c8d158-23284494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'PAGE_NUMBER' => 0,
    'RECORDS_COUNT' => 0,
    'PAGING_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5f6a16d5cee2e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5f6a16d5cee2e')) {function content_5f6a16d5cee2e($_smarty_tpl) {?>

<div class="listViewPageDiv"><div class="row"><div class="col-lg-12"><div class="col-lg-8"><h4 class="searchModuleHeader"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h4><input type="hidden" name="search_module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/></div><div class="col-lg-4" style="margin-top: 10px;"><div class="pull-right" ><input type="hidden" name="pageNumber" value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
"><input type="hidden" name="recordsCount" value="<?php echo $_smarty_tpl->tpl_vars['RECORDS_COUNT']->value;?>
"><span class="pageNumbersText" style="padding-right:5px"><?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
 <?php echo vtranslate('LBL_to',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
 <?php echo vtranslate('LBL_OF',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['RECORDS_COUNT']->value;?>
</span><a href="#" class="previousPageButton navigationButton verticalAlignMiddle" data-start='<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange()-$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
' <?php if (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists()){?>disabled=""<?php }?>><i class="fa fa-caret-left"></i>&nbsp;&nbsp;</a><a href="#" class="nextPageButton navigationButton verticalAlignMiddle" data-start='<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
' <?php if (!$_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists()){?> disabled=""<?php }?>><i class="fa fa-caret-right"></i></a></div></div></div></div><div class="row"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ListViewContents.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('SEARCH_MODE_RESULTS'=>true), 0);?>
</div></div><?php }} ?>