<?php /* Smarty version 2.6.1, created on 2012-10-23 18:49:51
         compiled from consultaPorProducto.html */ ?>
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
					<li class="active"><a href="#" class="classRecaudo"
						name="frmRecaudo">Recaudo Servicio</a></li>

				</ul>
			</div>
		</div>
		<h1>Recaudo Servicio</h1>



		<div id="Recaudo" align="center">
			<table>
				<tr>
					<td align="center">CAMPOS</td>
				</tr>

				<?php if (count($_from = (array)$this->_tpl_vars['ArrayCamposid'])):
    foreach ($_from as $this->_tpl_vars['dataid'] => $this->_tpl_vars['data']):
?>
				<tr>
					<td>
						<table>
							<tr>
								<td><span class="label"><?php echo $this->_tpl_vars['ArrayLabelCampo'][$this->_tpl_vars['dataid']]; ?>
</span>
								</td>

								<td><fieldset class='textbox' style="padding: 5px">
										<input style="margin-top: 4px" type="text" placeholder=""
											name="<?php echo $this->_tpl_vars['ArrayCamposid'][$this->_tpl_vars['dataid']]; ?>
" value="<?php echo $this->_tpl_vars['data']; ?>
"
											id="<?php echo $this->_tpl_vars['ArrayCamposid'][$this->_tpl_vars['dataid']]; ?>
" />
									</fieldset></td>
							</tr>
						</table>
					</td>
				</tr>
				<?php endforeach; unset($_from); endif; ?>

			</table>

			<input id="<?php echo $this->_tpl_vars['Productoid']; ?>
" class="btn-primary enviarTransaccion"
				name="<?php echo $this->_tpl_vars['Productoid']; ?>
" type="button" value="Enviar" />
		</div>

		<!-- Form Recaudo -->

	</div>

</div>