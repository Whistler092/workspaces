<?php /* Smarty version 2.6.1, created on 2013-07-26 17:03:33
         compiled from doblechance.html */ ?>
<div class="container">

	<!-- Form Doble Chance -->
	<div>
     
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand josevar" href="#" name="frmlist"
					onclick="action_productos();">Productos</a>
				<ul class="nav">
					<li class="active"><a href="#">DobleChance</a>
					</li>

				</ul>
			</div>
		</div>
	
	    <div class="parteChance">
			<fieldset class='textbox' style="padding: 10px">
				Fecha:<input style="margin-top: 8px; width: 75px;" readonly="readonly" type="text" placeholder="Fecha" id="txtFecha" />
				Hora:<input style="margin-top: 8px; width: 80px;" readonly="readonly" type="text" placeholder="Hora" id="txtHora" />
				No Serie:<input style="margin-top: 8px; width: 90px;" type="text" placeholder="Serie" id="txtNoSerieDbl" /> 
				<!-- Consecut:<input style="margin-top: 8px; width: 75px;" readonly="readonly" type="text" placeholder="Consecut" id="txtConsecutivo" />-->
			</fieldset>

			
			<input style="margin-top: 8px; width: 75px;" type="text" placeholder="Numero" id="txtNumeroDbl" maxlength="4" onkeypress="return justNumbers(event);" /> 
			<!-- Botones -->
			<input id="btnAgregarDblChance" class="btn-primary" name="btnAgregar" type="button" value="Agregar" />
			<input id="btnBorrarDblChance" class="btn-primary" name="btnEliminar" type="button" value="Borrar" />
					
			<br>
			<label id="lblLoteriaDblChance"></label>
			<!-- Grilla Chance -->
			<div id="divGrillaDobleChance"> 	
				<table class="table table-bordered table-striped" id = "tbDobleChance"  style="width: 225px;">
					<thead>
						<tr>
							<!-- <th style="text-align: center;"><span class="label label-info">#</span></th> -->
							<th style="text-align: center;"><span class="label label-info">Numero</span></th>
							<th style="text-align: center;"><span class="label label-important">Borrar</span></th>
						</tr>
									
									
					</thead>
								
					<tbody class="classTrsDobleChance">
						
					</tbody>
				</table>
		   </div>
	       <!-- </div> -->
	       <input id="btnImprimirDblChance" class="btn-primary" name="btnImprimirChance" type="button" value="Imprimir" />
	       <!--<input id="btnCancelarChance" class="btn-primary" name="btnCancelarChance" type="button" value="Cancelar" />-->
	       Total Venta:<input style="margin-top: 8px; width: 75px; color: blue; font-size: medium;" type="text" value="<?php echo $this->_tpl_vars['ValorDoblePlay']; ?>
" readonly="readonly" id="txtTotalVentaDbl" /> 
	   
       </div><!--parteChance -->
       <div class="parteLoteria">
          <div id= "divLoterias" class="well well-large">
           <b>Loterias</b>
       </div><!--parteLoteria -->
       
           
	</div>
	<!-- Fin Form Doble Chance -->
</div>