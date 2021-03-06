
<?php
require 'header.php';

include_once("class.funcionario_filho.php");

$funcionario_filho = new funcionario_filho();

if($id){
	$funcionario_filho->select($id);
}

$mensagem="$modo".o;

?>
		<section id="contact" class="background1 background-image" style="margin-top:160px; height: auto;">
			<div class="container">
				<div class="row text-center" style="transition: all 0s ease; -webkit-transition: all 0s ease; opacity: 1;">
					<div class="col-sm-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">
							  Cadastro Funcionario filho
							</h3>
						  </div>
						  <div class="panel-body">
							<form role="form"  action="dao.php" onSubmit="return ajaxSubmit(this,'Funcionario filho <?php echo $mensagem ?> com sucesso');">
							<input type="hidden" name="id" value="<?php echo $id?>"> 
							<input type="hidden" name="type" value="funcionario_filho">

	<div class="form-group col-md-12" style="text-align: left">
			  <select class="form-control input-sm" name="idx_funcionario">
					<option value="0">Selecione um Funcionario</option>
					<?php
						$db = Database::getConnection();
						$sql = "SELECT id, nome
								FROM funcionario
								ORDER BY nome";
						$res = $db->query( $sql );
						while ( $row = $res->fetch_assoc() ) {
							$checked=($funcionario_filho->idx_funcionario==$row['id'])?"selected":"";
							echo '<option value="'.$row['id'].'" '.$checked.'>'.$row['nome'].'</option>';
						}
					?>
			  </select>
			              
		</div>
		
	<div class="form-group col-md-12" style="text-align: left">
							<input type="text" name="nome" class=" form-control input-sm"  placeholder="Nome" value="<?php echo $funcionario_filho->nome?>">
			                
		</div>
		
	<div class="form-group col-md-12" style="text-align: left">
							<input type="text" name="data_nasc" class="datepicker form-control input-sm" data-date-format="yyyy-mm-dd" placeholder="Data nasc" value="<?php echo $funcionario_filho->data_nasc?>">
			                
		</div>
		
					  <div class="form-group col-md-6 col-md-offset-3">
						<input type="submit" value="<?php echo $textoBotao?>" class="btn btn-info btn-block">
					  </div>	
					</form>
				  </div>
				</div>
			  </div>
			</div>
		</div>
	</section>
	<?php
           require 'footer.php'
        ?>
