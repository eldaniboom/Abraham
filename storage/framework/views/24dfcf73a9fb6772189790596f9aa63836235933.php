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
			<p>
				En este formulario puedes crear una nueva Iglesia.
			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>

						<form action="/abraham/public/church" method="post" role="form">

							<?php echo e(csrf_field()); ?>

							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="nombre" id="nombre" placeholder="Nombre Iglesia" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="nit" id="nit" placeholder="NIT" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="pastor" id="pastor" placeholder="Pastor" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="celular" id="celular" placeholder="Celular" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="direccion" id="direccion" placeholder="Direccion" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>




								</div>

								<div class="span6">

									<div class="field your-name form-group">
										<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>

									<div class="field your-name form-group">
										<input type="text" name="pais" id="pais" placeholder="Pais" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>

									<div class="field your-name form-group">
										<input type="text" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha de Inicio" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>

									<div class="field your-email form-group">
										<input type="text" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation"></div>
									</div>

									<input type="submit" value="Send message" class="btn btn-theme pull-left">
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