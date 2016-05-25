<?php /* Smarty version 2.6.1, created on 2013-07-30 21:08:45
         compiled from loteriasganafacil.html */ ?>
<!-- Listado de Loterias Ganafacil -->	
<b>Loterias </b> 
<label id="lblLotSelecGfl"></label>
Codigo: <input style="margin-top: 8px; width: 75px;" type="text" placeholder="Codigo" id="txtCodigoLoterGanafacil" onfocus="CodigoLoterGflOnfocus()"  onblur="CodigoLoterGflOnblur()"/>
<br>
<?php if (count($_from = (array)$this->_tpl_vars['ArrayNombreLoteria'])):
    foreach ($_from as $this->_tpl_vars['dataid'] => $this->_tpl_vars['data']):
?>
	<input id="Gfl<?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
" class="chkGflLoteria" type="checkbox" name="<?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
" value="<?php echo $this->_tpl_vars['data']; ?>
"><?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
-<?php echo $this->_tpl_vars['data']; ?>
<br>
<?php endforeach; unset($_from); endif; ?>
<!-- Fin Listado de Loterias -->	
 	
	