<?php

$url = Rutas::rutasArchivosMdl();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MekaDesign</title>

	<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<!-- BOOTSTRAP 4-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- ESTILOS PROPIOS -->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>css/estilos.css"/>
</head>
<body>

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
	
	<!-- Menu hamburguesa -->
	<div id="header" class="contenedorMenu fixed-top">
		<div class="container-fluid">
			<header class="menu d-flex justify-content-between">
				<div class="logoMekaDesign">
					<img class="imgLogoMenu" src="vistas/imagenes/1.png" alt="MekaDesign Logo">
				</div>
				<div id="menu_on" class="menuHamburguesa d-flex align-items-center">
					<p class="menuTexto mr-3">Menú</p>
					<div class="lineasMenuHamburguesa">
						<hr class="linea1">
						<hr class="linea2">
						<hr class="linea3">
					</div>
				</div>
			</header>
		</div>
	</div>
	<!-- Menu hamburguesa -->

	<!-- Menu dezplegado -->
	<div class="menuDesplegado">
		<h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia voluptas tempora animi excepturi laboriosam! A unde provident dignissimos quae voluptates saepe, beatae quibusdam nesciunt deserunt nihil velit error placeat molestiae.</h1>
		<h1>nosotros</h1>
		<h1>contacto</h1>
		<h1>servicios</h1>
	</div>
	
	<!-- BOOTSTRAP V.4-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Scripts Parallax-->
	<script src="<?php echo $url; ?>js/libraries.min.js"></script>
	<script src="<?php echo $url; ?>js/jquery.parallax.js"></script>

	<!-- Activacion menu hamburguesa Jquery-->
	<script type="text/javascript">
		$( document ).ready(function() {
			$('#menu_on').click(function(){ // Al hacer click...
			   $('body').toggleClass('visible_menu'); // Añadimos o eliminamos la clase 'visible_menu' al body
			 })
		});
	</script>

	<script>
		// EFECTO APARECER/DESAPARECER MENU AL HACER SCROLL
		//JAVASCRIPT
		let new_scroll_position = 0;
		let last_scroll_position;
		const header = document.getElementById("header");

		window.addEventListener('scroll', function(e) {
		last_scroll_position = window.scrollY;

		// Scrolling down
		if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
		// header.removeClass('slideDown').addClass('slideUp');
		header.classList.remove("slideDown");
		header.classList.add("slideUp");

		// Scrolling up
		} else if (new_scroll_position > last_scroll_position) {
		// header.removeClass('slideUp').addClass('slideDown');
		header.classList.remove("slideUp");
		header.classList.add("slideDown");

		}

		new_scroll_position = last_scroll_position;

		});
	</script>

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
