<?php 
include_once ("../../Lenguage/English/L.login.php");
include_once ("../../System/user/session.php");
include_once ("../../Model/br/UsuarioSistema.php");
include_once ("Controller.php");


class login extends Controller{	
	
	 function executeAuthentication() {
	    
	 	$sbLogin = $_REQUEST["sbLogin"];
        $sbPassword = $_REQUEST["sbPassword"];
        
	    $objUsuarioSistema = new UserSystem();
		$sbRespuesta = $objUsuarioSistema->ValidateUser($sbLogin, $sbPassword);
		$objParser = new StringTokenizer($sbRespuesta, "-");
		$sbResponse = $objParser->nextToken();
		$sbDato = $objParser->nextToken();
		
		if ($sbResponse!=0) {
			  echo "Ingreso Fallido";
		} else {
			  echo $sbResponse;
		
	    }
        
	} 
	

	
}

$objFrmLogin = new login();
$sbAction = $_REQUEST['action'];
$objFrmLogin->execute( $objFrmLogin , $sbAction );

?>