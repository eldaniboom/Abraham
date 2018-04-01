<?php $__env->startSection('content'); ?>

	<div class="navbar-wrapper">
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<!-- Responsive navbar -->
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
					<h1 class="brand"><a href="index.html">Abraham Star1</a></h1>
					<!-- navigation -->
					<nav class="pull-right nav-collapse collapse">
						<ul id="menu-main" class="nav">
							<li><a title="team" href="#about">Que es Abraham</a></li>
							<li><a title="services" href="#services">Servicios</a></li>
							<li><a title="works" href="#works">Reportes</a></li>
							<li><a title="blog" href="#blog">Manual</a></li>
							<li><a title="contact" href="#contact">Contacto</a></li>
							<li><a href="page.html">Registro</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>

	<!-- end spacer section -->
	<!-- section: contact -->
	<section id="contact" class="section green">
		<div class="container">
			<h4>Crear Iglesia</h4>
			<?php if(session('successMsg')): ?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>!Muy Bien!</strong> <?php echo e(session('successMsg')); ?>

					</div>
			<?php endif; ?>
			<p>
				En este formulario puedes crear una nueva Iglesia.
			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">

						<form action="/abraham1/public/church" method="post" role="form">
							<?php echo e(csrf_field()); ?>


              <?php if(count($errors) > 0): ?>

							<div class="alert alert-error">
					     	<button type="button" class="close" data-dismiss="alert">&times;</button>
					    	<strong>!Hay Errores!</strong> Corrige los errorres y envia de nuevo.

							 <ul>
                  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<li><?php echo e($error); ?></li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							 </ul>
					 	   </div>

							<?php endif; ?>

							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="nombre" id="nombre" placeholder="Nombre Iglesia" value="<?php echo e(old('nombre')); ?>" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="nit" id="nit" placeholder="NIT" value="<?php echo e(old('nit')); ?>" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="pastor" id="pastor" placeholder="Pastor" value="<?php echo e(old('pastor')); ?>" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="celular" id="celular" placeholder="Celular" value="<?php echo e(old('celular')); ?>" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="direccion" id="direccion" placeholder="Direccion" value="<?php echo e(old('direccion')); ?>" />
										<div class="validation"></div>
									</div>

								</div>

								<div class="span6">

									<div class="field your-name form-group">
										<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" value="<?php echo e(old('ciudad')); ?>" />
										<div class="validation"></div>
									</div>

									<div class="field your-name form-group">
										<input type="text" name="pais" id="pais" placeholder="Pais" value="<?php echo e(old('pais')); ?>" />
										<div class="validation"></div>
									</div>

									<div class="field your-name form-group">
										<input type="text" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha de Inicio: AAAA-MM-DD" value="<?php echo e(old('fecha_inicio')); ?>" />
										<div class="validation"></div>
									</div>


									<div class="field your-email form-group">
										<input type="text" name="email" id="email" placeholder="Email" value="<?php echo e(old('email')); ?>" />
										<div class="validation"></div>
									</div>

									<input type="submit" value="Enviar Iglesia" class="btn btn-theme pull-left">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>