<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--    Datatables  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>  
    <title>Crear nueva venta</title>
  </head>
  <body>
  
    
    <div class="container">
       <div class="row">
        <div class="col-lg-12 rounded border border-primary">
            <!-- Aqui va nuestro formulario -->
            <form action="guardarventa.php">
  <div class="form-row">
    <div class="form-group col-md-4">
        <label for="Ventas_Fecha">Fecha de venta</label>
        <input type="date" class="form-control" id="Ventas_Fecha" required>
    </div>

    <div class="form-group col-md-4">
        <label for="Ventas_CliId">ID de cliente</label>
        <input type="text" class="form-control" id="Ventas_CliId">
    </div>
    
  </div>
  
  
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
        </div>
       </div> 
    </div>
   
    
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var inputFecha = document.getElementById('Ventas_Fecha');

        // Obtener la fecha actual del equipo del usuario
        var fechaLocal = new Date().toLocaleDateString('en-CA'); // Puedes ajustar el formato según tus preferencias

        // Asignar la fecha local al campo de entrada
        inputFecha.value = fechaLocal;
    });
$(document).ready(function() {
    // Obtén la referencia al input y configura el autocompletado
    var inputCliente = $("#Ventas_CliId");

    inputCliente.autocomplete({
        source: function(request, response) {
            // Realiza la llamada Ajax para obtener los datos desde tu archivo externo
            $.ajax({
                url: 'baseDeDatos/clientes.php', // Reemplaza con la ruta correcta a tu archivo
                type: 'GET',
                dataType: 'json',
                data: {
                    term: request.term
                },
                success: function(data) {
                    // La respuesta del servidor debe ser un arreglo de objetos con propiedades 'label' y 'value'
                    response($.map(data, function(item) {
                        return {
                            label: item.nombre, // Reemplaza con el nombre de la propiedad que deseas mostrar en la lista
                            value: item.id // Reemplaza con el nombre de la propiedad que deseas utilizar como valor
                        };
                    }));
                }
            });
        },
        minLength: 2, // Número mínimo de caracteres antes de activar el autocompletado
        select: function(event, ui) {
            // Puedes realizar acciones adicionales cuando se selecciona un elemento, si es necesario
            console.log('Seleccionado:', ui.item);
        }
    });
});

</script>
      
      
  </body>
</html>