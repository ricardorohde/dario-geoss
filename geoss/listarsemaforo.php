﻿<?php
require 'header.php';
include_once("class.semaforo.php");
include_once("class.bairro.php");
include_once("class.cidade.php");
include_once("class.uf.php");

$todos ="";
?>

<script type="text/javascript" language="javascript" src="scripts/dataTables.bootstrap.js"></script>
<script type="text/javascript" language="javascript" src="scripts/jquery.dataTables.js"></script>

<script src="http://maps.google.com/maps?file=api&;amp;v=2.x&amp;key=ABQIAAAAtOjLpIVcO8im8KJFR8pcMhQjskl1-YgiA_BGX2yRrf7htVrbmBTWZt39_v1rJ4xxwZZCEomegYBo1w" type="text/javascript"></script>

<script type="text/javascript">		
	function carregarBase(ids) {
			mostrarCarregando();

			// setup the ajax request
			$.ajax({
				url: 'base.php',
				data: {'ids': ids},
				type: 'POST',
				success: function(data) {
				    $(mapaDigital).html(data);      
					esconderCarregando();
				},
				error: function (jqXHR, textStatus,  errorThrown) {
					alert(textStatus);
					alert(errorThrown);
					esconderCarregando();
					}					
			});

			// return false so the form does not actually
			// submit to the page
			return false;
		}
</script>

<div class="page-header">
    <h1>
        Semáforos
    </h1>
</div>
<table id="example" class="table table-hover table-condensed table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Cidade</th>
				<th>Bairro</th>
				<th>Latitude</th>
				<th>Longitude</th>
				<th>Número</th>
				<th>Logradouro</th>
                <th>Modo</th>
				<th>Controlador</th>
				<th>Operação</th>
				<th>Editar</th>
				<th>Remover</th>
            </tr>        
		</thead> 
        <tbody>  
<?php
		$db = Database::getConnection(); 
		$query = "SELECT id FROM cad_semaforo";
		if ($result = $db->query($query)) {
			while ($obj = $result->fetch_object()) {			
				$semaforo = new semaforo();
				$semaforo->select($obj->id);
				$todos.=$semaforo->id.",";
				echo "<tr onclick='carregarBase($semaforo->id)'>";
				foreach($semaforo as $key => $value)
				{
					if(is_scalar($value)){
						if(
						$key=="idx_lograd" 
						|| $key=="idx_area"
						|| $key=="id"){
							
						}
						else if($key=="idx_bairro"){
							$bairro = new bairro();
							$bairro->select($semaforo->idx_bairro);
							echo "<td>".utf8_encode($bairro->bai_nome)."</td>";
						}
						else if($key=="idx_cidade"){
							$cidade = new cidade();
							$cidade->select($semaforo->idx_cidade);
							echo "<td>".utf8_encode($cidade->cid_nome)."</td>";
						}
						else if($key=="idx_uf"){
							//$uf = new uf();
							//$uf->select($semaforo->idx_uf);
							//echo "<td>".utf8_encode($cidade->uf_nome)."</td>";
						}							
						else
							echo "<td>".utf8_encode($value)."</td>";
					}						
					
				}	
				echo "<td><a href=\"cadsemaforo.php?id=$semaforo->id\" class=\"glyphicon glyphicon-edit\"></a></td><td><a href=\"#\" onclick='apagar(\"semaforo\",$semaforo->id)' class=\"glyphicon glyphicon-remove\"></a></td></tr>";
			}

			/* free result set */
			$result->close();
		}
?>
        </tbody>
    </table>
	
	<input type="submit" value="Mostrar Todas" onclick="carregarBase('<?php echo $todos?>');" class="btn btn-success btn-block">
	
	<br><br>
	
	<div id="mapaDigital">
	</div>
	
	<br><br>
	
	<script>	
	$(document).ready(function() {
    tableAjax=$('#example').dataTable({
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
	
	carregarBase();
} );
	</script>
    
<?php
    require 'footer.php'
?>
