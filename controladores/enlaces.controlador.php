<?php

class Enlaces{

  public function enlacesControlador(){

    if (isset($_GET["accion"])) {

      $enlace = $_GET["accion"];

    }else {

      $enlace  = "index.php";

    }

    $respuesta = EnlacesModelos::enlaceMdl($enlace);

    include $respuesta;

  }

}
