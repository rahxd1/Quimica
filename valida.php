<?php
session_start();
include("Conexion.php");
$con = conecta();
$cod = $_GET['codigo'];
$contra = $_GET['pass'];


$sql = "SELECT * FROM usuario,contrase WHERE id_usuario='$cod' AND contra='$contra'";
$res = mysql_query($sql, $con);
$num = mysql_num_rows($res);

if ($num ==1){
	$id = mysql_result($res,0,"id_usuario");
	$nombre = mysql_result($res,0,"nombre");

	$_SESSION['id_user']=$id;
	$_SESSION['nombre']=$nombre;
	$pagina = 'index.php?seccion=0';
	}
	else{
		$_SESSION['mensaje']="Usuario no encontrado";
		$pagina = 'index.php?no_encontrad_ousuario';
		}
		
			

	
header("Location:$pagina");

echo $nom;
echo $contra;

?>