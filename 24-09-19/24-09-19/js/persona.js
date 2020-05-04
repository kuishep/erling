function inicio(){
	listado(1);
}

function listado(pag){
	$.ajax({
        url: 'lista.php',
        type: 'post',
        data: {'pag':pag},
        success: function( data ){
        	$("#registros").html(data);
        },
        error: function( jqXhr, textStatus, error ){
            console.log( error );
        }
    });
    paginacion();
}

function eliminar(id){
	$.ajax({
        url: 'eliminar.php',
        type: 'post',
        data: {'idpersona':id},
        success: function( data ){
        	if(data==1){
        		$("#divmsg").html("Registro eliminado");
        		listado(1);
        	} else {
        		$("#divmsg").html("Error al eliminar el registro");
        	}
			console.log(data);
        },
        error: function( jqXhr, textStatus, error ){
            console.log( error );
        }
    });
}

function paginacion(){
	$.ajax({
        url: 'paginacion.php',
        type: 'post',
        data: {},
        success: function( data ){
        	$("#divpaginas").html(data);
        },
        error: function( jqXhr, textStatus, error ){
            console.log( error );
        }
    });
}

function guardar(){
	var id = $("#idpersona").val();
	var nom = $("#txtnombres").val();
	var ape = $("#txtapellidos").val();
	var ema = $("#txtemail").val();
	if(id>0){
		// Update
		$.ajax({
	        url: 'actualizar.php',
	        type: 'post',
	        data: {"id":id, "jsnombres":nom, "jsapellidos":ape, "jsemail":ema},
	        success: function( data ){
				//console.log(data);
				if(data==1){
					$('#divfrm').modal('toggle');
					$("#divmsg").html("Actualizaci&oacute;n exitosa!");
					$("#divmsg").show();
					listado(1);
				} else {
					$("#divmsg").html("Error en la actualizaci&oacute;n");
				}           
	        },
	        error: function( jqXhr, textStatus, error ){
	            console.log( error );
	        }
	    });
	} else {
		// Insert
		$.ajax({
	        url: 'guardar.php',
	        type: 'post',
	        data: {"jsnombres":nom, "jsapellidos":ape, "jsemail":ema},
	        success: function( data ){
				//console.log(data);
				if(data==1){
					$('#divfrm').modal('toggle');
					$("#divmsg").html("Registro correcto");
					$("#divmsg").show();
					listado(1);
				} else {
					$("#divmsg").html("Error en el registro");
				}           
	        },
	        error: function( jqXhr, textStatus, error ){
	            console.log( error );
	        }
	    });
	}
}

function editar(id){
	$.ajax({
        url: 'editar.php',
        type: 'post',
        data: {"id":id},
        success: function( data ){
        	var datos = JSON.parse(data);
        	$("#idpersona").val(id);
        	$("#txtnombres").val(datos.nombres);
        	$("#txtapellidos").val(datos.apellidos);
        	$("#txtemail").val(datos.email);
        },
        error: function( jqXhr, textStatus, error ){
            console.log( error );
        }
    });
	$('#divfrm').modal('toggle');
}