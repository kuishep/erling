<?php
session_start();
if(!isset($_SESSION['idusuario'])) header("location: index.html");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Persona</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/persona.js"></script>
	<script type="text/javascript">
		window.load = inicio();
	</script>
</head>
<body>
<div class="container">
	<h1>Persona</h1>
	<div>
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#divfrm">Nuevo</button>
	</div>
	<div id="divmsg" class="p-3 mb-2 bg-warning text-dark" style="display: none;"> </div>
	<div>
		<div class="modal fade" id="divfrm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Persona</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        <form>
		        	<input type="hidden" name="idpersona" id="idpersona" value="">
					<div class="form-group">
						<label for="txtnombres">Nombres</label>
						<input type="text" class="form-control" name="txtnombres" id="txtnombres">
					</div>
					<div class="form-group">
						<label for="txtapellidos">Apellidos</label>
						<input type="text" class="form-control" name="txtapellidos" id="txtapellidos">
					</div>
					<div class="form-group">
						<label for="txtemail">Correo Electr&oacute;nico</label>
						<input type="text" class="form-control" name="txtemail" id="txtemail">
					</div>
				</form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
		        <button type="button" class="btn btn-primary" onclick="guardar()">Guardar</button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div>
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombres</th>
					<th>Apellidos</th>
					<th>E-mail</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody id="registros">
				
			</tbody>
		</table>
	</div>
	<div id="divpaginas"></div>
</div>
</body>
</html>