<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Login de usuarios</title>
</head>
<body>

	<div class="container">
	
		<div class="row">
			<div class="col-12">
				<form method="post" action="loginusuario.php">
				<div class="form-group">
					Usuario: 
					<input type="text" name="usuario" class="form-control">
	
				</div>
				<div class="form-group">
					Contraseña: 
					<input type="password" name="password" class="form-control">
					
				</div>
				<button type="submit" class="btn btn-dark btn-block">Registrar</button>
			</form>
			</div>

		</div>

	</div>
</body>
</html>