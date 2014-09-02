<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 08:31:42
         compiled from "application/views/home/member/welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:209693913054050fee0356f8-79200921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74b60f4426d5f8882b291bef62a965da9059acac' => 
    array (
      0 => 'application/views/home/member/welcome.html',
      1 => 1409594386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209693913054050fee0356f8-79200921',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!-- javascript -->
<script type="text/javascript">
    $(function() {
        $(".checked-all").click(function(){
            var status = $(this).attr("checked");
            $(".check-one").attr('checked', status);
        });
    })
</script>
<div class="head-content">
    <h3>Welcome to Migunani 1.0</h3>
    <div class="clear"></div>
</div>
