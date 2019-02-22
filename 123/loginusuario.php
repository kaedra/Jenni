<?php
session_start();
// $_SESSION[] is not defined!!
// include, require, require_once
// todas las formas de incluir archivos son validas
// a partir de PHP 7 se recomienda require_once
// proyectos/loginusuario.php
// encargado de verificar si el usuario debe ingresar o no al sistema... 
require_once('funciones/conexion.php');

// 1. almacenar en variables la informacion que llega de login.php
// usuario,password
$usuario = $_POST['usuario'];
$password = $_POST['password'];
//2. verificacion con isset y empty
if(isset($usuario) && !empty($usuario) && isset($password) && !empty($password)){
	// entra a este if si ingreso todos lso datos (usuario y contraseña)
	$queryLogin = "SELECT * from usuarios where usuario='$usuario' and password='$password'";
	$resultado = mysqli_query($conexion,$queryLogin) or die(mysqli_error($conexion));

	$numeroUsuarios = mysqli_num_rows($resultado);

	if($numeroUsuarios > 0){
		// EL USUARIO SE LOGUEA CORRECTAMENTE
		// $_SESSION['idUsuario'] = $id;
		// fetch_array 
		// mysqli_fetch_array -> vectores asociativos o componentes numericas
		$datosUsuario = mysqli_fetch_array($resultado);
		$_SESSION['idUsuario'] = $datosUsuario['id'];
		// CADA USUARIO TIENE UNA SESION UNICA
		// session_destroy();
		header("Location: index.php");
		// Una vez creada la sesion llamada idUsuario que tiene el valor unico del id del usuario que se logueo vamos a redirigir a la persona a index.php y ahi vamos a haer una tabla que muestre todos los usuarios existentes en el sistema


		// mysqli_fetch_assoc($resultado) solamente se puede acceder mediante nombre de los campos de la tabla
		// array posiciones [0] => "tomato", [1] => cebollo 



		// el valor de la sesion no puede ser estatico
		// variable ... 
	} else {
		// usuario o contraseña incorrecto
	}
}

// 3.

// VARIABLE ¡SUPERGLOBAL!
// La podemos pasar de pagina en pagina
// Cookies -> se guardan datos / archivos de navegacion.
 // Desventaja de usar cookies -> navegador. Robaban las cookies de una persona 

 // ACCESOS, TARJETAS, ETC (end of thinking capacity)
 // SERVIDOR ... Compras de un carrito, accesos a un sitio, contraseñas etc
 // esta encriptada (no viaja en texto plano) 
// md5() algoritmo propio
// PHP tiene sus propia variable de sesion y es un array asociativo llamado $_SESSION[]
?>

