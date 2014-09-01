<?php /* Smarty version Smarty-3.0.7, created on 2014-08-31 18:22:44
         compiled from "application/views/base/public/document.html" */ ?>
<?php /*%%SmartyHeaderCode:6243404065402f774104c36-76865444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16351a1dec634170be2ab54f261e22c04a21917c' => 
    array (
      0 => 'application/views/base/public/document.html',
      1 => 1409478236,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6243404065402f774104c36-76865444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name='description' content='' />
        <meta name='keywords' content='' />
        <meta name='robots' content='index,follow' />
        <title>Migunani -  lan Mberkahi Tumraping Liyan</title>
        <link href="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
/resource/doc/images/favicon.png" rel="SHORTCUT ICON" />

        <!-- themes style -->
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('THEMESPATH')->value;?>
" media="screen" />
        <!-- other style -->
        <?php echo $_smarty_tpl->getVariable('LOAD_STYLE')->value;?>

        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!-- load javascript -->
        <?php echo $_smarty_tpl->getVariable('LOAD_JAVASCRIPT')->value;?>

        <!-- end of javascript	-->

        <script type="text/javascript">
            $(document).ready(function() {
                $("ul.sf-menu").supersubs({
                    minWidth: 13, // minimum width of sub-menus in em units
                    maxWidth: 27, // maximum width of sub-menus in em units
                    extraWidth: 1     // extra width can ensure lines don't sometimes turn over
                            // due to slight rounding differences and font-family
                }).superfish();  // call supersubs first, then superfish, so that subs are
                // not display:none when measuring. Call before initialising
                // containing tabs for same reason.
            });
        </script>
        <div id="common">
            <div id="container">
                <div id="header">
                    <div id="logo">
                        <a href="#"><img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/migunani-header.png">
                        </a>
                    </div>
                    <div id="nav">
                        <div id="sn"> 
                            <ul class="sn">
                                <li><a href="#"><span style="background-image:url(images/social/facebook.png)" class="icon-img"></span></a></li>
                                <li><a href="#"><span style="background-image:url(images/social/linkedin.png)" class="icon-img"></span></a></li>
                                <li><a href="#"><span style="background-image:url(images/social/flickr.png)" class="icon-img"></span></a></li>
                                <li><a href="#"><span style="background-image:url(images/social/yahoo.png)" class="icon-img"></span></a></li>
                                <li><a href="#"><span style="background-image:url(images/social/twitter.png)" class="icon-img"></span></a></li>
                            </ul>                
                        </div>
                        <ul class="sf-menu sf-js-enabled sf-shadow" id="topnav">
                            <li><a <?php if ($_smarty_tpl->getVariable('url')->value=='home'){?>class="current"<?php }?> href="<?php echo $_smarty_tpl->getVariable('home_url')->value;?>
">Home</a></li>
                            <li><a <?php if ($_smarty_tpl->getVariable('url')->value=='aboutus'){?>class="current"<?php }?>href="<?php echo $_smarty_tpl->getVariable('about_us_url')->value;?>
">About Us<span class="sf-sub-indicator"> »</span><span class="sf-sub-indicator"> »</span></a></li>
                            <li><a <?php if ($_smarty_tpl->getVariable('url')->value=='contact'){?>class="current"<?php }?>href="<?php echo $_smarty_tpl->getVariable('contact_url')->value;?>
">Contact Us</a></li>
                            <li><a class="sf-with-ul <?php if ($_smarty_tpl->getVariable('url')->value=='project'){?>current<?php }?>" href="<?php echo $_smarty_tpl->getVariable('project_url')->value;?>
">Project <span class="sf-sub-indicator"> »</span></a>
                                <ul style="float: none; width: 12em; display: none; visibility: hidden;">
                                    <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('project_cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
                                        <li style="white-space: normal; float: left; width: 100%;"><a style="float: none; width: auto;" href="<?php echo $_smarty_tpl->getVariable('project_url')->value;?>
/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['project']->value['cat_name'])===null||$tmp==='' ? '' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['project']->value['cat_name'])===null||$tmp==='' ? '' : $tmp);?>
</a></li>
                                    <?php }} ?>
                                </ul>
                            </li>                
                            <li><a <?php if ($_smarty_tpl->getVariable('url')->value=='personel'){?>class="current"<?php }?> href="<?php echo $_smarty_tpl->getVariable('personel_url')->value;?>
">Personnel</a></li>
                            <li><a class="sf-with-ul <?php if ($_smarty_tpl->getVariable('url')->value=='qualityofperformancecurrent'){?>current<?php }?>" href="<?php echo $_smarty_tpl->getVariable('quality_of_performance_url')->value;?>
">Quality Of Performance <span class="sf-sub-indicator"> »</span></a>
                                <ul style="float: none; width: 12em; display: none; visibility: hidden;">
                                    <li style="white-space: normal; float: left; width: 100%;"><a style="float: none; width: auto;" href="#">Mobile Data Collection</a></li>
                                    <li style="white-space: normal; float: left; width: 100%;"><a style="float: none; width: auto;" href="#">Collaborative Qualitative Data Analysis</a></li>
                                    <li style="white-space: normal; float: left; width: 100%;"><a style="float: none; width: auto;" href="#">Extensive Network of Researchers and Assistants</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('template_content')->value), $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php unset($_template);?>
                <div id="after-footer">
                    <div id="copyright">Copyright &copy; 2014 Migunani Mberkahi, All Right Reserved</div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>

    </body>
</html>
