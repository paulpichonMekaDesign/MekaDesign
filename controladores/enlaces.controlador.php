<?php

class Enlaces{

     public function ctrEnlaces(){

          if (isset($_GET["pagina"])) {
               
               $enlace = $_GET["pagina"];

               if ($enlace == "inicio" ||
                   $enlace == "nosotros" ||
                   $enlace == "proyectos" ||
                   $enlace == "contacto"
                   ) {
                    
                    $module = "vistas/paginas/".$enlace.".php";

               } elseif ($enlace == "index"){
                    
                    $module = "vistas/paginas/inicio.php";

               }else {
                    $module = "vistas/paginas/error404.php";
               }
               


          }else {
               
               $module = "vistas/paginas/inicio.php";

          }

          include $module;          

     }

}
