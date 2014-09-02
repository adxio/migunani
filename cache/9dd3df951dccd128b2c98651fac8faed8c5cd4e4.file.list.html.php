<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:32:33
         compiled from "application/views/content/project/list.html" */ ?>
<?php /*%%SmartyHeaderCode:144962528254051021006366-87202776%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dd3df951dccd128b2c98651fac8faed8c5cd4e4' => 
    array (
      0 => 'application/views/content/project/list.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144962528254051021006366-87202776',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- javascript -->
<div class="head-content">
    <h3>Project</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">List Category</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_template = new Smarty_Internal_Template("base/templates/notification.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!-- end of notification template-->
<table class="table-view" width="100%">
    <tr>
        <th width="5%">No</th>
        <th width="20%">Project Categories</th>
        <th width="60%">Project Desc</th>
        <th width="15%"></th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['no'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs_id')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
 $_smarty_tpl->tpl_vars['no']->value = $_smarty_tpl->tpl_vars['result']->key;
?>
    <tr <?php if (($_smarty_tpl->tpl_vars['no']->value%2)!=0){?>class="blink-row"<?php }?>>
        <td align='center'><?php echo $_smarty_tpl->tpl_vars['no']->value+1;?>
.</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['cat_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['cat_description'];?>
</td>
        <td align="center">
            <a href="<?php ob_start();?><?php echo ('content/project/manage/').($_smarty_tpl->tpl_vars['result']->value['cat_id']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('config')->value->site_url($_tmp1);?>
" class="button-edit">Manage</a>
        </td>
    </tr>
    <?php }} else { ?>
    <tr>
        <td colspan="4">Empty</td>
    </tr>
    <?php } ?>
</table>