<?php /* Smarty version 2.6.1, created on 2013-03-20 19:57:19
         compiled from movilcarga.html */ ?>
<div class="container">

	<!-- Form Recargas -->
	<div>

		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand josevar" href="#" name="frmlist"
					onclick="action_productos();">Productos</a>
				<ul class="nav">
					<li class="active"><a href="#">Recarga</a>
					</li>

				</ul>
			</div>
		</div>
		
		<h1>
			Recarga...
		</h1>

		<div id="Recargas">

			<div class="tabbable">
				<!-- Only required for left/right tabs -->
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#tab1" data-toggle="tab">Recarga de Celular</a>
					</li>
					<li>
						<a href="#tab2" data-toggle="tab">Consulta de Transacciones</a>
					</li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<!--Recarga de Celular -->
						<form style="margin: 0px" accept-charset="UTF-8"
							action="/sessions" method="post">
							<div style="margin: 0; padding: 0; display: inline">
								<input name="utf8" type="hidden" value="&#x2713;" />
								<input name="authenticity_token" type="hidden"
									value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" />
							</div>
							<fieldset class='textbox' style="padding: 10px">
								<input style="margin-top: 8px" type="text" placeholder="Operador" 
								    id="txtOperador" />
								<input style="margin-top: 8px" type="text" placeholder="Numero"
									id="txtNumero" />
								<input style="margin-top: 8px" type="text" placeholder="Valor"
									id="txtValor" />
								<input style="margin-top: 8px" type="password" placeholder="Clave"
									id="txtClave" />
								<input id="btnLogin" class="btn-primary" name="btnCarga"
									type="button" value="Recargar" />
								<input id="btnLogin" class="btn-primary" name="btnConsulta"
									type="button" value="Consultar Saldo Actual" />
							</fieldset>
						</form>
						<!--Fin Recarga de Celular -->
					</div>
					<div class="tab-pane" id="tab2">
						<!--Consulta de Transacciones -->
						<form style="margin: 0px" accept-charset="UTF-8"
							action="/sessions" method="post">
							<div style="margin: 0; padding: 0; display: inline">
								<input name="utf8" type="hidden" value="&#x2713;" />
								<input name="authenticity_token" type="hidden"
									value="4L/A2ZMYkhTD3IiNDMTuB/fhPRvyCNGEsaZocUUpw40=" />
							</div>
							<fieldset class='textbox' style="padding: 10px">
								<input style="margin-top: 8px" type="text"
									placeholder="Numero telefonico" id="txtNumero" />
								<input id="btnLogin" class="btn-primary" name="btnConsulta"
									type="button" value="Consultar" />
								<input id="btnLogin" class="btn-primary" name="btnTransac"
									type="button" value="Ultima Transaccion" />
							</fieldset>
						</form>
						<!--Fin Consulta de Transacciones -->
					</div>
				</div>
			</div>

		</div>
		
	</div>

</div>