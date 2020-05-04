function enviar(){
	var nom = document.getElementById("txtnombres").value;
	var ape = document.getElementById("txtapellidos").value;
	var ema = document.getElementById("txtemail").value;
	$.ajax({
        url: 'data.php',
        type: 'post',
        data: {"jsnombres":nom, "jsapellidos":ape, "jsemail":ema},
        success: function( data ){
			console.log(data);
			if(data==1){
				$("#resultado").html("Registro correcto");
			}           
        },
        error: function( jqXhr, textStatus, error ){
            console.log( error );
        }
    });
}