<?php /* Smarty version Smarty-3.1.11, created on 2012-09-19 21:21:31
         compiled from "..\templates\menui.html" */ ?>
<?php /*%%SmartyHeaderCode:32393505a375b120e04-65611737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '474c2eaed5c968ee6200d4c9f9532565034c9d50' => 
    array (
      0 => '..\\templates\\menui.html',
      1 => 1348089648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32393505a375b120e04-65611737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'esLogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505a375b187e52_50487585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505a375b187e52_50487585')) {function content_505a375b187e52_50487585($_smarty_tpl) {?>       <div class="navbar navbar-inverse navbar-fixed-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <div class="nav-collapse collapse">
	            <ul class="nav">
	              <li class="active">
	                <a href="./index.html">Home</a>
	              </li>
	              <li class="">
	                    <?php if ($_smarty_tpl->tpl_vars['esLogin']->value==1){?>
	                    <a href="#" class = "classLogout" name="frmLogout">Log Out</a>
	                    <?php }else{ ?>
			            <!--Login -->
			             <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">Login</a>
			             <div class="dropdown-menu">
			               <form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" /></div>
			                 <fieldset class='textbox' style="padding:10px">
			                   <input style="margin-top: 8px" type="text" placeholder="Username" id="username" />
			                   <input style="margin-top: 8px" type="password" placeholder="Passsword" id="password" />
			                   <input id="btnLogin" class="btn-primary" name="Login" type="button" value="Log In" />
			                 </fieldset>
			               </form>
			             </div>
			             <!--fin Login-->
	                     <?php }?>
	              </li>
	              <li class="">
	                <a href="#" class = "classAbout" name="frmAbout">About</a>
	              </li>
	              
	            </ul>
	          </div>
	        </div>
	      </div>
	    </div>     <?php }} ?>