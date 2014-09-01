<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 01:20:51
         compiled from "application/views/public/qualityofperformance.html" */ ?>
<?php /*%%SmartyHeaderCode:9210263845404aaf30498c0-46212228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e435d392c8bb03d1d496423998b13876ec95010' => 
    array (
      0 => 'application/views/public/qualityofperformance.html',
      1 => 1408211860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9210263845404aaf30498c0-46212228',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/migunani/system/plugins/smarty/libs/plugins/modifier.date_format.php';
?><div class="useimage" id="before-content">
    <div class="line-shadow"></div>
    <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/page-header3.png">   
    <div class="title-and-desc ">
        <h1 class="pagetitle">Quality Of Performance</h1><div class="pagedesc">How We Work ?</div>    
    </div><!-- title and desc -->
</div>
<div id="content">
    <div id="main">
        <div class="full" id="maincontent">
            <?php  $_smarty_tpl->tpl_vars['quality'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs_quality')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['quality']->key => $_smarty_tpl->tpl_vars['quality']->value){
?>
            <div class="post">
                <div class="imgframe">
                    <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/post<?php echo $_smarty_tpl->tpl_vars['quality']->value['page_id'];?>
.png">
                </div>
                <div class="entry-content">
                    <h2 class="posttitle"><a href="#"><?php echo $_smarty_tpl->tpl_vars['quality']->value['page_title'];?>
</a></h2>
                    <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['quality']->value['page_content'])===null||$tmp==='' ? '' : $tmp);?>
</p>

                    <div class="quality">
                        Posted by <a href="#">Admin </a>&nbsp;|&nbsp;on <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['quality']->value['mdd'],'%d %B %Y');?>
 &nbsp;|&nbsp;<a class="more" href="#">Read More</a>
                    </div>
                </div>
                <div class="hr"></div>
                <div class="clear"></div>
            </div>
            <?php }} ?>
        </div>
        <div class="clear"></div>
    </div>
</div>