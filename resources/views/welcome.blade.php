@extends('layouts.app')

@section('content')

		<div class="slider agileits w3layouts">
			<div class="slider-1 agileits w3layouts">
				<ul class="rslides agileits w3layouts" id="slider1">
				<li>
					<img src="images/masia_portada.jpg" alt="Agileits W3layouts">
					<div class="layer agileits w3layouts"></div>
					<div class="caption agileits w3layouts">
						<h3>Bienvenido a <span>Masia Can Cruz</span></h3>
					</div>
				</li>
				<li>
					<img src="images/masia_portada2.jpg" alt="Foto masia">
					<div class="caption agileits w3layouts">
						<h3>Alojamiento rural</h3>
					</div>
				</li>
				<li>
					<img src="images/masia_portada3.jpg" alt="Foto parque Montseny">
					<div class="caption agileits w3layouts">
						<h3>Parque Natural Montseny</h3>
					</div>
				</li>
				<li>
					<img src="images/masia_portada4.jpg" alt="Foto masia">
					<div class="caption agileits w3layouts">
						<h3>En plena naturaleza</h3>
					</div>
				</li>
				<li>
					<img src="images/masia_portada5.jpg" alt="Agileits W3layouts">
					<div class="layer agileits w3layouts"></div>
					<div class="caption agileits w3layouts">
						<h3>Una experiencia única</h3>
					</div>
				</li>
			</ul>
			</div>
		</div>

		<div class="clearfix"></div>

	</div>

	<div class="projects agileits w3layouts">
		<div class="container">

			<div class="col-md-8 col-sm-8 projects-grid agileits w3layouts projects-grid1 wow slideInLeft">

				<div class="slider-2 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider2">
						<li>
							<img src="images/inicio/puerta1.jpg" alt="Puerta">
						</li>
						<li>
							<img src="images/inicio/masia_portada5.jpg" alt="Foto de masia">
						</li>
					</ul>
				</div>

				<div class="slider-3 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider3">
						<li>
							<img src="images/inicio/cocina.jpg" alt="Foto cocina">
						</li>
						<li>
							<img src="images/inicio/ventana.jpg" alt="Foto ventana">
						</li>
					</ul>
				</div>

			</div>

			<div class="col-md-4 col-sm-4 projects-grid agileits w3layouts projects-grid2 wow slideInRight">
				<h1>Proyecto y Reconstruccion</h1>
				<h4>Recuperación de la Masía</h4>
				<div class="h4-underline agileits w3layouts wow slideInLeft"></div>
				<p>El proyecto de recuperación de la Masía de Can Planes y su entorno se ha hecho con el antiguo principio de la masía, es decir, con la autogestión de los recursos propios y de los alrededores.</p>
				<a class="agileits w3layoutswow slideInLeft" href="#">Leer mas <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>

		</div>
	</div>

	<div class="projects agileits w3layouts">
		<div class="container">
			<div class="col-md-4 col-sm-4 projects-grid agileits w3layouts projects-grid2 wow slideInRight">
				<h1>Alimentos</h1>
				<h4>Cocina Ecologica</h4>
				<div class="h4-underline agileits w3layouts wow slideInLeft"></div>
				<p>Elaboramos las comidas con recetas sencillas y saludables, dando el mayor protagonismo a los sabores originales que nos dan los productos de excepcional calidad que disponemos: "una buena verdura", "un buen pan con tomate", "un buen arroz con verduras", "unas buenas legumbres", "unas buenas tostadas con mermelada para el desayuno", y "buenos vinos y corpinnat del Penedès".</p>
				<a class="agileits w3layoutswow slideInLeft" href="{{route ('cuisine')}}">Leer mas <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
			</div>

			<div class="col-md-8 col-sm-8 projects-grid agileits w3layouts projects-grid1 wow slideInLeft">

				<div class="slider-2 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider2">
						<li>
							<img src="/images/cocina/img_20170812_1338251.jpg" alt="Plato de comida">
						</li>
						<li>
							<img src="images/cocina/img_20160913_115154.jpg" alt="Foto huerta">
						</li>
						<li>
							<img src="images/cocina/img_20180920_121234.jpg" alt="Foto cosecha">
						</li>

					</ul>
				</div>

				<div class="slider-3 agileits w3layouts">
					<ul class="rslides agileits w3layouts" id="slider3">
						<li>
							<img src="images/cocina/img_4480_lowres.jpg" alt="Foto vino sobre mesa">
						</li>
						<li>
							<img src="images/cocina/img_20170910_130651.jpg" alt="Foto cebollas y tomates">
						</li>
						<li>
							<img src="images/cocina/img_20160808_224834.jpg" alt="Foto plato">
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>


@endsection
