<?php
$nombre = "Cedula del Profesor";
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
		<form action="buscar.php" class="" method="post">
			
			<div class="form-group">
				<div class="row">
					<div class="col-lg-6">
						<label class="sr-only" for="Cedula">Cedula: </label>
						<input class="form-control"type="text" name="Cedula" id="Cedula" placeholder=<?php echo "$nombre";?> >
					</div>
				</div>
			</div>
			<button class="btn btn-primary">Enviar</button>
		</form>
	</div>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>