<?php

include_once("../../System/user/Socket.php");
include_once ("Constantes.php");
class UserSystem {
 
  
  var $rcPerfiles;
  var $rcPerfilesEmpresa;
	
  function UserSystem() {
    $this->rcPerfiles=array();
    $this->rcPerfilesEmpresa=array();
  }
  
  function ValidateUser ($sbLogin, $sbPassword) {
     
  	    $objSocket = new Socket();
  	    
  	    //Utilizar llave unica
  	    $sbEncrypt=$this->encrypt($sbLogin,"scripts");
        $sbCrc="H".abs(crc32($sbEncrypt));
        
        //Armar peticion        
		$sbPeticion ="111&hon|hon\n";
  	    
  	    $sbRespuesta =$objSocket->CreateSoket($sbPeticion);
  	  
  	    //0&hon|hon
  	    $objParser = new StringTokenizer($sbRespuesta, "&");
        $sbResponse = $objParser->nextToken();
        $sbDatos= $objParser->nextToken();
        
        //Parser Datos
        $objParserParametro = new StringTokenizer($sbDatos, "|");
        $sbParametro1 = $objParserParametro->nextToken();
        $sbParametro2 = $objParserParametro->nextToken();
        
        //Guardar Variables de Session
        setSession("SessionKey",$sbParametro1);
        
	
		return $sbResponse."-".$sbParametro1;   
  }  
  
  
  function encrypt($string, $key) {
	   $result = '';
	   for($i=0; $i<strlen($string); $i++) {
	      $char = substr($string, $i, 1);
	      $keychar = substr($key, ($i % strlen($key))-1, 1);
	      $char = chr(ord($char)+ord($keychar));
	      $result.=$char;
	   }
	   return base64_encode($result);
	}
	
	
	function decrypt($string, $key) {
	   $result = '';
	   $string = base64_decode($string);
	   for($i=0; $i<strlen($string); $i++) {
	      $char = substr($string, $i, 1);
	      $keychar = substr($key, ($i % strlen($key))-1, 1);
	      $char = chr(ord($char)-ord($keychar));
	      $result.=$char;
	   }
	   return $result;
	}
  
  
}
 
?>
