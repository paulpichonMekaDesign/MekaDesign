// Formulario de Contacto
$( document ).ready( function () {

     //nombre usuario y mensaje del usuario
     $.validator.addMethod(  "regex", function(value, element, regexp) {
               var re = new RegExp(regexp);
               return this.optional(element) || re.test(value);
               },
               "Please check your input."
     );
     
     //teléfono
     $.validator.addMethod('telefonoRegex', function (value, element) {
          return this.optional(element) || /^(\([0-9]\d{2}\)|[0-9]\d{2})-?[0-9]\d{2}-?\d{4}$/.test(value);
      }, "Por favor entre un número de teléfono válido");

      //CORREO ELECTRONICO
      $.validator.addMethod(  "emailRegex", function(value, element, regexp) {
          var re = new RegExp(regexp);
          return this.optional(element) || re.test(value);
          },
          "Por favor entre un email válido"
     );

     $( "#formularioContacto").validate( {
          rules: {
               nombreUsuario: {
                    regex: /^([a-zA-ZáéíóúÁÉÍÓÚñÑ][a-zA-ZáéíóúÁÉÍÓÚñÑ]+[\s]*)+$/,
                    required: true
               },
               correoUsuario: {
                    required: true,
                    emailRegex: /^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/
               },
               telefonoUsuario: 'telefonoRegex',
               mensajeUsuario: {
                    regex: /^([a-zA-ZáéíóúÁÉÍÓÚñÑ0-9][\s]*)+$/
               }
          },
          messages: {
               nombreUsuario: {
                    required: "Ingrese su nombre",
                    regex: "No se permiten caracteres especiales ni numeros"
               },
               correoUsuario: "Ingrese un correo valido",
               telefonoUsuario: "Ingrese un teléfono válido",
               mensajeUsuario: "No se permiten caracteres especiales"
          },
          errorElement: "em",
          errorPlacement: function ( error, element ) {
               // Add the `invalid-feedback` class to the error element
               error.addClass( "invalid-feedback" );

               if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.next( "label" ) );
               } else {
                    error.insertAfter( element );
               }
          },
          highlight: function ( element, errorClass, validClass ) {
               $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
          },
          unhighlight: function (element, errorClass, validClass) {
               $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
          }
     } );

} );