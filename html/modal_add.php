<div id="addProductModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_product" id="add_product">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Usuario</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label for="code">Numero de Control:</label>
							<input type="text" name="code"  id="code" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="name">Nombre:</label>
							<input type="text" name="name" id="name" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="category">Apellido:</label>
							<input type="text" name="category" id="category" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="stock">Correo:</label>
							<input type="email" name="stock" id="stock" class="form-control" required>
						</div>
						<div class="form-group">
							<label for="price">Telefono:</label>
							<input type="text" name="price" id="price" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>