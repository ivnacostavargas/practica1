<!-- Header -->
<header class="header">
	<nav class="navbar navbar-expand-lg header-nav">
		<div class="navbar-header">
			<a id="mobile_btn" href="javascript:void(0);">
				<span class="bar-icon">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</a>
			<a href="<?php echo base_url() ?>" class="navbar-brand logo">
				<?php echo APP_NAME; ?>
			</a>
		</div>
		<div class="main-menu-wrapper">
			<ul class="main-nav">
				<!-- Para dispositivos moviles -->
				<li class="login-link nav-item">
					<a class="nav-link" href="<?php echo base_url('login') ?>">Iniciar Sesión</a>
				</li>
			</ul>		 
		</div>

		<ul class="main-nav header-navbar-rht">
			<li class="login-link-2 nav-item">
				<a class="nav-link" href="<?php echo base_url('login') ?>">Iniciar Sesión</a>
			</li>
		</ul>

	</nav>
</header>
<!-- /Header