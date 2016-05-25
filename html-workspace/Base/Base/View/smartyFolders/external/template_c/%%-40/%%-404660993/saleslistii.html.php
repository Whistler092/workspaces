<?php /* Smarty version 2.6.1, created on 2013-03-20 17:06:48
         compiled from saleslistii.html */ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ThinkerSales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="HoN" content="">
    <meta name="HoN" content="">
    
    
    <!-- Le styles -->
    <link href="View/assets/css/bootstrap.css" rel="stylesheet">
    <link href="View/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="View/assets/css/docs.css" rel="stylesheet">
    <link href="View/assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="View/assets/css/thinkercss.css" rel="stylesheet">
    <!-- Ventana de Modal About -->
    <link rel="STYLESHEET" type="text/css" href="View/assets/css/popup-contact.css"/>
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <!--  
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png"> -->

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
    <script src="View/assets/js/bootstrap.min.js"></script>
    <script src="View/assets/js/application.js"></script>
    <!--  <script src="View/js/ajax-control.js"></script> -->
    <script src="View/js/menui-control.js"></script>
    <script src="View/js/saleslist-control.js"></script>
    
    <!-- Cambio de Clave -->
    <script src="View/assets/js/tkjs/jquery-ui.min.js"></script>
   
    <!-- Ventana de Modal About -->
    <script src="View/assets/js/tkjs/fg_moveable_popup.js"></script>
    <script src="View/assets/js/tkjs/fg_form_submitter.js"></script>
      
    <!-- Modal -->
    <script src="View/assets/js/tkjs/jquery.leanModal.min.js"></script>
    
    <!-- <script src="View/js/fna/fna-control.js"></script>-->
   
	
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
					<ul class="nav" >
					
					    <li class="">
						   <!--Cambio Clave -->
							      <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">Cambio Clave</a>
							      <div id = "CambioClave" class="dropdown-menu">
							        <form style="margin: 0px" accept-charset="UTF-8" action="/sessions" method="post">
							           <div style="margin:0;padding:0;display:inline">
								           <input name="utf8" type="hidden" value="&#x2713;" />
								           <input name="change_token" type="hidden" value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" />
							           </div>
							           <fieldset class='textbox' style="padding:10px">
							              <input style="margin-top: 8px" type="password" placeholder="Clave" id="txtClave" />
							              <input style="margin-top: 8px" type="password" placeholder="Nueva Clave" id="txtNuevaClave" />
							              <input style="margin-top: 8px" type="password" placeholder="Repita Clave" id="txtRepitaClave" />
							              <br>
							              <input id="btnAceptar" class="btn-primary" name="Aceptar" type="button" value="Cambiar Clave" onclick="action_CambioClave();" />
							            </fieldset>
							         </form>
							       </div>
							<!--Fin Cambio Clave-->
						</li>
						
						<li class="">
						   <a href="#" class="classImprimoUltimo">ReImprimir </a>
						</li>
						
						<li class="dropdown">
						    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Arqueo</a>
						    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
							  <li><a href="#" class="classArqueo">Arqueo Pantalla</a></li>
							  <li class="divider"></li>
							  <li><a href="#" class="classArqueoImp">Arqueo Impresion</a></li>
							</ul>
						</li>
	
						<li class="">
						   <a href="./index.html" >Cerrar sesi&oacuten</a>
						</li>
			
			            <li class="active classUsuario">
						   
						</li>
					</ul>
					
				</div>
			</div>
	     </div>
	  </div>     
    </div>
    
   
    
    <!-- Contenido
    =================================================== -->
     
	<div id = "main" >
		<div class="jumbotron masthead">
		  <div class="container">
		     <!-- 
		    <h1>Thinker S.A.S</h1>
		    <p>Software Applications.</p>
		     -->
	        <img src="View/assets/img/thinkerII.png" align="left">
		  </div>
		</div>
		
		
		<div class="container">
		
		  <div>
			
		      <!-- Listado de Productos -->	
			  <div id = "SalesList" align="center" style="text-align:left;">
			  <h1 >Productos</h1>
			  <ul class="nav nav-list">
			        <li class="nav-header">Lista de Productos</li>
			        <li class="divider"></li>
	 
		            <li>
			            <a href="#" class = "classCarga" name="frmCarga">Recarga</a>
			        </li>
			       
					<li>
			            <a href="#" class = "classFna" name="frmFna">Fondo Nacional de Ahorro</a>
			        </li>
			        
			        
			        <li>
			            <a href="#" class = "classFna" name="frmFna"><?php echo $this->_tpl_vars['sbDescripcionProducto']; ?>
</a>
			        </li>
			        <li class="divider"></li>
		      </ul>
		      </div>  
	          <!-- Fin Listado de Productos -->	
	 	
		  </div>
		  
		</div>
	</div>
	
	<!-- Modal About-->
	<div id= "hon" style="display: none;">
	  <img src="View/assets/img/wilson.png">
	  <h3 style="text-align: center;">HoN</h3>
	</div>
	<!--Fin Modal About-->

   

    <!-- Footer
    ================================================== -->
    <footer  style="min-height: 27px; ">
         <a rel="leanModal" href="#hon" class = "classThinker"><img src="View/assets/img/thinkerIII.png" width="100px" align="right"></a>   
    </footer>
   
    <script type="text/javascript" src="View/utilities/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="View/utilities/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
	<link rel="stylesheet" type="text/css" href="View/utilities/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

  </body>
</html>

	