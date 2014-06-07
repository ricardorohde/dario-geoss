
<?php
require 'header.php';

include_once("class.horario_servico.php");

$horario_servico = new horario_servico();

if($id){
	$horario_servico->select($id);
}

$mensagem="$modo".o;

?>
		<section id="contact" class="background1 background-image" style="margin-top:160px;min-height: 67%;
    height: auto%;">
			<div class="container">
				<div class="row text-center" style="transition: all 0s ease; -webkit-transition: all 0s ease; opacity: 1;">
					<div class="col-sm-12">
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h3 class="panel-title">
							  Cadastro Horario servico
							</h3>
						  </div>
						  <div class="panel-body">
							<form role="form"  action="dao.php" onSubmit="return ajaxSubmit(this,'Horario servico <?php echo $mensagem ?> com sucesso');">
							<input type="hidden" name="id" value="<?php echo $id?>"> 
							<input type="hidden" name="type" value="horario_servico">

	<div class="form-group col-md-12" style="text-align: left">
			  <select class="form-control input-sm" name="idx_servico">
					<option value="0">Selecione um Servico</option>
					<?php
						$db = Database::getConnection();
						$sql = "SELECT id, nome
								FROM servico
								ORDER BY nome";
						$res = $db->query( $sql );
						while ( $row = $res->fetch_assoc() ) {
							$checked=($horario_servico->idx_servico==$row['id'])?"selected":"";
							echo '<option value="'.$row['id'].'" '.$checked.'>'.$row['nome'].'</option>';
						}
					?>
			  </select>
			              
		</div>
		
	<div class="form-group col-md-12" style="text-align: left">
			  <select class="form-control input-sm" name="idx_horario">
					<option value="0">Selecione um Horario</option>
					<?php
						$db = Database::getConnection();
						$sql = "SELECT id, horario
								FROM horario
								ORDER BY horario";
						$res = $db->query( $sql );
						while ( $row = $res->fetch_assoc() ) {
							$checked=($horario_servico->idx_horario==$row['id'])?"selected":"";
							echo '<option value="'.$row['id'].'" '.$checked.'>'.$row['horario'].'</option>';
						}
					?>
			  </select>
			              
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