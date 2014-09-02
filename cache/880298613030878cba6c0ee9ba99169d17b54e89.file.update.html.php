<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:31:55
         compiled from "application/views/masterdata/pagecategories/update.html" */ ?>
<?php /*%%SmartyHeaderCode:157778096554050ffb1d0d74-29827206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '880298613030878cba6c0ee9ba99169d17b54e89' => 
    array (
      0 => 'application/views/masterdata/pagecategories/update.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157778096554050ffb1d0d74-29827206',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="head-content">
    <h3>Page Categories</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">Update Data</a></li>
            <li><a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('masterdata/pagecategories/');?>
">List Data</a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_template = new Smarty_Internal_Template("base/templates/notification.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!-- end of notification template-->

<form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('masterdata/pagecategories/update_process');?>
" method="post">
    <input type="hidden" name="cat_id" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['cat_id'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Update Page Categories</th>
        </tr>
        <tr>
            <td width='25%'>Category Name *</td>
            <td width='75%'><input type="text" name="cat_name" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['cat_name'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>Category Description *</td>
            <td><input type="text" name="cat_description" maxlength="100" size="100" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['cat_description'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="save" value="Simpan"/> </td>
        </tr>
    </table>
</form>