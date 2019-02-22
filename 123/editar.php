<?php
session_start();
if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario']) && isset($_GET['idEditar']) && !empty($_GET['idEditar'])) {
	require_once('funciones/conexion.php');
	$idUsuario =  $_GET['idEditar'];
	$flagEdicion = 1;
	$datosUsuario= mysqli_query($conexion, "SELECT * from datos where idUsuario = '$idUsuario'") or die (mysqli_error($conexion));
	$datosFinalUsuario = mysqli_fetch_array($datosUsuario);
	$nombre= $datosFinalUsuario['Nombre'];
	$apellido=$datosFinalUsuario['Apellido'];
	$correo=$datosFinalUsuario['Correo'];
	
} else {
	header("location:registro.php");

}

?>



<html>

	<head>
		

	</head>

<body>


	<?php echo "Voy a editar al usuario: " .$idUsuario; ?>

	<form method="post" action="editarusuario.php">
		Nombre
		<input type="text" name="nombre" value="<?php
		echo $apellido; ?>">
		<br>
		Apellido
		<input type="text" name="apellido" value="<?php
		echo $apellido; ?>">
		<br>
		Correo
		<input type="email" name="correo" value="<?php
		echo $correo; ?>">
		<br>

		<button type="submit">Actualizar</button>

	</form>
</body>

</html>