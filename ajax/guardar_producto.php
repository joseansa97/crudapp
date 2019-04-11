<?php
	if (empty($_POST['name'])){
		$errors[] = "Ingresa el nombre del producto.";
	} elseif (!empty($_POST['name'])){
	require_once ("../conexion.php");
	
    $prod_code = mysqli_real_escape_string($con,(strip_tags($_POST["code"],ENT_QUOTES)));
	$prod_name = mysqli_real_escape_string($con,(strip_tags($_POST["name"],ENT_QUOTES)));
	$prod_ctry = mysqli_real_escape_string($con,(strip_tags($_POST["category"],ENT_QUOTES)));
	$stock = mysqli_real_escape_string($con,(strip_tags($_POST["stock"],ENT_QUOTES)));
	$price = mysqli_real_escape_string($con,(strip_tags($_POST["price"],ENT_QUOTES)));	

	// REGISTER data into database
    $sql = "INSERT INTO usuarios(ncontrol, nombre, apellido, correo, telefono) VALUES ('$prod_code','$prod_name','$prod_ctry','$stock','$price')";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El usuario ha sido guardado con éxito.";
    } else {
        $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
    }
		
	} else 
	{
		$errors[] = "desconocido.";
	}
if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}
?>			