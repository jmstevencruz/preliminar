<?php
//include('conexion.php');
$conexion= new mysqli("localhost","root","","preliminar");
$consulta ='';
$cedula = $_POST['Cedula'];

if($conexion->connect_errno){
	echo 'Error en la conexion';
	exit;
}

$sql ="SELECT * FROM profesores WHERE cedula = $cedula";
if ($profesor = $conexion->query($sql)){
	if ($profesor==null)
	{
		echo "No se encuentra esa Cedula";
	}
	while ($profe = $profesor->fetch_assoc()) {
		//echo $profe ['cedula'] . " " . $profe ['codigo'] . " ". $profe ['nombre']  . " " .$profe ['apellido'] . " " . $profe ['profesion'] . " " . $profe ['interes']   ;
		$json = json_encode($profe);
	    //print_r($json);
	}
}


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Captura Profesor</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style/index_style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src='js/script.js'></script>

</head>
<body>
	
		<header>
		<nav>
			<ul>
				<a href=''><li>Inicio</li></a>
				<a href=''><li>Videos</li></a>
				<a href=''><li>Im&aacute;genes</li></a>
			</ul>
				
				<img id='logo' src='pictures/logo.png'>

			<ul>
				<a href=''><li>Youtube</li></a>
				<a href=''><li>Nosotros</li></a>
				<a href=''><li>Contacto</li></a>
			</ul>
		</nav>
	</header>

	<section id='banner'>
		
	</section>

	<section id='body'></section>





	<div class="container">
		<?php 
		print_r($json);
		?>
	</div>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>