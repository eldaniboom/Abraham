@extends('layout.home')
@section('content')

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
			@if (session('successMsg'))
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>!Muy Bien!</strong> {{ session('successMsg')}}
					</div>
			@endif
			<p>
				En este formulario puedes crear una nueva Iglesia.
			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">

						<form action="/abraham1/public/church" method="post" role="form">
							{{ csrf_field() }}

              @if (count($errors) > 0)

							<div class="alert alert-error">
					     	<button type="button" class="close" data-dismiss="alert">&times;</button>
					    	<strong>!Hay Errores!</strong> Corrige los errorres y envia de nuevo.

							 <ul>
                  @foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
                  @endforeach
							 </ul>
					 	   </div>

							@endif

							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="nombre" id="nombre" placeholder="Nombre Iglesia" value="{{ old('nombre') }}" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="nit" id="nit" placeholder="NIT" value="{{ old('nit') }}" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="pastor" id="pastor" placeholder="Pastor" value="{{ old('pastor') }}" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="celular" id="celular" placeholder="Celular" value="{{ old('celular') }}" />
										<div class="validation"></div>
									</div>
									<div class="field your-name form-group">
										<input type="text" name="direccion" id="direccion" placeholder="Direccion" value="{{ old('direccion') }}" />
										<div class="validation"></div>
									</div>

								</div>

								<div class="span6">

									<div class="field your-name form-group">
										<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" value="{{ old('ciudad') }}" />
										<div class="validation"></div>
									</div>

									<div class="field your-name form-group">
										<input type="text" name="pais" id="pais" placeholder="Pais" value="{{ old('pais') }}" />
										<div class="validation"></div>
									</div>

									<div class="field your-name form-group">
										<input type="text" name="fecha_inicio" id="fecha_inicio" placeholder="Fecha de Inicio: AAAA-MM-DD" value="{{ old('fecha_inicio') }}" />
										<div class="validation"></div>
									</div>


									<div class="field your-email form-group">
										<input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}" />
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

@endsection
