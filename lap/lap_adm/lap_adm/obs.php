<?php

session_start();

$cpf3 = $_SESSION['cpf2'];

include('estilo.css');

//include('fckeditor/fckeditor.php');

$usuario_autenticado=$_SESSION["usuario_autenticado"];

if($usuario_autenticado!=NULL)

{

 include('conn.php');

 include('data.php');

}

else

{

 echo "<script>alert('A sess�o expirou, � preciso fazer o login novamente');

 top.location='index.php';</script>";

}

?>
<?php
//Testar Paciente
$cpf=$_POST['cpf'];

if($_POST['testar']) {  

if( !empty($_POST['cpf2']) )
{
  $cpf = mysql_escape_string($_POST['cpf2']);
 
  $res = mysql_query("SELECT cpf_cliente FROM clientes WHERE cpf_cliente = '$cpf'");
 
  if( mysql_num_rows($res) )
  {
    //retornou algo, j tem
	$_SESSION['cpf2'] = NULL;
	 printf("<script>alert('Paciente j� cadastrado.');
    window.location='pac.php';</script>");
  }
  else
  {
    //nada encontrado
	$_SESSION['cpf2'] = $_POST['cpf2'];
    printf("<script>alert('Paciente n�o cadastrado.');
    window.location='pac.php';</script>");
	
	  }
}
}




?>
<html>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
}
-->
</style>

<link href="estilo.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style3 {font-size: 14px}
.style4 {
	color: #000033;
	font-weight: bold;
}
-->
</style>
<body class=fonte>

<form name=form1 method=post>

<h1><span class="style4"><font face=verdana>Digita&ccedil;&atilde;o de Laudos:</font></span><span class="style1"><span class="style3"> Observa&ccedil;&otilde;es</span>.</span></h1>
<hr color=black size=2>

<span class="style1"><span class="style3"><br>
</span><br>
<br>
</span><br>
<table border=0 class=fonte>
<tr>
  <td width="174">Entrada :</td>
  <td width="367"><textarea name="textarea" id="textarea" cols="45" rows="5"></textarea></td>
</tr>


<tr>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
  <td>Laudo :</td>
  <td><span class="style1">
    <textarea name="textarea2" id="textarea2" cols="45" rows="5"></textarea>
  </span></td>
</tr>

<tr>
  <td></td>
  <td>&nbsp;</td>
</tr>
<tr><td></td><td><input type=submit value='Ok' class=botao> <input type=submit value='Cancelar' class=botao>
  <span class="atributos_titulo">
  <input name="button" type=button class="botao" onClick="history.go(-1);" value="Voltar">
  </span></td>
</tr>
</table>

</form>

<?php

$codigo_categoria=$_POST['codigo_categoria'];

$promocao=$_POST['promocao'];

$nome_equipamento=$_POST['nome_equipamento'];

$nome_produto=$_POST['nome_produto'];

$nome_fabricante=$_POST['nome_fabricante'];

$descricao_equipamento=$_POST['descricao_equipamento'];

$valor=$_POST['valor'];

if(($nome_equipamento!=NULL)and($descricao_equipamento!=NULL)and($nome_produto!=NULL)and($nome_fabricante!=NULL)and($valor!=NULL)and($codigo_categoria!=NULL))

{

 $busca_equipamento="select * from equipamentos where nome_equipamento = '".$nome_equipamento."';";

 $res_busca_equipamento=mysql_query($busca_equipamento,$conn);

 $num_equipamento=mysql_num_rows($res_busca_equipamento);

 if($num_equipamento==0)

 {

  $valor=str_replace(',','.',$valor);

  $cad_equipamento="insert into equipamentos values ('','".$codigo_categoria."','".$nome_equipamento."','".$nome_produto."','".$nome_fabricante."','".$descricao_equipamento."','".$promocao."','".$valor."');";

  $ok=mysql_query($cad_equipamento,$conn);

  if($ok==1)

  {

   $busca_equipamento="select * from equipamentos where nome_equipamento = '".$nome_equipamento."';";

   $res_busca_equipamento=mysql_query($busca_equipamento,$conn);

   $campo_equipamento=mysql_fetch_array($res_busca_equipamento);

   echo "<script>window.location='cad_foto_equipamentos.php?codigo_equipamento=$campo_equipamento[codigo_equipamento]';</script>";

  }

  else

  {

   echo "ERRO: ".mysql_error($conn).".";

  }

 }

 else

 {

  echo "<script>alert('O suprimento: $nome_suprimento j� est� cadastrado.');</script>";

 }

}

?>

</body>

</html>

