﻿<?php
require 'header.php';
include_once("class.vistoria.php");

$db = Database::getConnection(); 
$query = "SELECT id FROM cad_vistoria";
?>

<div class="page-header">
    <h1>
        Vistoria
    </h1>
</div>
<table id="example" class="table table-hover table-condensed table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th>Semáforo</th>
				<th>OS</th>
				<th>Editar</th>
				<th>Remover</th>
            </tr>
        </thead>
    </table>
	<script>
	$(document).ready(function() {
    tableAjax=$('#example').dataTable({
	"processing": true,
    "serverSide": true,
    "ajax": "process.php",
	"oLanguage": {
    "sEmptyTable":     "Nenhum registro encontrado na tabela",
    "sInfo": "Mostrar _START_ até _END_ do _TOTAL_ registros",
    "sInfoEmpty": "Mostrar 0 até 0 de 0 Registros",
    "sInfoFiltered": "(Filtrar de _MAX_ total registros)",
    "sInfoPostFix":    "",
    "sInfoThousands":  ".",
    "sLengthMenu": "Mostrar _MENU_ registros por pagina",
    "sLoadingRecords": "Carregando...",
    "sProcessing":     "Processando...",
    "sZeroRecords": "Nenhum registro encontrado",
    "sSearch": "Pesquisar",
    "oPaginate": {
        "sNext": "Proximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast":"Ultimo"
    },
    "oAria": {
        "sSortAscending":  ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
}
	});
	$('#example').footable();
} );
	</script>
    
<?php
    require 'footer.php'
?>
