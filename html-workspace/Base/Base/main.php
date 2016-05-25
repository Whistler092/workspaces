<?php
include_once ("Lenguage/Spanish/L.sesion.php");
include_once ("Controller/php/Controller.php");
include ("Controller/php/apiSmarty.php");

class frmMain extends Controller{
    
	private $objSmarty;
	
	function __construct()
	{

		$this->objSmarty = new ApiSmarty();
		$this->objSmarty->template_dir = "View/templates";

	}
	function executeFormMain(){
		$this->objSmarty->assign("login",OpenSeason);
		$this->objSmarty->assign("user",User);
		$this->objSmarty->assign("about",About);
		$this->objSmarty->assign("password",Password);
		$this->objSmarty->display ("main.html");
	}
}

$objFrmIndex = new frmMain();
$sbAction = $_REQUEST['action'];
$objFrmIndex->execute( $objFrmIndex , $sbAction );

?>