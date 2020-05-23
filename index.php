<?php

require_once "controladores/plantilla.php";
require_once "controladores/enlaces.controlador.php";

require_once "modelos/enlaces.modelos.php";
require_once "modelos/rutas.php";

$plantilla = new Plantilla();
$plantilla -> plantillaControlador();
