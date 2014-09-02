<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:32:23
         compiled from "application/views/content/page/list_quality.html" */ ?>
<?php /*%%SmartyHeaderCode:21346357954051017d0e360-75193306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e07687560f1aaaa29b159b492b21c552fe5ab4b' => 
    array (
      0 => 'application/views/content/page/list_quality.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21346357954051017d0e360-75193306',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- javascript -->
<div class="head-content">
    <h3>Page - Quality Performance</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="#" class="active">List Quality</a></li>
            <li><a href="<?php ob_start();?><?php echo 'content/page/';?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('config')->value->site_url($_tmp1);?>
">List Category</a></li>
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
        <th width="40%">Page Name</th>
        <th width="40%">Page Desc</th>
        <th width="15%"></th>
    </tr>
    <tr>
        <td align='center'>1.</td>
        <td>Mobile Data Collection</td>
        <td></td>
        <td align="center">
            <a href="<?php ob_start();?><?php echo 'content/page/manage_quality/4/6';?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('config')->value->site_url($_tmp2);?>
" class="button-edit">Manage</a>
        </td>
    </tr>
    <tr class="blink-row">
        <td align='center'>2.</td>
        <td>Collaborative Qualitative Data Analysis</td>
        <td></td>
        <td align="center">
            <a href="<?php ob_start();?><?php echo 'content/page/manage_quality/5/6';?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('config')->value->site_url($_tmp3);?>
" class="button-edit">Manage</a>
        </td>
    </tr>
    <tr>
        <td align='center'>3.</td>
        <td>Extensive Network of Researchers and Assistants</td>
        <td></td>
        <td align="center">
            <a href="<?php ob_start();?><?php echo 'content/page/manage_quality/6/6';?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('config')->value->site_url($_tmp4);?>
" class="button-edit">Manage</a>
        </td>
    </tr>
</table>