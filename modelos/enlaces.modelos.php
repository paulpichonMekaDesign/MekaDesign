<?php

class EnlacesModelos{

  static public function enlaceMdl($enlace){

    if ($enlace == "inicio") {

      $modulo = "vistas/modulos/".$enlace.".php";

    }elseif ($enlace == "index") {

      $modulo = "vistas/modulos/index.php";

    }else {

      $modulo = "vistas/modulos/index.php";

    }

    return $modulo;

  }

}
