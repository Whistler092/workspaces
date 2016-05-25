<?php /* Smarty version 2.6.1, created on 2013-06-18 13:28:40
         compiled from tmpConsulta.html */ ?>
<div style="display: <?php echo $this->_tpl_vars['contenidoDisplayAlerta']; ?>
;">
	<div class="alert alert-error" align="center" id="alerta">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Error !</strong>
		<div id="contenidoAlerta"><?php echo $this->_tpl_vars['mensajeError']; ?>
</div>
	</div>
</div>
<div style="display: <?php echo $this->_tpl_vars['contenidoDisplay']; ?>
;">

	<div class="tabbable" id="divPendientes"
		style="border-color: #aaaaaa; border-width: 2px; border-style: solid;">
		<h2>Obligaciones Pendientes</h2>
		<table class="table">
			<thead>
				<tr>
					<th></th>
					<th>Numero Obligacion</th>
					<th>Nombre SubProducto</th>
					<th>Fecha Vencimiento</th>
					<th>Fecha Ultimo Pago</th>
					<th>Valor Ultimo Pago</th>
					<th>Valor Obligacion</th>
				</tr>
			</thead>
			<tbody>
				<?php if (count($_from = (array)$this->_tpl_vars['NumeroRegistros'])):
    foreach ($_from as $this->_tpl_vars['dataid'] => $this->_tpl_vars['data']):
?>
				<tr class="info">
					<td><input id="btnConsultaValor" class="btn btn-success"
						onclick="" name="btnConsultaValor" type="button" value="Consultar" />
					</td>
					<td><?php echo $this->_tpl_vars['idObligacion']; ?>
</td>
					<td><?php echo $this->_tpl_vars['NombreSubproducto'][$this->_tpl_vars['dataid']]; ?>
</td>
					<td><?php echo $this->_tpl_vars['FechaVencimiento'][$this->_tpl_vars['dataid']]; ?>
</td>
					<td><?php echo $this->_tpl_vars['FechaUltimoPago'][$this->_tpl_vars['dataid']]; ?>
</td>
					<td>$<?php echo $this->_tpl_vars['ValorUltimoPago'][$this->_tpl_vars['dataid']]; ?>
</td>
					<td>$<?php echo $this->_tpl_vars['ValorObligacion'][$this->_tpl_vars['dataid']]; ?>
</td>
				</tr>
				<?php endforeach; unset($_from); endif; ?>
			</tbody>
		</table>




	</div>



	<br /> <br /> <br />


	<div class="tabbable" id="divRes"
		style="border-color: #aaaaaa; border-width: 2px; border-style: solid;">



		<table>
			<tr>
				<td>
					<table>
						<tr>
							<td>Numero Obligacion</td>
							<td>
								<fieldset class='textbox' style="padding: 5px">
									<input style="margin-top: 4px" type="text" placeholder=""
										value="<?php echo $this->_tpl_vars['idObligacion']; ?>
" disabled="disabled"
										id="txtidObligacion" />
								</fieldset></td>
						</tr>
						<tr>
							<td>Valor Obligacion</td>
							<td><fieldset class='textbox' style="padding: 5px">
									<input style="margin-top: 4px" type="text" placeholder=""
										value="$<?php echo $this->_tpl_vars['ValorObligacion'][0]; ?>
" disabled="disabled"
										onkeyup="format(this)" onchange="format(this)"
										id="txtValorObligacion" />
								</fieldset></td>
						</tr>
						<tr>
							<td>Valor de Comision</td>
							<td><fieldset class='textbox' style="padding: 5px">
									<input style="margin-top: 4px" type="text" placeholder=""
										disabled="disabled" onkeyup="format(this)"
										onchange="format(this)" id="txtValorC" />
								</fieldset>
							</td>
						</tr>
					</table>
				</td>

				<td>

					<table>
						<tr>
							<td>Nombre Producto</td>
							<td>
								<fieldset class='textbox' style="padding: 5px">
									<input style="margin-top: 4px" type="text" placeholder=""
										value="<?php echo $this->_tpl_vars['NombreSubproducto'][0]; ?>
" disabled="disabled"
										id="txtNombre" />
								</fieldset></td>
						</tr>
						<tr>
							<td>Valor Pago</td>
							<td><fieldset class='textbox' style="padding: 5px">
									<input style="margin-top: 4px" type="text"
										onkeyup="format(this)" onchange="format(this)"
										placeholder="Inserte Valor" id="txtValor" />
								</fieldset></td>
							<td><input id="btnPagoValor" class="btn-primary" onclick=""
								name="btnPagoValor" type="button" value="Consultar" />
							</td>
						</tr>
						<tr>
							<td>Valor Comision IVA</td>
							<td><fieldset class='textbox' style="padding: 5px">
									<input style="margin-top: 4px" type="text" placeholder=""
										disabled="disabled" onkeyup="format(this)"
										onchange="format(this)" id="txtValorIvaC" />
								</fieldset>
							</td>
						</tr>
					</table>
				</td>


				<td>

					<table>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>Total Recibido</td>
							<td>
								<fieldset class='textbox' style="padding: 5px">
									<input style="margin-top: 4px" type="text" placeholder=""
										disabled="disabled" id="txtNumero" />
								</fieldset></td>
						</tr>
						<tr>
							<td>Valor Deuda</td>
							<td><fieldset class='textbox' style="padding: 5px">
									<input style="margin-top: 4px" type="text" placeholder=""
										disabled="disabled" id="txtValorDeuda" />
								</fieldset></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		<div align="center">
			<a data-toggle="modal" href="#myModal" id="btnPreAceptar"
				class="btn btn-primary" type="button">Aceptar</a> <input
				type="button" value="Cancelar" class="btn btn-primary" id="Cancel" />
			<input type="button" value="Cerrar" class="btn btn-primary"
				id="Close" />
		</div>

	</div>
</div>
<br />
<br />
<br />