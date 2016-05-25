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
		
		//Titulos
		$this->objSmarty->assign("title_01",title_01);
		$this->objSmarty->assign("title_02",title_02);
		$this->objSmarty->assign("title_03",title_03);
		$this->objSmarty->assign("title_04",title_04);
		$this->objSmarty->assign("title_05",title_05);
		
		//Subtitulo
		$this->objSmarty->assign("title_03_01",title_03_01);
		$this->objSmarty->assign("title_03_02",title_03_02);
		$this->objSmarty->assign("title_03_03",title_03_03);
		
		//Detalle
		$this->objSmarty->assign("detail_01_01",detail_01_01);
		$this->objSmarty->assign("detail_01_02",detail_01_02);
		$this->objSmarty->assign("detail_01_03",detail_01_03);
		$this->objSmarty->assign("detail_01_04",detail_01_04);
		$this->objSmarty->assign("detail_01_05",detail_01_05);
		
		
		//Varios
		$this->objSmarty->display("main.html");
	}
}


$objFrmLenguage = new frmLenguage();
$sbAction = $_REQUEST['action'];
$objFrmLenguage->execute( $objFrmLenguage , $sbAction );

?>