
<?php
require 'header.php';

include_once("class.funcionario_funcao.php");

$funcionario_funcao = new funcionario_funcao();

if($id){
	$funcionario_funcao->select($id);
}

$mensagem="$modo".o;

?>
    <div class="row centered-form">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
              Cadastro Funcionario funcao
            </h3>
          </div>
          <div class="panel-body">
			<form role="form"  action="dao.php" onSubmit="return ajaxSubmit(this,'Funcionario funcao <?php echo $mensagem ?> com sucesso');">
			<input type="hidden" name="id" value="<?php echo $id?>"> 
			<input type="hidden" name="type" value="funcionario_funcao">

	<div class="form-group col-md-12">
			  <select class="form-control input-sm" name="idx_funcionario">
					<option value="0">Selecione um Funcionario</option>
					<?php
						$db = Database::getConnection();
						$sql = "SELECT id, nome
								FROM funcionario
								ORDER BY nome";
						$res = $db->query( $sql );
						while ( $row = $res->fetch_assoc() ) {
							$checked=($funcionario_funcao->idx_funcionario==$row['id'])?"selected":"";
							echo '<option value="'.$row['id'].'" '.$checked.'>'.$row['nome'].'</option>';
						}
					?>
			  </select>
			              
		</div>
		
	<div class="form-group col-md-12">
			  <select class="form-control input-sm" name="idx_funcao">
					<option value="0">Selecione um Funcao</option>
					<?php
						$db = Database::getConnection();
						$sql = "SELECT id, nome
								FROM funcao
								ORDER BY nome";
						$res = $db->query( $sql );
						while ( $row = $res->fetch_assoc() ) {
							$checked=($funcionario_funcao->idx_funcao==$row['id'])?"selected":"";
							echo '<option value="'.$row['id'].'" '.$checked.'>'.$row['nome'].'</option>';
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
	<?php
           require 'footer.php'
        ?>
