<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vistas/vendor/autoload.php';

class Email{

     public function mandarEmail(){

          if (isset($_POST["nombreUsuario"])) {
               
               $usuario = $_POST["nombreUsuario"];
               $correo = $_POST["correoUsuario"];
               $telefono = $_POST["telefonoUsuario"];
               $mensaje = $_POST["mensajeUsuario"];

               if (preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $usuario) &&
                   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $correo)) {

                    // Instantiation and passing `true` enables exceptions
                    $mail = new PHPMailer();

                    try {
                         $mail->isSMTP();                                            // Send using SMTP
                         $mail->Host       = 'mail.mekadesign.mx';                    // Set the SMTP server to send through
                         $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                         $mail->Username   = 'contacto@mekadesign.mx';                     // SMTP username
                         $mail->Password   = 'meka2019-2022';                            // SMTP password
                         // $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
                         $mail->SMTPSecure = false;
                         $mail->SMTPAutoTLS = false;
                         $mail->Port = 587;                                    // TCP port to connect to
                         $mail->CharSet = 'UTF-8';
                    
                         //Recipients
                         $mail->setFrom($correo, $usuario);
                         $mail->addAddress('contacto@mekadesign.mx', 'MekaDesign');// Add a recipient
                         $mail->addBCC('paul@mekadesign.mx');
                         // $mail->addAddress('rafaelgalvan@mekadesign.mx');
                    
                         $mail->isHTML(true);                                  // Set email format to HTML
                         $mail->Subject = 'Mensaje desde la Web MEKADESIGN';
                         $mail->Body    = '<!doctype html>
                         <html lang="en">
                           <head>
                             <!-- Required meta tags -->
                             <meta charset="utf-8">
                             <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                         
                             <title>mekadesign</title>
                             <style>
                                  body{
                                       background-color: white;
                                  }
                                  div.divNegro{
                                       background-color: black;
                                  }
                                  img.logoHeader{
                                       width: 150px;
                                  }
                                  div.container{
                                       width: 100%;
                                       max-width: 1200px;
                                       text-align: center;
                                       margin: 0 auto;
                                  }
                                  h1.titulo{
                                       color: #950000;
                                       font-size: 1.3rem;
                                       text-align: center;
                                       margin-top: 50px;
                                  }
                                  hr.linea{
                                       border: solid 1px #950000;
                                  }
                                  p.titulosP{
                                       font-weight: bold;
                                       font-size: 20px;
                                       margin-bottom: 0;
                                  }
                                  div.divNegroFooter{
                                       text-align: center;
                                       background-color: black;
                                  }
                                  img.logoHeaderFooter{
                                       text-align: center;
                                       width: 150px;
                                  }
                                  div.despedida{
                                       margin-top: 50px;
                                  }
                                  div.despedida p{
                                       font-size: .8rem;
                                       font-weight: bold;
                                       line-height: 4px;
                                  }
                             </style>
                           </head>
                           <body>
                             
                              <div class="divNegro">
                                   <img class="logoHeader" width="150px" src="http://pruebas.mekadesign.mx/vistas/imagenes/menu/logo-MekaDesing.png" alt="MekaDesign Logo">
                              </div>
                              <div class="container">
                                   <h1 class="titulo">Mensaje desde la web</h1>
                                   <hr class="linea">
                         
                                   <p class="titulosP">Nombre de usuario:</p>
                                   <p>'.$usuario.'</p>
                         
                                   <p class="titulosP">Correo de usuario:</p>
                                   <p>'.$correo.'</p>
                         
                                   <p class="titulosP">Teléfono de usuario:</p>
                                   <p>'.$telefono.'</p>

                                   <p class="titulosP">Mensaje de usuario:</p>
                                   <p>'.$mensaje.'</p>
                              </div>
                              <div class="despedida">
                                  <div class="container">
                                        <p>Este mensaje fue enviado por : '.$correo.'</p>
                                        <p>Si crees que este correo no es para MekaDesign, haz caso omiso de él.</p>
                                        <p>MekaDesign y el logotipo de MekaDesign son marcas registradas de MekaDesign</p>
                                  </div>
                              </div>
                              <div class="divNegroFooter">
                                   <img class="logoHeaderFooter" width="150px" src="http://pruebas.mekadesign.mx/vistas/imagenes/menu/logo-MekaDesing.png" alt="MekaDesign Logo">
                              </div>
                           </body>
                         </html>';
                    
                         if ($mail->send()) {
                              echo "<script>
                              const Toast = Swal.mixin({
                                   toast: true,
                                   position: 'center',
                                   showConfirmButton: true,
                                   timer: 5000,
                                   timerProgressBar: true,
                                   onOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                   }
                              })
                              
                              Toast.fire({
                                   icon: 'success',
                                   title: 'Enviado',
                                   text: 'En breve alguno de nuestros expertos se podra en contacto contigo'
                              }).then(function()
                              {
                                   document.location.href='contacto';
                              })
                         </script>";
                         
                         } else {

                              echo "<script>
                              const Toast = Swal.mixin({
                                   toast: true,
                                   position: 'center',
                                   showConfirmButton: true,
                                   timer: 5000,
                                   timerProgressBar: true,
                                   onOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                   }
                              })
                              
                              Toast.fire({
                                   icon: 'error',
                                   title: 'Algo salio mal',
                                   text: 'Favor de intentar más tarde'
                              }).then(function()
                              {
                                   document.location.href='contacto';
                              })
                         </script>";

                         }
                         

                        

                    } catch (Exception $e) {
                         echo 'Mensaje no puedo ser enviado. Mailer Error: ', $mail->ErrorInfo;
                    }


               } else {

                    echo '<div class="alert alert-danger" role="alert">
                              El nombre de usuario o el correo tienen caracteres especiales.
                         </div>';

               }
               
               

          } 
          
     }

}