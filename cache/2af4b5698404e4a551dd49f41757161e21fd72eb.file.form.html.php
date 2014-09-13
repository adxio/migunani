<?php /* Smarty version Smarty-3.0.7, created on 2014-09-10 10:38:35
         compiled from "application/views/login/member/form.html" */ ?>
<?php /*%%SmartyHeaderCode:1504044788540fb9abc6ad28-28391819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2af4b5698404e4a551dd49f41757161e21fd72eb' => 
    array (
      0 => 'application/views/login/member/form.html',
      1 => 1410304304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1504044788540fb9abc6ad28-28391819',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="loginBox-body">
    <?php if ((($tmp = @$_smarty_tpl->getVariable('login_st')->value)===null||$tmp==='' ? '' : $tmp)==''){?>
    <p>
        <img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/notification-icon.png" alt="" />You are enter restricted area, <strong>Please Login</strong> First to acces this page !!
    </p>
    <form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/memberlogin/login_process');?>
" method="post">
        <label for="aid_username">Username :</label>
        <input type="text" name="username" maxlength="30" />
        <br />
        <label for="aid_password">Password :</label>
        <input type="password" name="pass" maxlength="30" />
        <br />
        <label> </label>
        <input class="button-login" type="submit" value="" name="save[login]" />
    </form>
    <?php }elseif((($tmp = @$_smarty_tpl->getVariable('login_st')->value)===null||$tmp==='' ? '' : $tmp)=='error'){?>
    <p>
        <img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/notification-icon.png" alt="" /><strong>Username or password</strong> not found, Please Try Again or contact your administrator
    </p>
    <form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/memberlogin/login_process');?>
" method="post">
        <label for="aid_username">Username :</label>
        <input type="text" name="username" maxlength="30" />
        <br />
        <label for="aid_password">Password :</label>
        <input type="password" name="pass" maxlength="30" />
        <br />
        <label> </label>
        <input class="button-login" type="submit" value="" name="save[login]" />
    </form>
    <?php }elseif((($tmp = @$_smarty_tpl->getVariable('login_st')->value)===null||$tmp==='' ? '' : $tmp)=='locked'){?>
    <p>
        <img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/notification-icon.png" alt="" />You account has been <strong>locked</strong>, Please contact your administrator to activate your account
    </p>
    <form action="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/memberlogin/login_process');?>
" method="post">
        <label for="aid_username">Username :</label>
        <input type="text" name="username" maxlength="30" />
        <br />
        <label for="aid_password">Password :</label>
        <input type="password" name="pass" maxlength="30" />
        <br />
        <label> </label>
        <input class="button-login" type="submit" value="" name="save[login]" />
    </form>
    <?php }elseif((($tmp = @$_smarty_tpl->getVariable('login_st')->value)===null||$tmp==='' ? '' : $tmp)=='still'){?>
    <p>
        <img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/notification-icon.png" alt="" /> You are still login. 
        Back to <a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('home/memberwelcome');?>
">administrator menu</a><br />Or <a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('login/adminlogin/logout_process');?>
"><strong>logout</strong></a> to end your session
    </p>
    <?php }?>
</div>