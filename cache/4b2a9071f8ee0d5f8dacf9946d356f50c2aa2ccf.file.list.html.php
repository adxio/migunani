<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:32:04
         compiled from "application/views/masterdata/client/list.html" */ ?>
<?php /*%%SmartyHeaderCode:1648696657540510045667e9-49515914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2a9071f8ee0d5f8dacf9946d356f50c2aa2ccf' => 
    array (
      0 => 'application/views/masterdata/client/list.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648696657540510045667e9-49515914',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- javascript -->
<script type="text/javascript">
    $(document).ready(function() {
        var data_id = '';
        $("#dialog-confirm").hide();
        $("#dialog-confirm").dialog({
            autoOpen: false,
            draggable: false,
            height: 200,
            width: 300,
            resizable: false,
            modal: true,
            buttons: {
                "Delete": function() {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo $_smarty_tpl->getVariable('config')->value->site_url('masterdata/client/delete/');?>
",
                        data: 'id=' + data_id,
                        cache: false,
                        success: function(data) {
                            if (data) {
                                alert("Data berhasil dihapus!");
                                window.location.reload();
                            }
                        }
                    })
                    $(this).dialog("close");
                },
                Cancel: function() {
                    $(this).dialog("close");
                }}
        });
        $(".del").click(function() {
            data_id = $(this).attr("href");
            $("#dialog-confirm").dialog("open");
        });
    })
</script>
<div id="dialog-confirm" title="Delete the data?">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>These items will be permanently deleted and cannot be recovered. Are you sure?</p>
</div>
<div class="head-content">
    <h3>Client</h3>
    <div class="head-content-nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->getVariable('config')->value->site_url('masterdata/client/add');?>
"><img src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/icon/add-icon.png" alt="" /> Add Data</a></li>
            <li><a href="#" class="active">List Data</a></li>
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
        <th width="20%">Client Name</th>
        <th width="40%">Client Desc</th>
        <th width="15%">Client Logo</th>
        <th width="20%"></th>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['result'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['no'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('rs_id')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['result']->key => $_smarty_tpl->tpl_vars['result']->value){
 $_smarty_tpl->tpl_vars['no']->value = $_smarty_tpl->tpl_vars['result']->key;
?>
    <tr <?php if (($_smarty_tpl->tpl_vars['no']->value%2)!=0){?>class="blink-row"<?php }?>>
        <td align='center'><?php echo $_smarty_tpl->tpl_vars['no']->value+1;?>
.</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['client_name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['result']->value['client_desc'];?>
</td>
        <td align='center'><img width='60px' src='<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/client/<?php echo $_smarty_tpl->tpl_vars['result']->value['client_logo'];?>
'/></td>
        <td align="center">
            <a href="<?php ob_start();?><?php echo ('masterdata/client/update/').($_smarty_tpl->tpl_vars['result']->value['client_id']);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getVariable('config')->value->site_url($_tmp1);?>
" class="button-edit">Update</a>
            <a onclick="return false" href="<?php echo $_smarty_tpl->tpl_vars['result']->value['client_id'];?>
" class="button-hapus del">Delete</a>
        </td>
    </tr>
    <?php }} else { ?>
    <tr>
        <td colspan="5">Empty</td>
    </tr>
    <?php } ?>
</table>