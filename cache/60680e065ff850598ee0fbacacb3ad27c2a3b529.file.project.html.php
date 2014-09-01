<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 01:19:52
         compiled from "application/views/public/project.html" */ ?>
<?php /*%%SmartyHeaderCode:570283225404aab8c4c522-90327529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60680e065ff850598ee0fbacacb3ad27c2a3b529' => 
    array (
      0 => 'application/views/public/project.html',
      1 => 1409591855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '570283225404aab8c4c522-90327529',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<script type="text/javascript">
    $(document).ready(function() {
        $("ul.sf-menu").supersubs({
            minWidth: 13, // minimum width of sub-menus in em units
            maxWidth: 14, // maximum width of sub-menus in em units
            extraWidth: 1     // extra width can ensure lines don't sometimes turn over
                    // due to slight rounding differences and font-family
        }).superfish();  // call supersubs first, then superfish, so that subs are
        // not display:none when measuring. Call before initialising
        // containing tabs for same reason.

        $(".toggle_container").hide();
        $("h2.trigger").click(function() {
            $(this).toggleClass("active").next().slideToggle("slow");
        });
    });
</script>

<div class="useimage" id="before-content">
    <div class="line-shadow"></div>
    <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/page-header2.png">    
    <div class="title-and-desc ">
        <h1 class="pagetitle">Project</h1><div class="pagedesc"><span>Migunani lan mberkahi tumraping liyan <br />
                (Helping and Blessing others)</span></div>    
    </div><!-- title and desc -->
</div>
<div id="content">
    <div id="main">
        <div class="full" id="maincontent">
            <h2>This is our best project</h2>
            <p>Sed lacus nisi, faucibus ut pharetra a, rutrum vitae ligula. Pellentesque ultricies consectetur mauris eu consequat. Vivamus eu ante erat, et hendrerit ante. Aenean lacinia aliquam tempus. Cum sociis natoque penatibus.</p>
            <div class="clear"></div><!-- clear float --> 
        </div>
        <div class="search">
            <table width="100%" class="table-search">
                <tbody>
                    <tr class="headrow">
                        <th colspan="3" >Search Project</th> 
                    </tr>
                    <tr>
                        <td width="150px" class="txt-label-search"><b>Project Type</b></td>
                        <td>
                            <select style="width:150px;" name="project_type" class="search_by">
                                <?php  $_smarty_tpl->tpl_vars['project_cat'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs_project_cat')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project_cat']->key => $_smarty_tpl->tpl_vars['project_cat']->value){
?>
                                    <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['project_cat']->value['cat_id'])===null||$tmp==='' ? '' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['project_cat']->value['cat_name'])===null||$tmp==='' ? '' : $tmp);?>
</option>
                                <?php }} ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" class="txt-label-search"><b>Client</b></td>
                        <td>
                            <select style="width:150px;" name="client" class="search_by">
                                <?php  $_smarty_tpl->tpl_vars['client'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs_client')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['client']->key => $_smarty_tpl->tpl_vars['client']->value){
?>
                                    <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['client']->value['client_id'])===null||$tmp==='' ? '' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['client']->value['client_name'])===null||$tmp==='' ? '' : $tmp);?>
</option>
                                <?php }} ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td width="150px" class="txt-label-search"><b>Year</b></td>
                        <td>
                            <select style="width:150px;"name="year" class="sort_by">
                                <?php  $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs_year')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['year']->key => $_smarty_tpl->tpl_vars['year']->value){
?>
                                    <option value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['year']->value['year'])===null||$tmp==='' ? '' : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['year']->value['year'])===null||$tmp==='' ? '' : $tmp);?>
</option>
                                <?php }} ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <input type="submit" value="Search" id="submit_btn" class="button" name="submit">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="full" id="maincontent">
            <div id="toggle">
                <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs_project')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value){
?>
                <h2 class="trigger"><span><?php echo (($tmp = @$_smarty_tpl->tpl_vars['project']->value['project_title'])===null||$tmp==='' ? '' : $tmp);?>
</span></h2>
                <div class="toggle_container">
                    <div>
                        <p><?php echo (($tmp = @$_smarty_tpl->tpl_vars['project']->value['project_content'])===null||$tmp==='' ? '' : $tmp);?>
</p>
                    </div>
                    <div class="more">
                        <a href='<?php echo $_smarty_tpl->getVariable('url_client')->value;?>
/<?php echo (($tmp = @$_smarty_tpl->tpl_vars['project']->value['project_id'])===null||$tmp==='' ? '' : $tmp);?>
'>Readmore</a>
                    </div>
                </div>
                <?php }} ?>
            </div>
        </div>
        <div class="clear"></div>
    </div>

</div>