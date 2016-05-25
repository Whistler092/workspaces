<?php
include_once ("../../System/user/session.php");
include_once ("Controller.php");
include ("apiSmartyAbout.php");

class modulo1 extends Controller{
	private $objSmarty;
	
	function __construct()
	{

		$this->objSmarty = new ApiSmartyAbout();
		$this->objSmarty->template_dir = "../../View/templates";

	}
	
		
	
	function executeGetModulo1() {

		    $sbDato="Scripts";
			$this->objSmarty->template_dir = "../../View/templates/modulo1";
			$this->objSmarty->assign("sbDato",$sbDato);
			$this->objSmarty->display ("modulo1.html");
				
	}
	
}


$objModulo1 = new modulo1();
$sbAction = $_REQUEST['action'];
$objModulo1->execute( $objModulo1 , $sbAction );


?>