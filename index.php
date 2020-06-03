<?php
     //plantilla
     require_once "controladores/template.controlador.php";
     //mandar correo electronico
     require_once "controladores/mandarCorreo.controlador.php";

     $plantilla = new Template();
     $plantilla -> ctrPlantilla();