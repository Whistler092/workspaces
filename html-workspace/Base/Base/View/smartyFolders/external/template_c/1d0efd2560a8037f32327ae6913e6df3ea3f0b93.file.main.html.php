<?php /* Smarty version Smarty-3.1.11, created on 2012-09-19 21:03:39
         compiled from "..\templates\main.html" */ ?>
<?php /*%%SmartyHeaderCode:17338505a332b4d9c71-53797325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d0efd2560a8037f32327ae6913e6df3ea3f0b93' => 
    array (
      0 => '..\\templates\\main.html',
      1 => 1348087843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17338505a332b4d9c71-53797325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'esLogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505a332b563257_45956509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505a332b563257_45956509')) {function content_505a332b563257_45956509($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ThinkerSales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/docs.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

	
	
  </head>

  <body data-spy="scroll" data-target=".bs-docs-sidebar">
     
     
    
    <!-- Navbar
    ================================================== -->
    <div id ="menumain">
      <div class="navbar navbar-inverse navbar-fixed-top">
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
	    </div>    
    </div>
    
   
    
    <!-- Contenido
    =================================================== -->
	<div id = "main">
	 <!-- Contenido de la Pagina-->
	</div>


    <!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <img src="thinkerII.pngassets/img/thinkerII.png">
        <p>ThinkerSalesMobile | All Rights Reserved &copy;</p>    
      </div>
    </footer>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/application.js"></script>
    <!--script login -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script language="javascript">
	    $('.dropdown-toggle').dropdown();
	    $('.dropdown-menu').find('form').click(function (e) {
	        e.stopPropagation();
	      });
	</script>
	<!-- click al boton -->
    <script src="js/ajax-control.js"></script>
	<!--fin login-->

  </body>
</html>
<?php }} ?>