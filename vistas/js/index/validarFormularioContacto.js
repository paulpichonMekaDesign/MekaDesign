// Formulario de Contacto
$( document ).ready( function () {
     $.validator.addMethod(
          "regex",
               function(value, element, regexp) {
               var re = new RegExp(regexp);
               return this.optional(element) || re.test(value);
               },
               "Please check your input."
     );

     $( "#formularioContacto" ).validate( {
          rules: {
               nombreUsuario: {
                    regex: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/,
                    required: true
               },
               correoUsuario: {
                    required: true,
                    email: true
               }
          },
          messages: {
               nombreUsuario: {
                    required: "Ingrese su nombre",
                    regex: "No se permiten caracteres especiales ni numeros"
               },
               correoUsuario: "Ingrese un correo valido"
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