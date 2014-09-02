<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:43:20
         compiled from "application/views/settings/profile/edit_member.html" */ ?>
<?php /*%%SmartyHeaderCode:1602463198540512a8618ee4-60998294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a4373ac41fe32f6f83ecf6753cfa09e5eeb244f' => 
    array (
      0 => 'application/views/settings/profile/edit_member.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1602463198540512a8618ee4-60998294',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="head-content">
    <h3>Edit Profil</h3>
    <div class="clear"></div>
</div>
<!-- notification template -->
<?php $_template = new Smarty_Internal_Template("base/templates/notification.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
<!-- end of notification template-->
<form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('settings/memberprofile/edit_process');?>
" method="post">
    <input type="hidden" name="user_name_old" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <input type="hidden" name="user_mail_old" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['user_mail'])===null||$tmp==='' ? '' : $tmp);?>
" />
    <table class="table-input" width="100%">
        <tr class="headrow">
            <th colspan="2">Edit Profil</th>
        </tr>
        <tr>
            <td width="25%">Email *</td>
            <td width="75%"><input type="text" name="user_mail" maxlength="50" size="30" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['user_mail'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td>User Name *</td>
            <td><input type="text" name="user_name" maxlength="50" size="20" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['user_name'])===null||$tmp==='' ? '' : $tmp);?>
" /> </td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="user_pass" maxlength="50" size="20" value="<?php echo (($tmp = @$_smarty_tpl->getVariable('result')->value['user_pass'])===null||$tmp==='' ? '' : $tmp);?>
" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="save" value="Simpan" /> </td>
        </tr>
    </table>
</form>