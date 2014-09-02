<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:32:12
         compiled from "application/views/masterdata/client/add.html" */ ?>
<?php /*%%SmartyHeaderCode:20765975335405100cc23244-99433661%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cef20e2d73a96c28b9c62a4a2b4a51743dc50a8f' => 
    array (
      0 => 'application/views/masterdata/client/add.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20765975335405100cc23244-99433661',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="head-content">
    <h3>Project Categories</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active"><img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/add-icon.png" alt="" />Add Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('masterdata/client/');?>
">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_template = new Smarty_Internal_Template("base/templates/notification.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('masterdata/client/add_process');?>
" method="post"  enctype="multipart/form-data">
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Add Data</th>
        </tr>
        <tr>
            <td width='25%'>Client Name *</td>
            <td width='75%'><input type="text" name="client_name" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['client_name'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Client Description *</td>
            <td><input type="text" name="client_desc" maxlength="100" size="100" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['client_desc'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td>Client Logo</td>
            <td><input type="file" name="client_logo"/> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Simpan"/> </td>
        </tr>
    </table>
</form>