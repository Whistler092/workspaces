<?php /* Smarty version 2.6.1, created on 2013-07-24 21:17:15
         compiled from loteriasdoblechance.html */ ?>
<!-- Listado de Loterias Doble Chance -->	
<b>Loterias </b> 
<label id="lblLotSelecDbl"></label>
Codigo: <input style="margin-top: 8px; width: 75px;" type="text" placeholder="Codigo" id="txtCodigoLoterDblChance" onfocus="CodigoLoterDblOnfocus()" onblur="CodigoLoterDblOnblur()"/>
<br>
<?php if (count($_from = (array)$this->_tpl_vars['ArrayNombreLoteria'])):
    foreach ($_from as $this->_tpl_vars['dataid'] => $this->_tpl_vars['data']):
?>
	<input id="dbl<?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
" class="chkDblLoteria" type="checkbox" name="<?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
" value="<?php echo $this->_tpl_vars['data']; ?>
"><?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
-<?php echo $this->_tpl_vars['data']; ?>
<br>
<?php endforeach; unset($_from); endif; ?>
<!-- Fin Listado de Loterias -->	