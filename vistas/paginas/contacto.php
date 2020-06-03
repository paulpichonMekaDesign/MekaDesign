<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MekaDesign - Contacto</title>

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
	<link rel="stylesheet" type="text/css" href="vistas/css/contacto.css"/>
	<!-- sweetalert 2-->
	<link rel="stylesheet" type="text/css" href="vistas/plugins/sweetalert2/sweetalert2.css"/>
	<script src="vistas/plugins/sweetalert2/sweetalert2.js"></script>
<body>

	<!-- menú -->
	<?php include "modulos/menu.php"; ?>
	<!-- fin menú -->

	<!-- div fondo menu color negro -->
	<div class="divMenu"></div>

	<!-- CONTACTO -->
	<div class="contenedorSobreNosotros d-flex align-items-center">
		<div class="container-fluid text-center">
			<h1 class="tituloH1Contacto">Contactanos</h1>
			<hr class="lineaDivision">
		</div>
	</div>

	<!-- contenedor info contacto -->
	<div class="contenedorContacto">
		<div class="container-fluid">
			<div class="row d-flex justify-content-center">
				<div class="col-xl-4 col-lg-6 col-md-6">
					<p class="textoContacto">En este mundo de selfies, solicitudes de amistad y hashtags, todavía nos gusta hablar en persona.</p>

					<h1 class="titulosContactos mb-3">Llámanos</h1>
					<p class="telefonosContacto"><i class="fas fa-mobile-alt"></i> 222-209-72-88</p>				
					<p class="telefonosContacto"><i class="fas fa-mobile-alt"></i> 241-161-38-73</p>

					<h1 class="titulosContactos mt-4 mb-3">Mándanos un Correo</h1>	
					<p class="telefonosContacto"><i class="fas fa-at"></i> contacto@mekadesign.mx</p>

					<h1 class="titulosContactos mt-4 mb-3">Horarios de Atención</h1>
					<p class="horarios">Lunes-Viernes: 9:00 AM – 6:00 PM </p>
					<p class="horarios">Sábado: 9:00 AM - 2:00 PM </p>
					<p class="horarios">Domingo: No atendemos</p>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6">
					<div class="contenedorMensajeContacto">
						<p class="textoPequeño text-right">Contacto rápido</p>
						<h4 class="tituloh4 text-right">MANDANOS UN MENSAJE</h4>
						<hr class="lineaRojaMensajeContacto">
					</div>
					<?php 

						$email = new Email();
						$email -> mandarEmail();

					?>
					<form id="formularioContacto" class="mt-5" method="POST">
						<div class="form-group">
						  <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" aria-describedby="emailHelp" placeholder="Nombre completo *">
						</div>
						<div class="form-group">
						  <input type="text" class="form-control" id="correoUsuario" name="correoUsuario" placeholder="Correo electrónico *">
						</div>
						<div class="form-group">
						  <input type="text" class="form-control" id="telefonoUsuario" name="telefonoUsuario" placeholder="Teléfono: 000-000-0000">
						</div>
						<div class="form-group">
							<textarea class="form-control" id="mensajeUsuario" name="mensajeUsuario"placeholder="Cuéntanos un poco sobre tu idea"></textarea>
						   </div>
						<p class="float-left textRequerido">* Requeridos</p>
						<button type="submit" class="btn float-right btnEnviarMensaje">Enviar</button>
						
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<?php include "modulos/footer.php"; ?>
	<!-- fin footer -->
	
	<!-- BOOTSTRAP V.4-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<!-- Menu -->
	<script src="vistas/js/index/menu.js"></script>
	<!-- jQueryValidate -->
	<script src="vistas/js/jQueryValidate/jquery.validate.js"></script>
	<!-- Script validar formulario Contacto -->
	<script type="text/javascript" src="vistas/js/contacto/validarFormularioContacto.js"></script>

</body>
</html>
