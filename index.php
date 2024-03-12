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
    <title></title>

    <style>
        table.dataTable thead {
            background: linear-gradient(to right, #4A00E0, #8E2DE2);
            color:white;
        }
    </style>

  </head>
  <body>
  
    
    <div class="container">
    <a href="create.php" type="button" class="btn btn-primary">Crear nuevo</a>
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead>
                 <tr>
                    <th>#</th>
                    <th>Fecha</th>
                    <th>Cliente ID</th>                                
                    <th>No. Factura</th>  
                    <th>Ventas Neto</th>
                    <th>Ventas IVA</th>
                    <th>Ventas total</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
           </div>
       </div> 
    </div>
   
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
      
      
<!--    Datatables-->
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>  
      
      
    <script>
      $(document).ready(function() {
   $('#tablaUsuarios').DataTable({
      "ajax": {
         "url": "baseDeDatos/consulta.php",
         "dataSrc": ""
      },
      "columns": [
         { "data": "Ventas_Id" },
         { "data": "Ventas_Fecha" },
         { "data": "Ventas_CliId" },
         { "data": "Ventas_NroFactura" },
         { "data": "Ventas_Neto" },
         { "data": "Ventas_Iva" },
         { "data": "Ventas_Total" },
         {
            "data": null,
            "render": function (data, type, row) {
               // Agrega los botones "Ver", "Editar" y "Eliminar" aquí
               return '<button onclick="verFuncion(' + row.Ventas_Id + ')">Ver</button>' 
              //  +
              //         '<button onclick="editarFuncion(' + row.Ventas_Id + ')">Editar</button>' +
              //         '<button onclick="eliminarFuncion(' + row.Ventas_Id + ')">Eliminar</button>'
                      ;
            }
         }
      ]
   });
});

function verFuncion(id) {
   // Lógica para ver la información
}

function editarFuncion(id) {
   // Lógica para editar la información
}

function eliminarFuncion(id) {
   // Lógica para eliminar la información
}

    </script>
      
      
  </body>
</html>