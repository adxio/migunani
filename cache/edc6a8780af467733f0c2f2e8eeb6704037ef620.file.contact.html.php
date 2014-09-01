<?php /* Smarty version Smarty-3.0.7, created on 2014-09-02 07:23:53
         compiled from "application/views/public/contact.html" */ ?>
<?php /*%%SmartyHeaderCode:498756088540500094200a6-94780595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edc6a8780af467733f0c2f2e8eeb6704037ef620' => 
    array (
      0 => 'application/views/public/contact.html',
      1 => 1409613830,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '498756088540500094200a6-94780595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="useimage" id="before-content">
    <div class="line-shadow"></div>
    <img alt="" src="<?php echo $_smarty_tpl->getVariable('BASEURL')->value;?>
resource/doc/images/page-header.png">  
    <div class="title-and-desc ">
        <h1 class="pagetitle">Contact Us</h1>
        <!--<div class="pagedesc">Lorem ipsum dolor sit amet, consectetur.</div>-->    
    </div><!-- title and desc -->
</div>
<div id="content">
    <div id="main">
        <div class="positionleft" id="maincontent">
            <h2>Keep in Touch with Us</h2>
            <p>Please leave your comment or inquiries by filling the forms below, or  contact us via email or phone for quicker response 
                <!--<a href="#">Proin id eleifend eros.</a> Donec eu tortor euismod justo varius posuere sed ac sem.</p>-->
            <div id="contactform">
                <form action="contact/add" id="contact" method="POST">
                    <fieldset>
                        <label id="name_label" for="name">Name <span class="note">(required)</span></label>
                        <input type="text" class="text-input" value="" size="50" id="name" name="name">
                        <label id="email_label" for="email">Email <span class="note">(required)</span></label>
                        <input type="text" class="text-input" value="" size="50" id="email" name="email">
                        <label id="subject_label" for="subject">Subject</label>
                        <input type="text" size="50" class="text-input" value="" id="subject" name="subject">
                        <label id="msg_label" for="msg">Message <span class="note">(required)</span></label>
                        <textarea class="text-input" id="msg" name="msg" rows="10" cols="10"></textarea><br>
                        <input type="submit" value="Send Message" id="submit_btn" class="button" name="submit"><div class="clear"></div><!-- clear float --> <br>
                        <span id="name_error" class="error" style="display: none;">Please enter name !</span>
                        <span id="email_error" class="error" style="display: none;">Please enter email address !</span>
                        <span id="email_error2" class="error" style="display: none;">Please enter valid email address !</span>
                        <span id="msg_error" class="error" style="display: none;">Please enter message !</span>
                    </fieldset>
                </form>
            </div><!-- end #contactform -->
            <div class="separator line"></div>
            <div class="clear"></div><!-- clear float --> 
        </div>
        <div id="sidebar">
            <ul>
                <li class="widget-container">
                    <h2 class="widget-title">How to Find Our Offices</h2>
                    Karanglo RT/RW 03/32, Donoharjo<br>
                    Ngaglik, Sleman<br>
                    Yogyakarta 55581<br><br>
                </li>
                <li class="widget-container">
                    <h2 class="widget-title">Our Contact Informations</h2>
                    Mrs. Novina<br/>
                    T: + (62) 81225666120 <br/>
                    <a href="mailto:snovina@gmail.com">snovina@gmail.com</a><br>
                    <br />
                    Mrs. Bekti Andari<br/>
                    T: + (62) 8174104701 <br/>
                    <a href="mailto:bandari78@gmail.com">bandari78@gmail.com</a><br>
                </li>
            </ul>
            <div class="clear"></div><!-- clear float --> 
        </div>
        <div class="clear"></div>
    </div>
</div>