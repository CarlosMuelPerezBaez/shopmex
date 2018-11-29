<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	  <script src="../bower_components/sweetalert/sweetalert.js"></script>
</head>
<body>
	
	<?php 

require "conexion.php";

$miConexion=new Conexion();

$conexiondb=$miConexion->conectar();

if(isset($_POST["login_username"]) && isset($_POST["login_password"])){
	$email=$_POST["login_username"];
	$pass=$_POST["login_password"];

	$queryUsers="SELECT * FROM usuarios WHERE email=:email and password=:passwd";
	$sentence=$conexiondb->prepare($queryUsers);

	$sentence->bindValue(":email",$email);
	$sentence->bindValue(":passwd",$pass);
	$sentence->execute();

	$nombreUsuario="";
	$cpUsuario="";
	$paisUsuario="";


	//$numeroRegistro=$sentence->rowCount();
	$i=0;

	while($registro=$sentence->fetch(PDO::FETCH_ASSOC)){
		if($registro["email"]==$email && $registro["password"]==$pass){
			$i++;
			$nombreUsuario=$registro["nombreCompleto"];
			$cpUsuario=$registro["cp"];
			$paisUsuario=$registro["pais"];
		}
	}

if($i>0){

	session_start();
	$_SESSION["usuario"]=$nombreUsuario;
	$_SESSION["pais"]=$paisUsuario;
	$_SESSION["cp"]=$cpUsuario;
	
	echo '<script>
					swal({
							title: 	"Bienvenido '.$nombreUsuario.' ",
							text:	"Da click en continuar",
							icon:	"success",
							"button":	"Continuar",
						}).then((value)=>{if(value){window.location="../accesoUsuarios/index.php";}});
				</script>';

}else{
	echo '<script>
					swal({
							title: 	"¡Usuario no registrado!",
							text:	"El usuario no se encuentra registrado",
							icon:	"error",
							"button":	"Continuar",
						}).then((value)=>{if(value){window.location="../login.php";}});
				</script>';
}

}





?>

</body>
</html>