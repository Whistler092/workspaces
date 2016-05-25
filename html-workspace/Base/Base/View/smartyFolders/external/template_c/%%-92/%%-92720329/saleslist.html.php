<?php /* Smarty version 2.6.1, created on 2013-07-26 13:58:01
         compiled from saleslist.html */ ?>
   <div class="jumbotron masthead">
	  <div class="container">
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
		        <?php if (count($_from = (array)$this->_tpl_vars['ArrayNombreProducto'])):
    foreach ($_from as $this->_tpl_vars['dataid'] => $this->_tpl_vars['data']):
?>
		              <li>
		               <?php if ($this->_tpl_vars['ArrayCodigoProducto'][$this->_tpl_vars['dataid']] == '0'): ?>
				       <a href="#" class = "classChance" name="frmChance"><?php echo $this->_tpl_vars['data']; ?>
</a>
				       <?php endif; ?>
				       <?php if ($this->_tpl_vars['ArrayCodigoProducto'][$this->_tpl_vars['dataid']] == '1'): ?>
				       <a href="#" class = "classDobleChance" name="frmDobleChance"><?php echo $this->_tpl_vars['data']; ?>
</a>
				       <?php endif; ?>
				       <?php if ($this->_tpl_vars['ArrayCodigoProducto'][$this->_tpl_vars['dataid']] == '3'): ?>
				       <a href="#" class = "classGanaFacil" name="frmGanaFacil"><?php echo $this->_tpl_vars['data']; ?>
</a>
				       <?php endif; ?>
				       <?php if ($this->_tpl_vars['ArrayCodigoProducto'][$this->_tpl_vars['dataid']] == '6'): ?>
				       <a href="#" class = "classFna" name="frmFna"><?php echo $this->_tpl_vars['data']; ?>
</a>
				       <?php endif; ?>      
				      </li>
				<?php endforeach; unset($_from); endif; ?>
		        <li class="divider"></li>
	      </ul>
	      </div>  
          <!-- Fin Listado de Productos -->	
 	
	  </div>
	  
	</div>	