<?php
// conección a la base de datos
$connection = mysqli_connect('178.128.146.252', 'admin_sigmauser', 'pfaDKIJyPF');
if (!$connection){
    die("Fallo la conexion con la base de datos" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'admin_sigmatest');
if (!$select_db){
    die("Database seleccionada ha fallado" . mysqli_error($connection));
}

  if (!$connection->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $connection->error);
    }

// recopila la informacion del formulario para enviarla a la base de datos
if((isset($_POST['Departamento']) && !empty($_POST['Departamento']))
&& (isset($_POST['ciudad']) && !empty($_POST['ciudad']))
&& (isset($_POST['name']) && !empty($_POST['name']))
&& (isset($_POST['email']) && !empty($_POST['email']))){
// envio de la informacion recopilada de el formulario a la base de datos
	$name = $_POST['name'];
	$email = $_POST['email'];
	$state = $_POST['Departamento'];
	$city = $_POST['ciudad'];
		//inserta los datos en la base de datos 
	$query = "INSERT INTO `contacts` (name, email, state, city) VALUES ('$name', '$email', '$state', '$city')";
		$result = mysqli_query($connection, $query);
		// modal que retorna el exito del envio del formulario a la base de datos
		echo '<div class="container-fluid" id="modal">
				<div class="row">
					<div class="col-12 col-md-6 offset-md-3 text-center" id="contenidoModal">
						<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png" alt="" class="imgCabeza">
						<h4>Tu información ha sido recibida satisfactoriamente</h4>
						<a href="#" class="cerrarModal">X</a>
					</div>
				</div>
		</div>';
}
?>