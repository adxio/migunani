<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:31:42
         compiled from "application/views/base/member/sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:141814888754050fee00c3c7-49980231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36b3058ebe1adc0cab4903ead3464fa7da0438ff' => 
    array (
      0 => 'application/views/base/member/sidebar.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141814888754050fee00c3c7-49980231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="side-info">
    <img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/user-image.png" alt="" />
    <p><b>Selamat Datang</b></p>
    <p><?php echo $_smarty_tpl->getVariable('com_user')->value['role_nm'];?>
</p>
    <p><a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('settings/memberprofile/');?>
">Edit Profile</a><a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/memberlogin/logout_process');?>
">Logout</a></p>
    <div class="clear"></div>
</div>
<?php echo (($tmp = @$_smarty_tpl->getVariable('list_sidebar_nav')->value)===null||$tmp==='' ? '' : $tmp);?>
