


<script  type="text/javascript">
$(document).ready(function() {
        $('#dataTable').DataTable({
            responsive: true,
            searching: false,
            ordering: true,
            language: {
					    "sProcessing":     "Procesando...",
					    "sLengthMenu":     "Mostrar _MENU_ rexistros",
					    "sZeroRecords":    "Non se atoparon resultados",
					    "sEmptyTable":     "Ningún dato dispoñible nesta táboa",
					    "sInfo":           "Mostrando rexistros do _START_ ó _END_ dun total de _TOTAL_ rexistros",
					    "sInfoEmpty":      "Mostrando rexistros do 0 ó 0 dun total de 0 rexistros",
					    "sInfoFiltered":   "(filtrado dun total de _MAX_ rexistros)",
					    "sInfoPostFix":    "",
					    "sSearch":         "Buscar:",
					    "sUrl":            "",
					    "sInfoThousands":  ",",
					    "sLoadingRecords": "Cargando...",
					    "oPaginate": {
					        "sFirst":    "Primeiro",
					        "sLast":     "Último",
					        "sNext":     "Seguinte",
					        "sPrevious": "Anterior"
					    },
					    "oAria": {
					        "sSortAscending":  ": Activar para ordear a columna de maneira ascendente",
					        "sSortDescending": ": Activar para ordear a columna de maneira descendente"
					    }
					}
        });
} );


</script>