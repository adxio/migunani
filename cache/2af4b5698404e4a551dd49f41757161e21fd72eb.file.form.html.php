<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:35:55
         compiled from "application/views/login/member/form.html" */ ?>
<?php /*%%SmartyHeaderCode:1687769854540510eb63b9c1-51216119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2af4b5698404e4a551dd49f41757161e21fd72eb' => 
    array (
      0 => 'application/views/login/member/form.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1687769854540510eb63b9c1-51216119',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="loginBox-body">
    <?php if ((($tmp = @$_smarty_tpl->getVariable('login_st')->value)===null||$tmp==='' ? '' : $tmp)==''){?>
    <p><img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/notification-icon.png" alt="" />You are enter restricted area, <strong>Please Login</strong> First to acces this page !!</p>
    <form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/memberlogin/login_process');?>
" method="post">
        <input type="text" name="username" maxlength="30" />
        <input type="password" name="pass" maxlength="30" />
        <input class="button" type="submit" value="" name="save[login]" />
        <div class="clear"></div>
    </form>
    <?php }elseif((($tmp = @$_smarty_tpl->getVariable('login_st')->value)===null||$tmp==='' ? '' : $tmp)=='error'){?>
    <p><img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/notification-icon.png" alt="" /><strong>Username or password</strong> not found, Please Try Again or contact your <a href="mailto:administrator@mail.com">administrator</a></p>
    <form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/memberlogin/login_process');?>
" method="post">
        <input type="text" name="username" maxlength="30" />
        <input type="password" name="pass" maxlength="30" />
        <input class="button" type="submit" value="" name="save[login]" />
        <div class="clear"></div>
    </form>
    <?php }elseif((($tmp = @$_smarty_tpl->getVariable('login_st')->value)===null||$tmp==='' ? '' : $tmp)=='locked'){?>
    <p><img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/notification-icon.png" alt="" />You account has been <strong>locked</strong>, Please contact your <a href="mailto:administrator@mail.com">administrator</a> to activate your account</p>
    <form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/memberlogin/login_process');?>
" method="post">
        <input type="text" name="username" maxlength="30" />
        <input type="password" name="pass" maxlength="30" />
        <input class="button" type="submit" value="" name="save[login]" />
        <div class="clear"></div>
    </form>
    <?php }elseif((($tmp = @$_smarty_tpl->getVariable('login_st')->value)===null||$tmp==='' ? '' : $tmp)=='still'){?>
    <p>
        <img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/notification-icon.png" alt="" /> You are still login. 
        Click <a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/memberlogin/logout_process');?>
"><strong>logout</strong></a> to end your session or back to
        Click <a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('home/memberwelcome/');?>
"><strong style="color: #011B53;">dashboard</strong></a>
    </p>
    <?php }?>
</div>
<span class="loginBox-body-footer"></span>