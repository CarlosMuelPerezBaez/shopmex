<?php /**
 * SE CIERRA LA SESION ACTUAL, Y SE DESTRUYE.
 */
 ?>
<?php session_start(); session_destroy(); header("location:../index.php"); ?>
