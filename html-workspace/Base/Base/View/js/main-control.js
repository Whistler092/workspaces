$(window).load(function(){
	
	if ($.browser.msie){
    	window.location.href =  'iexplore.html';
	}
	
	//Menu Desplegable
	$('.dropdown-toggle').dropdown();
	$('.dropdown-menu').find('form').click(function (e) {
	        e.stopPropagation();
	});	
	

	$(".About").click(function(){
		$("#divAbout").load("Controller/php/about.php?action=About",function(){
			$("#divAbout").css("display","");
			$("#main").css("display","none");
		});
		   

	});
	

	$("#btnLogin").click(function(){
		    var sbLogin=$("#username").val();
			var sbPassword=$("#password").val();
			
			$.ajax({
				type: "POST",
				url: "Controller/php/login.php?action=Authentication",
				dataType: 'html',
				data: "sbLogin="+sbLogin+"&sbPassword="+sbPassword,
				beforeSend:function(){
				},
				success: function(Data){         
					if(Data === "0"  ){
						
				    	$("#main").load("Controller/php/modulo1.php?action=GetModulo1",function(){
							
				     	});
						
					 }else{
						 alert("Ingreso Fallido");
						 window.location.href = "index.php"
						 
		    		 }
	   		  
				},
				complete: function(){
	
				}
		     });//$.ajax({
	
	 });//$("#btnLogin").click(function(){

	
});


function action_CambioClaveCeros(){
	var sbClave=$("#txtClaveII").val();
	var sbNuevaClave=$("#txtNuevaClaveII").val();
	var sbClaveCompara=$("#txtRepitaClaveII").val();
	if(sbNuevaClave === sbClaveCompara){
		 $.ajax({
				type: "POST",
				url: "Controller/php/recursos.php?action=CambioClave",
				dataType: 'html',
				data: "Clave="+sbClave+'&NuevaClave='+sbNuevaClave,
				beforeSend:function(){

				},
				success: function(Data){
					$("#txtClaveII").val("");
		            $("#txtNuevaClaveII").val("");
		            $("#txtRepitaClaveII").val("");
		            
		            var sbOpcion = Data;
				    var nuIndex = sbOpcion.indexOf("-")
				    var sbResponse  = sbOpcion.substring(0,nuIndex);
					var sbMensaje = sbOpcion.substring(nuIndex+1);					
					alert(sbMensaje);
					alert("sbResponse"+sbResponse);
					if(sbResponse == "0"){
						alert("Hola");
						$("#idCambioClave").dialog("close");
					}
	                
	                
				},
				complete: function(){

				}
		 });
		
	}else{
		alert("La nueva clave y la confirmaci\xf3n no coinciden!!!");
		
	}
}//action_CambioClaveCeros