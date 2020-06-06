<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MekaDesign - Inicio</title>
	
	<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- MetaDatos -->
	<meta name="author" content="Paúl Pichón - MekaDesign" />
	<meta name="description" content="En MekaDesign afilamos el performance de tu negocio desarrollando soluciones digitales para ti, activando tu presencia en linea para conectar con clientes inmersos en esta “nueva” realidad."/>
	<meta name="keywords" content="MekaDesign, desarrollo web, programacion, diseño Web, administracion redes sociales, Tlaxcala, sitios web, PWA, progressive web app, sistemas web, aplicaciones moviles, ecommerce, diseño grafico, diseño de logotipos, MekaDesign agencia, México, MekaDesign Tlaxcala, contenido creativo, social media"/>
	<meta name="robots" content="index, follow"/>
	<!-- CAMBIAR  LINK BASE -->
	<!-- <base href="http://www.pruebas.mekadesign.mx"> -->
	<!-- BOOTSTRAP 4-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- FontAwesone -->
	<link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
	<!-- GoogleFonts -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400&display=swap" rel="stylesheet">
	<!-- ESTILOS PROPIOS -->
	<link rel="stylesheet" type="text/css" href="vistas/css/index.css"/>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-168678866-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-168678866-1');
	</script>


</head>
<body>

	<!-- menú -->
	<?php include "modulos/menu.php"; ?>
	<!-- fin menú -->

	<div id="container" class="wrapper">
		<ul id="scene" class="scene"	data-friction-x="0.1"	data-friction-y="0.1"	data-scalar-x="25" data-scalar-y="15">
			<li class="layer" data-depth="0.00"></li>
			<!-- IMAGEN 17 IMAGEN BACKGORUND -->
			<li class="layer" data-depth="0.04"><div class="background"></div></li>
			<!-- IMAGEN 16 IMAGEN CHARRO -->
			<li class="layer" data-depth="0.10"><div class="charro"></div></li>
			<!-- IMAGEN 15 IMAGEN MUJER -->
			<li class="layer" data-depth="0.12"><div class="mujer"></div></li>
			<!-- IMAGEN 14 SOL -->
			<li class="layer" data-depth="0.16"><div class="sol"></div></li>
			<!-- IMAGEN 13 CRUZ -->
			<li class="layer" data-depth="0.20"><div class="cruz"></div></li>
			<!-- IMAGEN 14 CALABERA MUJER -->
			<li class="layer" data-depth="0.24"><div class="calaberaMujer"></div></li>
			<!-- IMAGEN 11 VELAS -->
			<li class="layer" data-depth="0.28"><div class="velas"></div></li>
			<!-- IMAGEN 10 CALAVERA ROSA -->
			<li class="layer" data-depth="0.32"><div class="calaveraRosa"></div></li>
			<!-- IMAGEN 9 LUCEROS -->
			<li class="layer" data-depth="0.34"><div class="luceros"></div></li>
			<!-- IMAGEN 8 LUCEROS 2-->
			<li class="layer" data-depth="0.38"><div class="luceros2"></div></li>
			<!-- IMAGEN 7 COLGANTES1-->
			<li class="layer" data-depth="0.35"><div class="colgantes1"></div></li>
			<!-- IMAGEN 6 COLGANTES2-->
			<li class="layer" data-depth="0.46"><div class="colgantes2"></div></li>
			<!-- IMAGEN 5 HUMO-->
			<li class="layer" data-depth="0.55"><div class="humo"></div></li>
			<!-- IMAGEN 4 SAHUMERIO-->
			<li class="layer" data-depth="0.45"><div class="sahumerio"></div></li>
			<!-- IMAGEN 3 COLGANTES3-->
			<li class="layer" data-depth="0.58"><div class="colgantes3"></div></li>
			<!-- IMAGEN 2 LEYENDA-->
			<li class="layer" data-depth="0.62"><div class="leyenda"></div></li>
			<!-- IMAGEN 1 LOGO-->
			<li class="layer" data-depth="0.36"><div class="logo"></div></li>
			<!-- IMAGEN 0 FONDO ABAJO-->
			<li class="layer" data-depth="0.00"><div class="cubrir"></div></li>

		</ul>

	</div>

	<!-- PARRAFO -->
	<section class="parrafoFrase">
		<div class="container-fluid text-center">
			<div class="contenedorFraseLink mt-5 mb-5">
				<h1 class="frase">Afilamos el performance de tu negocio
					desarrollando soluciones digitales para ti,
					activando tu presencia en linea
					para conectar con clientes 
					inmersos en esta “nueva” realidad.
				</h1>

				<a class="sobreNosotrosTexto" href="nosotros">Sobre Nosotros</a>
				<hr class="lineaBajoLink">
			</div>
		</div>
	</section>

	<!-- Servicios -->	
	<section class="servicios pt-4 pb-5" style="background-color: black;">
		<div class="container-fluid">
			<div class="demo-3">
				<h1 class="tituloServicios text-center mt-5 mb-5">Servicios</h1>
				<div class="row">
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item" >
								<div class="glitch glitch--style-1">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Sitios Web<span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-2">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Sistemas Web<span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--vertical glitch--style-3">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Aplicaciones Móviles<span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-4">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">PWA (Progressive Web App) <span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-5">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Ecommerce<span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-6">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Diseño Web <span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-7">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Diseño Gráfico <span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-8">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Administración de Redes Sociales <span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-9">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Diseño de Logotipo<span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-10">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Presentación Dinámica<span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-11">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Diseño de Tarjetas de Presentación<span>Ver más</span></h2>
							</div>
						</a>
					</div>
					<div class="col-xl-6 col-md-6">
						<a href="proyectos">
							<div class="grid__item">
								<div class="glitch glitch--style-12">
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
									<div class="glitch__img"></div>
								</div>
								<h2 class="grid__item-title">Presentación de Power Point<span>Ver más</span></h2>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Marcas -->
	<section class="marcas mt-5 mb-5 pt-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-MCITechnology.png" alt="MekaDesign Logo MCITechnology" title="MekaDesign Logo MCI Technology">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-Impulsoconsultoria.png" alt="Meka Design - Logo - Impulso consultoria" title="Meka Design - Logo - Impulso consultoria">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-CANACOTlaxcala.png" alt="MekaDesign Logo CANACO Tlaxcala" title="MekaDesign Logo CANACO Tlaxcala">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-FemmeDor.png" alt="MekaDesign Logo FemmeDor" title="MekaDesign Logo Femme Dor">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-GuiaComercialApizaco.png" alt="MekaDesign Logo Guia Comercial Apizaco" title="MekaDesign Logo Guia Comercial Apizaco">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-GulaGourmet.png" alt="MekaDesign Logo GulaGourmet" title="MekaDesign Logo Gula Gourmet">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-HacedoresMexico.png" alt="MekaDesign Logo Hacedores Mexico" title="MekaDesign Logo Hacedores Mexico">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-ProPeninsular.png" alt="Meka Design Logo ProPeninsular" title="Meka Design Logo ProPeninsular">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-Inamiki.png" alt="Meka Design Logo Inamiki" title="Meka Design Logo Inamiki">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-LaDoña.png" alt="MekaDesign Logo LaDoña" title="MekaDesign Logo La Doña">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-MaxShop.png" alt="MekaDesign Logo MaxShop" title="MekaDesign Logo Max Shop">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-RafaelGalva.png" alt="MekaDesign Logo RafaelGalva" title="MekaDesign Logo Rafael Galva">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-RealEventosyTurismo.png" alt="MekaDesign Logo Real Eventos y Turismo" title="MekaDesign Logo Real Eventos y Turismo">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-ElMuraldelPo.png" title="Meka Design El Mural de los Poblanos">
				</div>
				<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 text-center mb-5 text-center">
					<img loading='lazy' class="imgSeccionMarcas" src="vistas/imagenes/index/marcas/MekaDesign-Logo-XRSoluciones.png" alt="MekaDesign Logo XRSoluciones" title="MekaDesign Logo XR Soluciones">
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<?php include "modulos/footer.php"; ?>
	<!-- fin footer -->

	
	
	
	<!-- BOOTSTRAP V.4-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Scripts Parallax-->
	<script src="vistas/js/libraries.min.js"></script>
	<script src="vistas/js/jquery.parallax.js"></script>
	<!-- Menu -->
	<script src="vistas/js/index/menu.js"></script>

	<script>
	// jQuery Selections
	var $html = $('html'),
			$container = $('#container'),
			$prompt = $('#prompt'),
			$toggle = $('#toggle'),
			$about = $('#about'),
			$scene = $('#scene');


	// Add touch or mouse class to html element.
	$html.addClass(Hammer.HAS_TOUCHEVENTS ? 'touch' : 'mouse');

	// Resize handler.
	(resize = function() {
		$scene[0].style.width = window.innerWidth + 'px';
		$scene[0].style.height = window.innerHeight + 'px';
		if (!$prompt.hasClass('hide')) {
			if (window.innerWidth < 600) {
				$toggle.addClass('hide');
			} else {
				$toggle.removeClass('hide');
			}
		}
	})();

	// Attach window listeners.
	window.onresize = _.debounce(resize, 200);
	window.onscroll = _.debounce(resize, 200);

	function showDetails() {
		$about.removeClass('hide');
		$toggle.removeClass('i');
	}


	// Pretty simple huh?
	$scene.parallax();

	// Check for orientation support.
	setTimeout(function() {
		if ($scene.data('mode') === 'cursor') {
			$prompt.removeClass('hide');
			if (window.innerWidth < 600) $toggle.addClass('hide');
			$prompt.on('click', function(event) {
				$prompt.addClass('hide');
				if (window.innerWidth < 600) {
					setTimeout(function() {
						$toggle.removeClass('hide');
					},1200);
				}
			});
		}
	},1000);

	</script>

</body>
</html>
