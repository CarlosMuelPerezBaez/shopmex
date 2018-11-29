
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar</title>

	<script src="bower_components/sweetalert/sweetalert.js"></script>
</head>
<body>
	
	<?php 
		include "connect/conexion.php";

		$miconexion=new Conexion();
		$conexionDB=$miconexion->conectar();
		//$conexionDB=new PDO("mysql:host=".DB_HOST.";"."dbname=".DB_NAME."",DB_USER,DB_PASS);

			$nombreUsuario=$_POST["nombreC"];
			$emailUsuario=$_POST["email"];
			$passwordUsuario=$_POST["password"];
			$cpUsuario=$_POST["cp"];
			$paisUsuario=$_POST["pais"];

		try{
			$queryRegistrar="INSERT INTO usuarios(nombreCompleto,email,cp,pais,password)VALUES(:nombreCompleto,:email,:cp,:paisu,:password)";
			$sentence=$conexionDB->prepare($queryRegistrar);

			$sentence->execute(array(":nombreCompleto"=>$nombreUsuario,
									 ":email"=>$emailUsuario,
									 ":cp"=>$cpUsuario,
									 ":paisu"=>$paisUsuario,
									 ":password"=>$passwordUsuario));

				echo '<script>
					swal({
							title: 	"Registro Existoso!",
							text:	"Se redireccionara a la pagina principal",
							icon:	"success",
							"button":	"Continuar",
						}).then((value)=>{if(value){window.location="login.php";}});
				</script>';
		}catch(Exception $ex){
			die("Error!!".$ex->getMessage()."Linea: ".$ex->getLine());
		}finally{
			$miconexion=null;
		}

		


	?>

</body>
</html>