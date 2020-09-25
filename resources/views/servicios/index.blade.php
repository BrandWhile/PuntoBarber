
@extends('administrador.masterpage')


@section('contenido')


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.17/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body class="bg-dark">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
       <div class="card mt-5">
         <div class="card-header">
            <div class="col-md-12">
                <h3 class="">SERVICIO</h3>
                 <h4 class="card-title">
                  <a class="btn btn-success" href="javascript:void(0)" id="createNewItem"><img src="https://img.icons8.com/ios/24/000000/plus.png"/></a>
                 </h4>
            </div>
         </div>
         <div class="card-body">
           <table class="table table-bordered data-table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre servicio</th>
                    <th>Precio servicio</th>
                    <th width="280px">Acciones</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modelHeading"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="ItemForm" name="ItemForm" class="form-horizontal">
                           <input type="hidden" name="servicio_id" id="servicio_id">
                            <div class="form-group">
                                <label>Nombre servicio</label>
                                <div class="col-md-12">
                                <input id="nombreS" name="nombreS" type="text" placeholder="Ingrese el nombre del servicio" class="form-control input-md">
                                    </div>

                            <div class="form-group">
                              <label>Precio</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingresar precio del servicio" value=""   >
                                </div>
                            </div>


                            <div class="col-sm-offset-2 col-sm-10">
                             <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Guardar
                             </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</body>

<script type="text/javascript">


  $(function () {

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('servicio.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nombreS', name: 'nombreS'},
            {data: 'precio', name: 'precio'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],

        language: {
          sProcessing: "Procesando...",
          sLengthMenu: "Mostrar _MENU_ objetos",
          sZeroRecords: "No se encontraron objetos similares",
          sEmptyTable: "No se encontraron objetos similares",
          sInfo: "Mostrando objetos del _START_ al _END_ de un total de _TOTAL_ objetos",
          sInfoEmpty: "Mostrando objetos del 0 al 0 de un total de 0 objetos",
          sInfoFiltered: "(filtrado de un total de _MAX_ objetos)",
          sInfoPostFix: "",
          sSearch: "Buscar:",
          sUrl: "",
          sInfoThousands: ",",
          sLoadingRecords: "Cargando...",
          oPaginate: {
            sFirst: "Primero",
            sLast: "Último",
            sNext: "Siguiente",
            sPrevious: "Anterior"
          },
          oAria: {
            sSortAscending: ": Activar para ordenar la columna de manera ascendente",
            sSortDescending: ": Activar para ordenar la columna de manera descendente"
          }
            }
    });

    $('#createNewItem').click(function () {
        $('#saveBtn').val("Agregar servicio");
        $('#servicio_id').val('');
        $('#ItemForm').trigger("reset");
        $('#modelHeading').html("Agregar servicio");
        $('#ajaxModel').modal('show');
    });



    $('body').on('click', '.editItem', function () {

    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      var servicio_id = $(this).data("id");
      $.get("{{ route('servicio.index') }}" +'/' + servicio_id +'/edit', function (data) {
          $('#modelHeading').html("Editar servicio");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
          $('#servicio_id').val(data.idS);
          $('#nombreS').val(data.nombreS);
          $('#precio').val(data.precio);
      })



   });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Guardando...');

        $.ajax({
          data: $('#ItemForm').serialize(),
          url: "{{ route('servicio.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {

              $('#ItemForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();

          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Guardando');
          }
      });
    });



    $('body').on('click', '.deleteItem', function () {

        var servicio_id = $(this).data("id");
        confirm("¿Esta seguro de eliminar el servicio?");

        $.ajax({
            type: "DELETE",
            url: "{{ route('servicio.store') }}"+'/'+servicio_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });

  });
</script>
@endsection

