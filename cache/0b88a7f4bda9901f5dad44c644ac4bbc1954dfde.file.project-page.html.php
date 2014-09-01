<?php /* Smarty version Smarty-3.0.7, created on 2014-09-01 23:59:26
         compiled from "application/views/public/project-page.html" */ ?>
<?php /*%%SmartyHeaderCode:795104723540497dea795c7-66936515%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b88a7f4bda9901f5dad44c644ac4bbc1954dfde' => 
    array (
      0 => 'application/views/public/project-page.html',
      1 => 1409587165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '795104723540497dea795c7-66936515',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/migunani/system/plugins/smarty/libs/plugins/modifier.date_format.php';
?><div id="content">
    <div id="main">
        <div class="positionleft" id="maincontent">
            <div class="post">
                <div class="imgpost">
                    <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/migunani-about-us.png">
                </div>
                <div class="clear"></div>
                <div class="entry-content">
                    <h2 class="posttitle"><a href="single.html"><?php echo $_smarty_tpl->getVariable('proj')->value['project_title'];?>
</a></h2>
                    <p><?php echo $_smarty_tpl->getVariable('proj')->value['project_content'];?>
</p>
                    <div class="entry-utility">
                        Posted by <a href="#">Admin </a>&nbsp;|&nbsp;on <?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('proj')->value['mdd'],'%d %B %Y');?>

                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="galcontent">
                <h2 class="posttitle">GALERY PROJECT</h2>
                <?php  $_smarty_tpl->tpl_vars['gal'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('galery')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['gal']->key => $_smarty_tpl->tpl_vars['gal']->value){
?>
                <a href="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/galery/project/<?php echo $_smarty_tpl->tpl_vars['gal']->value['gal_cat'];?>
/<?php echo $_smarty_tpl->tpl_vars['gal']->value['project_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['gal']->value['gal_nm'];?>
" class="galery-thumb-detail" rel="img_group" title="Tinjauan Lokasi Bencana Di Buayan (14).JPG">
                    <img width="115" height="90" (14).jpg="" buayan="" di="" bencana="" lokasi="" title="Tinjauan" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/galery/project/<?php echo $_smarty_tpl->tpl_vars['gal']->value['gal_cat'];?>
/<?php echo $_smarty_tpl->tpl_vars['gal']->value['project_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['gal']->value['gal_nm'];?>
">
                </a>
                <?php }} ?>
            </div>
        </div>
        <div id="sidebar">
            <ul>
                <li class="widget-container latestpost">
                    <h2 class="widget-title"><?php echo $_smarty_tpl->getVariable('catname')->value['cat_name'];?>
</h2>
                    <ul class="latestpost">
                        <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
?>
                            <li>
                                <span class="post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['cat']->value['mdd'],'%d %B %Y');?>
</span>
                                <span class="post-title"><a href="<?php echo $_smarty_tpl->getVariable('url_client')->value;?>
/<?php echo $_smarty_tpl->tpl_vars['cat']->value['project_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['project_title'];?>
</a></span>
                            </li>
                        <?php }} ?>
                    </ul>
                </li>
            </ul>
            <div class="clear"></div><!-- clear float --> 
        </div>
        <div class="clear"></div>
    </div>
</div>