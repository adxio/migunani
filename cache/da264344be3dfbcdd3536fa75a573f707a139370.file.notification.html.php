<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:31:47
         compiled from "application/views/base/templates/notification.html" */ ?>
<?php /*%%SmartyHeaderCode:121725113954050ff3090a50-62652470%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da264344be3dfbcdd3536fa75a573f707a139370' => 
    array (
      0 => 'application/views/base/templates/notification.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121725113954050ff3090a50-62652470',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/migunani/system/plugins/smarty/libs/plugins/modifier.capitalize.php';
?><!-- notification template -->
<?php if ((($tmp = @$_smarty_tpl->getVariable('notification_header')->value)===null||$tmp==='' ? '' : $tmp)=="error"){?>
<div class="notification red">
    <p><strong><?php echo smarty_modifier_capitalize($_smarty_tpl->getVariable('notification_header')->value);?>
 :</strong> <?php echo $_smarty_tpl->getVariable('notification_message')->value;?>
 </p>
    <?php echo $_smarty_tpl->getVariable('notification_error')->value;?>

</div>
<?php }elseif((($tmp = @$_smarty_tpl->getVariable('notification_header')->value)===null||$tmp==='' ? '' : $tmp)=="success"){?>
<div class="notification green">
    <p><strong><?php echo smarty_modifier_capitalize($_smarty_tpl->getVariable('notification_header')->value);?>
 :</strong> <?php echo $_smarty_tpl->getVariable('notification_message')->value;?>
 </p>
    <?php echo $_smarty_tpl->getVariable('notification_error')->value;?>

</div>
<?php }else{ ?>
<?php }?>
<!-- End of notification template -->

