<?php 

$conexion = mysqli_connect("localhost","root","","PWM_VERANO") or die("Problemas al conectar a la base de datos");


if(isset($_POST['usuario']) && isset($_POST['password'])) {

	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);

	$usuariosRegistrados = mysqli_query($conexion,"SELECT id,usuario from usuarios where usuario='$usuario'") or die(mysqli_error($conexion));

	$cantidadUsuarios = mysqli_num_rows($usuariosRegistrados);
	if($cantidadUsuarios > 0) {
		// usuario existente
		header("Location:registro.php?error=si");
		// header("Location: registro.php?error=si")
		// Cuando el usuario existe redirigirlo a registro.php pasando como parametro en la URL algo que indique hay un error
		// registro.php leer ese parametro por URL y mostrar un mensaje en un span con color (libre) que diga : el usuario existe
		// si no hay nada en la url que no diga: undefined error bla bla 
		// isset y empty
	} else {

	$registro = mysqli_query($conexion,"INSERT into usuarios (usuario,password) values ('$usuario','$password') ") or die(mysqli_error($conexion));
	if($registro){ // si la consulta salio bien 
		echo "El usuario ".$usuario." se registro correctamente";
	} else {
		echo "Ocurrio un error, intente de nuevo + tarde";
	}
}



} else {
	echo "debes completar todos los inputs para seguir";
}

?>