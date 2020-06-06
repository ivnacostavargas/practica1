<!-- Login Tab Content -->
<div class="account-content">
	<div class="row align-items-center justify-content-center">
		<div class="col-md-7 col-lg-6 login-left">
			<img src="assets\img\login-banner.png" class="img-fluid" alt="Doccure Login">	
		</div>
		<div class="col-md-12 col-lg-6 login-right">
			<div class="login-header">
				<h3>Inicio de sesión</h3>
			</div>

			<form action="<?php echo base_url('dashboard') ?>" method="POST">
				<div class="form-group form-focus">
					<input type="text" name="username" class="form-control floating" required>
					<label class="focus-label">Usuario</label>
				</div>
				<div class="form-group form-focus">
					<input type="password" name="passwd" class="form-control floating" required>
					<label class="focus-label">Contraseña</label>
				</div>
				<div class="text-right">
					<a class="forgot-link" href="#">¿Has olvidado tu contraseña?</a>
				</div>
				<button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Iniciar sesión</button>
				<div class="login-or">
					<span class="or-line"></span>
					<span class="span-or">o</span>
				</div>
				<div class="text-center dont-have">¿Aun no tienes una cuenta? <a href="<?php echo base_url('registro'); ?>">Regístrate</a></div>
			</form>
		</div>
	</div>
</div>
<!-- /Login Tab Content -->