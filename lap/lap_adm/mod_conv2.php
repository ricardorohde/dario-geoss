<?php

session_start();

include('../estilo.css');

include('fckeditor/fckeditor.php');

$codigo_noticia=$_GET['id'];

$usuario_autenticado=$_SESSION["usuario_autenticado"];

if(($usuario_autenticado!=NULL)and($codigo_noticia!=NULL))

{

 include('conn.php');

 include('data.php');

 $busca_noticia="select * from convenio where id = '".$codigo_noticia."';";

 $res_busca_noticia=mysql_query($busca_noticia,$conn);

 $campo_noticia=mysql_fetch_array($res_busca_noticia);

 echo mysql_error($conn);

}

else

{

 echo "<script>alert('A sess�o expirou, � preciso fazer o login novamente');

 top.location='index.php';</script>";

}

?>

<html>
<link href="../estilo.css" rel="stylesheet" type="text/css">
	<style type="text/css">
<!--
body {
	background-image: url(img/background.PNG);
}
</style>
<style type="text/css">
<!--
.style1 {color: #000033}
-->
</style>
<body class=fonte>

<form name=form1 method=post>

<input type=hidden name=nome_antigo value="<?phpecho $campo_noticia[nome];?>">

<h1 class="style1"><font face=verdana>Modificar Convenio:</font></h1>
<hr color=black size=2>

<table border=0 class=fonte>

<tr>
  <td width="147">Nome:</td>
  <td width="405"><input name=nome type=text class=botao id="nome" value="<?phpecho $campo_noticia[nome];?>" size=50 maxlength=100></td></tr>

<tr>
  <td>Tipo  : </td>
  <td><input name=tipo type=text class=botao id="tipo" value="<?phpecho $campo_noticia[tipo];?>" size=50 maxlength=100></td>
</tr>


<tr><td></td><td>&nbsp;</td></tr>

<tr><td></td><td><input type=submit value=' Modificar ' class=botao>
  <span class="atributos_titulo">
  <input name="button" type=button class="botao" onClick="history.go(-1);" value="Voltar">
  </span></td></tr>
</table>

</form>

<?php
$nome=$_POST['nome'];
$tipo=$_POST['tipo'];


if(($nome_antigo!=NULL)or($nome!=NULL)or($tipo!=NULL))

{

 if($nome!=$nome_antigo)

 {
/*
  $busca_noticia="select * from convenio where nome = '".$nome."';";

  $res_busca_noticia=mysql_query($busca_noticia,$conn);

  $num_noticia=mysql_num_rows($res_busca_noticia);
*/
  if($num_noticia>0)

  {

   $igual=1;

  }

  else

  {

   $igual=0;

  }

 }

 else

 {

  $igual=0;

 }

 if($igual==0)

 {

 

  $mod_noticia = "update convenio set nome = '".$nome."',tipo = '".$tipo."' where id = '".$codigo_noticia."';";
  
  $ok=mysql_query($mod_noticia,$conn);

  if($ok==1)

  {

   echo "<script>alert('O Convenio $nome foi alterado com sucesso.');

   window.location='mod_conv2.php?id=$codigo_noticia';</script>";

  }

  else

  {

   echo "ERRO: ".mysql_error($conn).".";

  }

 }

 else

 {

  echo "<script>alert('O Convenio: $nome j� existe.');</script>";

 }

}

?>

</body>

</html>

