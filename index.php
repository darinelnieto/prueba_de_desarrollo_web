<?php
include('conexion.php');
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width= divice-width, user-scalable=no, initial-scale=1.0, maximum-sale=1.0,minimum-scale=1.0">
	<title>prueba desarrollo web</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row">
				<div class="col-12 text-center mt-5">
					<!-- logo -->
					<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png" alt="" class="imgCabeza">
				</div>
			</div>
		</div>
	</header>

	<main>
		<section>
			<div class="container">
				<div class="row">
						<!-- titulo -->
					<div class="col-12 text-center">
						<h1>Prueba de desarrollo Sigma</h1>
					</div>
					<!-- parrafo de la página -->
					<div class="col-12 text-center mt-3 col-lg-8 offset-lg-2">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, beatae atque dolorum impedit provident, veritatis inventore similique, deserunt suscipit quae quas nobis temporibus tenetur. Odit voluptatibus vel cumque, voluptate nemo.</p>
					</div>
				</div>
			</div>
		</section>
		<!-- imagen principal y formulario -->
		<section>
			<div class="container mt-4">
				<div class="row">
					<div class="col-12 text-center col-lg-5 offset-lg-1 text-lg-right">
						<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-image.png" alt="" class="imgPrincipal">
					</div>
					<div class="col-12 col-lg-5">
						<form class="card" method="POST">
							<div class="form-group mt-5 contenidoFormulario">
								<label for="">Departamento*</label>
								<select class="custom-select" name="Departamento" id="departamento" maxlength="30"  required>
									
   								</select>
							</div>
							<div class="form-group contenidoFormulario">
								<label for="">Ciudad*</label>
								<select class="custom-select" name="ciudad" id="ciudad" maxlength="50"  required>
									
   								</select>
							</div>
							<div class="form-group contenidoFormulario">
								<label for="">Nombre*</label>
								<input type="text" class="form-control" name="name" placeholder="Pepito de jesus" maxlength="50"  required>
							</div>
							<div class="form-group contenidoFormulario">
								<label for="">Correo*</label>
								<input type="email" class="form-control" name="email" placeholder="Pepitodejesus@gmail.com" maxlength="30"  required>
							</div>
							<div class="form-group text-center mb-5">
								<input type="submit" class="btn btn-danger btnSubmit" id="submit">
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="js/miscript.js"></script>
</html>