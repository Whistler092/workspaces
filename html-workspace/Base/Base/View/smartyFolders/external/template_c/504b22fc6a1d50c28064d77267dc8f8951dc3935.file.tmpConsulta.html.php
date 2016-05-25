<?php /* Smarty version Smarty-3.1.11, created on 2012-10-11 17:20:40
         compiled from "..\templates\fna\tmpConsulta.html" */ ?>
<?php /*%%SmartyHeaderCode:19480507738286a7860-59278911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504b22fc6a1d50c28064d77267dc8f8951dc3935' => 
    array (
      0 => '..\\templates\\fna\\tmpConsulta.html',
      1 => 1349990039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19480507738286a7860-59278911',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50773828b378a1_05158638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50773828b378a1_05158638')) {function content_50773828b378a1_05158638($_smarty_tpl) {?><table>
	<tr>
		<td>
			<table>
				<tr>
					<td>Numero Obligacion</td>
					<td>
						<fieldset class='textbox' style="padding: 5px">
							<input style="margin-top: 4px" type="text" placeholder=""
								id="txtNumero" />
						</fieldset></td>
				</tr>
				<tr>
					<td>Valor Obligacion</td>
					<td><fieldset class='textbox' style="padding: 5px">
							<input style="margin-top: 4px" type="text" placeholder=""
								id="txtValor" />
						</fieldset></td>
				</tr>
				<tr>
					<td>Valor de Comision</td>
					<td><fieldset class='textbox' style="padding: 5px">
							<input style="margin-top: 4px" type="text" placeholder=""
								id="txtValorC" />
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
								id="txtNumero" />
						</fieldset></td>
				</tr>
				<tr>
					<td>Valor Pago</td>
					<td><fieldset class='textbox' style="padding: 5px">
							<input style="margin-top: 4px" type="text"
								placeholder="Inserte Valor" id="txtValor" />
						</fieldset></td>
					<td><input id="btnConsultaValor" class="btn-primary"
						onclick="" name="btnConsultaValor" type="button" value="Consultar" />
					</td>
				</tr>
				<tr>
					<td>Valor Comision IVA</td>
					<td><fieldset class='textbox' style="padding: 5px">
							<input style="margin-top: 4px" type="text" placeholder=""
								id="txtValorC" />
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
								id="txtNumero" />
						</fieldset></td>
				</tr>
				<tr>
					<td>Valor Deudas</td>
					<td><fieldset class='textbox' style="padding: 5px">
							<input style="margin-top: 4px" type="text" placeholder=""
								id="txtValor" />
						</fieldset></td>
				</tr>
			</table>
		</td>
	</tr>
</table><?php }} ?>