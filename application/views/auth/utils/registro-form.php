<!-- Login Tab Content -->
<div class="account-content">
	<div class="row align-items-center justify-content-center">
		<div class="col-md-7 col-lg-6 login-left">
			<img src="assets\img\login-banner.png" class="img-fluid" alt="Doccure Login">	
		</div>
		<div class="col-md-12 col-lg-6 login-right">
			<div class="login-header">
				<h3>Registro de usuarios</h3>
			</div>

			<form method="POST">
				<div class="form-group form-focus">
					<input type="text" name="name" class="form-control floating" required>
					<label class="focus-label">Nombre</label>
				</div>
				<div class="form-group form-focus">
					<input type="email" name="email" class="form-control floating" required>
					<label class="focus-label">Correo</label>
				</div>
				<div class="form-group form-focus">
					<input type="date" name="fecha_nacimiento" class="form-control floating" required>
					<label class="focus-label">Fecha de nacimiento</label>
				</div>
				<div class="form-group form-focus">
					<input type="text" name="fecha_nacimiento" minlength="10" class="form-control floating" pattern = "[0-9]{10,}" title='Solo introduce numeros' required>
					<label class="focus-label">Telefono</label>
				</div>
				<div class="form-group">
					<select class="form-control" required>
						<option disabled selected>-- Genero --</option>
						<option>Hombre</option>
						<option>Mujer</option>
					</select>
				</div>
				<div class="form-group form-focus">
					<input type="password" name="passwd" minlength="8" class="form-control floating" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Mínimo una mayúscula, Mínimo una minúscula, Mínimo un numero" required>
					<label class="focus-label">Contraseña</label>
				</div>
				<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Registrarme</button>
				
			</form>
		</div>
	</div>
</div>
<!-- /Login Tab Content -->