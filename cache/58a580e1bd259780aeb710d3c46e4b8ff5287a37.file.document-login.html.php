<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:35:55
         compiled from "application/views/base/member/document-login.html" */ ?>
<?php /*%%SmartyHeaderCode:1607805210540510eb5c6d74-64955185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58a580e1bd259780aeb710d3c46e4b8ff5287a37' => 
    array (
      0 => 'application/views/base/member/document-login.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607805210540510eb5c6d74-64955185',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <!-- head -->
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
        <meta name='description' content="<?php echo (($tmp = @$_smarty_tpl->getVariable('site')->value['meta_desc'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta name='keywords' content="<?php echo (($tmp = @$_smarty_tpl->getVariable('site')->value['meta_key'])===null||$tmp==='' ? '' : $tmp);?>
" />
        <meta name='robots' content='index,follow' />
        <title>Login - <?php echo (($tmp = @$_smarty_tpl->getVariable('site')->value['site_title'])===null||$tmp==='' ? '' : $tmp);?>
</title>
        <link href="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
/resource/doc/images/icon/favicon.ico" rel="SHORTCUT ICON" />
        <!-- themes style -->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('THEMESPATH')->value;?>
" media="screen" />
        <!-- other style -->
        <?php echo $_smarty_tpl->getVariable('LOAD_STYLE')->value;?>

    </head>
    <!-- body -->
    <body class="common">
        <!-- load javascript -->
        <?php echo $_smarty_tpl->getVariable('LOAD_JAVASCRIPT')->value;?>

        <!-- end of javascript	-->
        <!-- layout -->
        <div class="background" style="background-image: url('<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
/resource/doc/images/mandiri-background.jpg')">
            <div class="loginWrapper">
                <div class="login-logo">
                    <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
/resource/doc/images/mandiri-logo.png"/>
                </div>
                <div class="loginBox-head">
                    <h1><b>Cash Management</b> File System</h1>
                </div>
                <!-- content -->
                <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template_content')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                <!-- end of content -->
            </div>
        </div>
        <!-- end of layout	-->
    </body>
    <!-- end body -->
</html>