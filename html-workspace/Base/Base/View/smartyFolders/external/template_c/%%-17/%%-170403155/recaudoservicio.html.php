<?php /* Smarty version 2.6.1, created on 2012-11-01 16:18:04
         compiled from recaudoservicio.html */ ?>
<div class="jumbotron masthead">
	<div class="container">
		<h1>Thinker S.A.S</h1>
		<p>Software Applications.</p>
	</div>
</div>


<div class="container">

	<!-- Form Recaudo -->
	<div>

		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand josevar" href="#" name="frmlist"
					onclick="action_productos();">Productos</a>
				<ul class="nav">
					<li class="active"><a href="#" class = "classRecaudo" name="frmRecaudo">Recaudo Servicio</a></li>

				</ul>
			</div>
		</div>
		<h1>Recaudo Servicio</h1>

		<div id="Recaudo">
			<ul class="nav nav-list">
				<li class="nav-header">Lista de Servicios</li>
				<li class="divider"></li>
			    <?php if (count($_from = (array)$this->_tpl_vars['ArrayEmpresa'])):
    foreach ($_from as $this->_tpl_vars['dataid'] => $this->_tpl_vars['data']):
?>
				     <li><a href="#" class="classRecaudoLink" id="<?php echo $this->_tpl_vars['ArrayIdRecaudoProducto'][$this->_tpl_vars['dataid']]; ?>
|<?php echo $this->_tpl_vars['ArrayEAN13'][$this->_tpl_vars['dataid']]; ?>
"><?php echo $this->_tpl_vars['data']; ?>
</a></li> 
				<?php endforeach; unset($_from); endif; ?>
				<li class="divider"></li>
			</ul>

		</div>
		<!-- Form Recaudo -->

	</div>

</div>