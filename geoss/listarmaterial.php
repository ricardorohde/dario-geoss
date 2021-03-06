﻿<?php
require 'header.php';
include_once("class.material.php");
include_once("class.bairro.php");
include_once("class.cidade.php");
include_once("class.uf.php");

$db = Database::getConnection(); 
$query = "SELECT id FROM cad_material";
?>

<div class="page-header">
    <h1>
        Materiais
    </h1>
</div>
<table id="example" class="table table-hover table-condensed table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nome</th>
				<th>Unidade</th>
				<th data-hide="phone">Modelo</th>
				<th data-hide="phone,tablet">Vida Útil</th>
				<th data-hide="phone,tablet">Quantidade</th>
				<th data-hide="phone,tablet">Fornecedor</th>
				<th>Editar</th>
				<th>Remover</th>
            </tr>
        </thead>
		<tbody>     
<?php
		if ($result = $db->query($query)) {
			while ($obj = $result->fetch_object()) {			
				$material = new material();
				$material->select($obj->id);
				echo "<tr>";
				foreach($material as $key => $value)
				{				
					if(is_scalar($value) || !$value){
						if(
						$key=="id" 
						//|| $key=="idx_area"
						){
								continue;
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
						else{
								echo "<td>".utf8_encode($value)."</td>";
						}
					}
				}	
				echo "<td><a href=\"cadmaterial.php?id=$material->id\" class=\"glyphicon glyphicon-edit\"></a></td><td><a href=\"#\" onclick='apagar(\"material\",$material->id)' class=\"glyphicon glyphicon-remove\"></a></td></tr>";
			}

			/* free result set */
			$result->close();
		}
?> 
       
        </tbody>
    </table>
	<script>
	$(document).ready(function() {
    tableAjax=$('#example').dataTable();
	$('#example').footable();
} );
	</script>
    
<?php
    require 'footer.php'
?>
