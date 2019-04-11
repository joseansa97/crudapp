<?php
	if (empty($_POST['edit_id'])){
		$errors[] = "ID está vacío.";
	} elseif (!empty($_POST['edit_id'])){
	require_once ("../conexion.php");

    $prod_code = mysqli_real_escape_string($con,(strip_tags($_POST["edit_code"],ENT_QUOTES)));
	$prod_name = mysqli_real_escape_string($con,(strip_tags($_POST["edit_name"],ENT_QUOTES)));
	$prod_ctry = mysqli_real_escape_string($con,(strip_tags($_POST["edit_category"],ENT_QUOTES)));
	$stock = mysqli_real_escape_string($con,(strip_tags($_POST["edit_stock"],ENT_QUOTES)));
	$price = mysqli_real_escape_string($con,(strip_tags($_POST["edit_price"],ENT_QUOTES)));
	
	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE usuarios SET ncontrol='".$prod_code."', nombre='".$prod_name."', apellido='".$prod_ctry."', correo='".$price."', telefono='".$stock."' WHERE id='".$id."' ";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully
    if ($query) {
        $messages[] = "El usuario ha sido actualizado con éxito.";
    } else {
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
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