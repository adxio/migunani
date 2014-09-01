<?php /* Smarty version Smarty-3.0.7, created on 2014-09-01 23:32:54
         compiled from "application/views/public/home.html" */ ?>
<?php /*%%SmartyHeaderCode:942905907540491a64be0a8-75639909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da1d4c6201d9118e185b4909c4ce742b0f7f9a0d' => 
    array (
      0 => 'application/views/public/home.html',
      1 => 1409473498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '942905907540491a64be0a8-75639909',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/migunani/system/plugins/smarty/libs/plugins/modifier.date_format.php';
?><script type="text/javascript">
    $(document).ready(function() {
        $(".box_skitter_large").skitter({
            width_skitter: 340,
            height_skitter: 960,
            animation: "random",
            interval: 3000,
            numbers: false,
            numbers_align: "right",
            hideTools: true,
            controls: false,
            focus: false,
            focus_position: true,
            width_label: 'auto',
            enable_navigation_keys: true,
            progressbar: false
        });
    });
</script>
<div id="slider-image">
    <div class="box_skitter box_skitter_large">
        <ul style="display: none;">
            <li>
                <a href=""><img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/welcome-image.jpg" alt=""></a>
                <div class="label_text">
                    <span>Migunani lan mberkahi tumraping liyan <br />
                        (Helping and Blessing others)</span>
                </div>
            </li>
            <li>
                <a href=""><img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/welcome-image2.jpg" alt=""></a>
                <div class="label_text">
                    <span>Migunani lan mberkahi tumraping liyan <br />
                        (Helping and Blessing others)</span>
                </div>
            </li>
        </ul>
    </div>
    <div id="top-opacity-slider"></div>
</div>
<div id="content">
    <div id="main">
        <div class="positionleft" id="maincontent">
            <h3>Welcome to Our Company</h3>
            <p style='text-align: justify;'><span>Migunani is a non- profit company formally established in February 2011. It intends to produce knowledge to support quality policy development. The core staff members have been working together in research and data collection over the past seven years. Through its dedication to high-quality, objective research, and analysis, Migunani is engaged with its clients to create knowledge, options, and solutions that will endure.  </span></p>
            <div class="hr"></div>
            <h3>About Us</h3>
            <p style='text-align: justify;'>
                <span>Migunani is located in Yogyakarta, Indonesia and currently employs a number of researchers with expertise in survey design and logistics using mobile phone (Magpi, ODK) and  computer programming.  A number of qualitative designs apply Nvivo for data editing and analysis.</span> 
            </p>
            <p style='text-align: justify;'>
                <span>Migunani has been collaborating with domestic and international researchers and has quality experience in conducting studies in Indonesia. Migunani encourages the participation of researchers with various backgrounds to facilitate inter- disciplinary research. Its core staff members have diverse backgrounds in the area of disaster management, public policy, health, education, gender, psychology, and economics.  </span>
            </p>
            <div class="hr"></div>
            <h3>What We Do</h3>
            <div class="image-home">
                <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/index1.png">
                <div class="title" style="width: auto; display: block;">
                    <span>Monitoring & Evaluation Studies</span>
                </div>
            </div>
            <div class="image-home">
                <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/index2.png">
                <div class="title" style="width: auto; display: block;">
                    <span>Monitoring & Evaluation Training</span>
                </div>
            </div>
            <div class="image-home">
                <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/index3.png">
                <div class="title" style="width: auto; display: block;">
                    <span>Work on independent research</span>
                </div>
            </div>
            <div class="image-home">
                <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/index4.png">
                <div class="title" style="width: auto; display: block;">
                    <span>Grants for Researchers</span>
                </div>
            </div>
            <!--                            <div class="one_half firstcols">
                                            <div class="imgframe alignleft" style="margin-left:20px;"><a href="#"><img alt="" src="../doc/images/index1.png"></a></div>
                                            <h4 class="titlecenter"><a href="#">Monitoring & Evaluation Studies</a></h4>
                                            <p><span class="textcenter">Mauris interdum imperdiet lorem vitae placerat. </span><br>
                                            </p></div>
                                        <div class="one_half lastcols">
                                            <div class="imgframe alignleft" style="margin-left:20px;"><a href="#"><img alt="" src="../doc/images/index2.png"></a></div>
                                            <h4 class="titlecenter"><a href="#">Monitoring & Evaluation Training</a></h4>
                                            <p><span class="textcenter">Mauris interdum imperdiet lorem vitae placerat. </span><br>
                                            </p>
                                        </div>
                                        <div class="one_half firstcols">
                                            <div class="imgframe alignleft" style="margin-left:20px;"><a href="#"><img alt="" src="../doc/images/index3.png"></a></div>
                                            <h4 class="titlecenter"><a href="#">Independent Research</a></h4>
                                            <p><span class="textcenter">Mauris interdum imperdiet lorem vitae placerat. </span><br>
                                            </p>
                                        </div>
                                        <div class="one_half lastcols">
                                            <div class="imgframe alignleft" style="margin-left:20px;"><a href="#"><img alt="" src="../doc/images/index4.png"></a></div>
                                            <h4 class="titlecenter"><a href="#">Grants for Researchers</a></h4>
                                            <p><span class="textcenter">Mauris interdum imperdiet lorem vitae placerat. </span><br>
                                            </p>
                                        </div>-->

            <div class="clear"></div><!-- clear float --> 
        </div>
        <div id="sidebar">
            <ul>
                <li class="widget-container client">
                    <h2 class="widget-title">Our Client</h2>
                    <p>
                        <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs_client')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
?>
                        <a href='<?php echo $_smarty_tpl->getVariable('url_client')->value;?>
/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['client']->value['client_name'])===null||$tmp==='' ? '' : $tmp);?>
'><img class="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/client/<?php echo $_smarty_tpl->tpl_vars['client']->value['client_logo'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['client']->value['client_name'];?>
"/></a>
                        <?php }} ?>
                    </p>
                    <div class="clear"></div>
                </li>
                <li class="widget-container latestpost">
                    <h2 class="widget-title">Lastest Project</h2>
                    <ul class="latestpost">
                        <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('latest_project')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
                        <li>
                            <span class="post-date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['project']->value['start_date'],'%d %B %Y');?>
</span>
                            <span class="post-title"><a href="<?php echo $_smarty_tpl->getVariable('url_project')->value;?>
/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['project']->value['project_id'])===null||$tmp==='' ? '' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['project']->value['project_title'])===null||$tmp==='' ? '' : $tmp);?>
</a></span>
                        </li>
                        <?php }} ?>
                    </ul>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>


