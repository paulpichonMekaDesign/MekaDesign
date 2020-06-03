// Captura de datos desde el formulario
// variable
const formulario = document.getElementById("formularioContacto");

// Event listener
formulario.addEventListener('submit', (e) => {
     e.preventDefault();

     var nombre = document.getElementById('nombreUsuario').value;
     var correo = document.getElementById('correoUsuario').value;
     var telefono = document.getElementById('telefonoUsuario').value;
     var mensaje = document.getElementById('mensajeUsuario').value;

     if (nombre !== '' && correo !== '') {

          let datos = new FormData();

          datos.append("nombre", nombre);
          datos.append("correo", correo);
          datos.append("telefono", telefono);
          datos.append("mensaje", mensaje);


          $.ajax({
               url: "../ajax/mandarCorreo.ajax.php",
               method: "POST",
               data: datos,
               cahce: false,
               contentType: false,
               processData: false,
               beforeSend: function(){
                    console.log("ok");
                    
               }

          });
          
     }
     
     
});

