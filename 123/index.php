<?php 

session_start();
// proyecto/index.php
//  el usuario solo podra visitar este sitio si esta logueado
//  si no esta definida la variable de sesion : nunca inicio sesion 
// isset() ->
if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])) {
	require_once('funciones/conexion.php'); // para poder hacer la consulta

	// si logueo con franco 1234 en loginusuario.php se crea una variable de sesion llamada idUsuario y se asigna el numero 5 correspondie al id de la tabla usuarios 
	// localhost/phpmyadmin
	$id = $_SESSION['idUsuario'];
	$queryUsuarios = "SELECT * from usuarios";
} else {
	header("Location:login.php");
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- bootstrap 4 table example -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="row">
		<a href="">Cerrar sesion</a>
	</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">password</th>
      
    </tr>
  </thead>
  <tbody>
  	<?php
  		$consulta = mysqli_query($conexion,$queryUsuarios) or die(mysqli_error($conexion));
  		// se guarda toda la info de la tabla
  		// $datos = mysqli_fetch_array($consulta);
  		// mientras la condicion del bucle se cumpla true se va a ejecutar ese bucle :D
  		// while($i < 10) { echo $i. "<br>"}

  		while($info = mysqli_fetch_array($consulta)){


  		?>
    <tr>
      <td><?php echo $info['id']; ?></td>
      <td><?php echo $info['usuario']; ?></td>
      <td><?php echo md5($info['password']); ?></td>
      <td><a href="editar.php?idEditar=<?php echo $info['id']; ?>">
      <i class="fas fa-pencil-alt"></i></a>
      

      </td>

    </tr>
    <?php
	}
	?>
<!-- md5() -->
<!--La contraseña suya facebook no la sabe-->
<!-- MD5,SHA1, SON IRREVERSIBLES!!!

	metasploit framework (escanear y penetrar computadoras)
	COMO MINIMO LA CONTRASEÑA TIENE QUE TENER UN VARCHAR(40)
	Las bases de datos tienen que tener una minima seguridad
--> 
  </tbody>
</table>
</div>
</body>
</html>
