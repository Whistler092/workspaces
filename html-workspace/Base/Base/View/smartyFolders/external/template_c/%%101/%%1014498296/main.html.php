<?php /* Smarty version 2.6.1, created on 2014-02-12 21:43:01
         compiled from main.html */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Scripts s.a.s</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Le styles -->
<link href="View/assets/css/bootstrap.css" rel="stylesheet">
<link href="View/assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href="View/assets/css/docs.css" rel="stylesheet">
<link href="View/assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="View/assets/css/scripts.css" rel="stylesheet">
<!-- Ventana de Modal About -->
<link rel="STYLESHEET" type="text/css" href="View/assets/css/popup-contact.css" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
<script src="View/assets/js/jquery.js"></script>
<script src="View/assets/js/google-code-prettify/prettify.js"></script>

<script src="View/assets/js/bootstrap-transition.js"></script>
<script src="View/assets/js/bootstrap-alert.js"></script>
<script src="View/assets/js/bootstrap-modal.js"></script>
<script src="View/assets/js/bootstrap-dropdown.js"></script>
<script src="View/assets/js/bootstrap-scrollspy.js"></script>
<script src="View/assets/js/bootstrap-tab.js"></script>
<script src="View/assets/js/bootstrap-tooltip.js"></script>
<script src="View/assets/js/bootstrap-popover.js"></script>
<script src="View/assets/js/bootstrap-button.js"></script>
<script src="View/assets/js/bootstrap-collapse.js"></script>
<script src="View/assets/js/bootstrap-carousel.js"></script>
<script src="View/assets/js/bootstrap-typeahead.js"></script>
<script src="View/assets/js/bootstrap-affix.js"></script>


<script src="View/assets/js/application.js"></script>
<script src="View/js/main-control.js"></script>
<script src="View/js/menui-control.js"></script>
<script src="View/js/modulo1/modulo1-control.js"></script>

<!-- Cambio de Clave -->
<script src="View/assets/js/tkjs/jquery-ui.min.js"></script>

<!-- Ventana de Modal About -->
<script src="View/assets/js/scrjs/fg_moveable_popup.js"></script>
<script src="View/assets/js/scrjs/fg_form_submitter.js"></script>

<!-- Modal -->
<script src="View/assets/js/tkjs/jquery.leanModal.min.js"></script>


</head>

<body data-spy="scroll" data-target=".bs-docs-sidebar" id="all">

	<!-- Navbar
    ================================================== -->
	<div id="menumain">

		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<button type="button" class="btn btn-navbar" data-toggle="collapse"
						data-target=".nav-collapse">
						<span class="icon-bar"></span> <span class="icon-bar"></span> 
						<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active">
								<!--Login --> 
								<a class="dropdown-toggle" data-toggle="dropdown" href="#menu1"><?php echo $this->_tpl_vars['login']; ?>
</a>
								<div id="Login" class="dropdown-menu">
									<form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post">
										<div style="margin: 0; padding: 0; display: inline">
											<input name="utf8" type="hidden" value="" /> 
											<input name="authenticity_token" type="hidden" value="" />
										</div>
										<fieldset class='textbox' style="padding: 10px">
											<input style="margin-top: 8px" type="text" placeholder=<?php echo $this->_tpl_vars['user']; ?>
 id="username" /> 
											<input style="margin-top: 8px" type="password" placeholder=<?php echo $this->_tpl_vars['password']; ?>
 id="password" /> 
											<input id="btnLogin" class="btn-primary" name="Login" type="button" value=<?php echo $this->_tpl_vars['login']; ?>
 />
										</fieldset>
									</form>
								</div> <!--fin Login-->
							</li>

							<li class="">
								<a href="#" class="About"><?php echo $this->_tpl_vars['about']; ?>
</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Contenido
    =================================================== -->
	<div id="divSalesList"></div>
	<div id="divAbout"></div>
	<div id="main"></div>
	
	<!-- Footer -->
	<!--  
	<footer style="min-height: 27px;bottom: 0px">
			<a rel="leanModal" href="#hon" class="classThinker"><img
				src="View/assets/img/thinkerIII.png" width="100px" align="right">
			</a>
	</footer>
	-->

	<!-- Modal About-->
	<div id="hon" style="display: none;">
		<img src="View/assets/img/wilson.png">
		<h3 style="text-align: center;">HoN</h3>
	</div>
	<!--Fin Modal About-->
	
	<div id="idCambioClave" title="Cambio Clave" style="display: none;">
		<fieldset class='textbox' style="padding: 10px">
			<input style="margin-top: 8px" type="password" placeholder="Clave" id="txtClaveII" /> 
			<input style="margin-top: 8px" type="password" placeholder="Nueva Clave" id="txtNuevaClaveII" /> 
			<input style="margin-top: 8px" type="password" placeholder="Repita Clave" id="txtRepitaClaveII" /> 
			<br> 
			<input id="btnAceptar" class="btn-primary" name="Aceptar" type="button" value="Cambiar Clave" onclick="action_CambioClaveCeros();" />
		</fieldset>
	</div>

	<script type="text/javascript" src="View/utilities/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="View/utilities/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="View/utilities/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

</body>
</html>






























