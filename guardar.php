<?php
//include 'conexion.php';
//		$cedula =$_POST["cedula"];
//		$nombre =$_POST["nombre"];
//		$telefono =$_POST["telefono"];
//		$correo=$_POST["correo"];
//		$user=$_POST["user"];
//		$pass= $_POST["pass"];

//		$insertarDatos = "INSERT INTO registro (cedula, nombre, telefono, correo, user, pass) VALUES ('$cedula',
//													   '$nombre',
//													   '$telefono',
//													   '$correo',
//													   '$user',
///													   '$pass')";
//
//		$ejecutarInsertar = mysqli_query($conexion, $insertarDatos);
//
//		if(!$ejecutarInsertar){
//			echo "<script> alert('correcto'); location.href = 'index.php'; </script>";
//		}else{
//			echo "<script> alert('incorrecto'); location.href = 'index.php'; </script>";
//		}
?>


<?php
 include ("conexion.php");

 if(isset($_POST['cedula']) && !empty($_POST['cedula']) &&
	isset($_POST['nombre']) && !empty($_POST['nombre']) && 
	isset($_POST['telefono']) && !empty($_POST['telefono']) &&
	isset($_POST['correo']) && !empty($_POST['correo']) &&
	isset($_POST['user']) && !empty($_POST['user']) &&
	isset($_POST['pass']) && !empty($_POST['pass'])){
		$con=mysqli_connect($host,$user,$pass,$db);
		mysqli_query ($con, ("INSERT INTO registro (cedula, nombre, telefono, correo, user, pass) VALUES ('$cedula','$nombre','$telefono','$correo','$user','$pass')"));
		//echo "<script> alert('correcto'); location.href = 'index.php'; </script>";
	}else{
		//echo "<script> alert('incorrecto'); location.href = 'index.php'; </script>";
	}


