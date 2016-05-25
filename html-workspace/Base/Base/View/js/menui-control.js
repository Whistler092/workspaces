$('.dropdown-toggle').dropdown();
$('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
});	
	
function action_CambioClave(){
	
	var sbPassword=$("#txtClave").val();
	var sbNewPassword=$("#txtNuevaClave").val();
	var sbComparePassword=$("#txtRepitaClave").val();
	if(sbNewPassword === sbComparePassword){
		 $.ajax({
				type: "POST",
				url: "Controller/php/recursos.php?action=CambioClave",
				dataType: 'html',
				data: "Clave="+sbPassword+'&NuevaClave='+sbNewPassword,
				beforeSend:function(){

				},
				success: function(Data){
					$("#txtClave").val("");
		            $("#txtNuevaClave").val("");
		            $("#txtRepitaClave").val("");
		            
		            var sbOpcion = Data;
				    var nuIndex = sbOpcion.indexOf("-")
				    var sbResponse  = sbOpcion.substring(0,nuIndex);
					var sbMensaje = sbOpcion.substring(nuIndex+1);					
					alert(sbMensaje);
				},
				complete: function(){

				}
		 });
		
	}else{
		alert("La nueva clave y la confirmaci\xf3n no coinciden!!!");
		
	}
	 
}


$(".classCierraSesion").click(function(){
	 window.location.href = "index.php"
	
});

