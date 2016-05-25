<?php
include_once ("Controller.php");
include ("apiSmarty.php");

class frmLenguage extends Controller
{
	private $objSmarty;
	
	function __construct()
	{
		$this->objSmarty = new ApiSmarty();
		$this->objSmarty->template_dir = "../View/templates";
	}
	
	function executeFormMain()
	{
		$sbLenguaje = $_REQUEST['lenguage'];
		if(strcmp($sbLenguaje, "SPA")==0)
		{
			include_once ("../Lenguage/Spanish/Span.php");
		}else
		{
			include_once ("../Lenguage/English/Eng.php");
		}
		
        $this->objSmarty->assign("MainTitle01",MainTitle01);
        $this->objSmarty->assign("MainTitle02",MainTitle02);
        $this->objSmarty->assign("MainTitle03",MainTitle03);
        $this->objSmarty->assign("MainTitle04",MainTitle04);
        
        $this->objSmarty->assign("MainTitle02_02",MainTitle02_02);
        $this->objSmarty->assign("MainTitle03_03",MainTitle03_03);
        $this->objSmarty->assign("MainTitle04_04",MainTitle04_04);
        
        $this->objSmarty->assign("MainTitle02_01",MainTitle02_01);
        $this->objSmarty->assign("MainTitle02_02",MainTitle02_02);
        
        $this->objSmarty->assign("Detail02_01",Detail02_01);
        $this->objSmarty->assign("Detail02_01_01",Detail02_01_01);
        $this->objSmarty->assign("Detail02_01_02",Detail02_01_02);
        $this->objSmarty->assign("Detail02_01_03",Detail02_01_03);
        $this->objSmarty->assign("Detail02_01_04",Detail02_01_04);
        
        $this->objSmarty->assign("Detail03_01_01",Detail03_01_01);
        $this->objSmarty->assign("Detail03_01_02",Detail03_01_02);
        
        $this->objSmarty->assign("Detail04_01",Detail04_01);
        
         
		$this->objSmarty->display ("main.html");
		
	}
	
}

$objFrmLenguage = new frmLenguage();
$sbAction = $_REQUEST['action'];
$objFrmLenguage->execute( $objFrmLenguage , $sbAction );

?>