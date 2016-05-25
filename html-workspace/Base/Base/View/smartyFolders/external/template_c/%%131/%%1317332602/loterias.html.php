<?php /* Smarty version 2.6.1, created on 2013-07-22 21:45:53
         compiled from loterias.html */ ?>
<!-- Listado de Loterias Chance -->	
<b>Loterias </b> 
<label id="lblLotSelec"></label>
Codigo: <input style="margin-top: 8px; width: 75px;" type="text" placeholder="Codigo" id="txtCodigoLoter" onfocus="CodigoLoterOnfocus()"  onblur="CodigoLoterOnblur()"/>
<br>
<?php if (count($_from = (array)$this->_tpl_vars['ArrayNombreLoteria'])):
    foreach ($_from as $this->_tpl_vars['dataid'] => $this->_tpl_vars['data']):
?>
	<input id="<?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
" class="chkLoteria" type="checkbox" name="<?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
" value="<?php echo $this->_tpl_vars['data']; ?>
"><?php echo $this->_tpl_vars['ArrayCodigoLoteria'][$this->_tpl_vars['dataid']]; ?>
-<?php echo $this->_tpl_vars['data']; ?>
<br>
<?php endforeach; unset($_from); endif; ?>
<!-- Fin Listado de Loterias -->	
 	
	