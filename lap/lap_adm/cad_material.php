<?php

session_start();

$usuario_autenticado=$_SESSION["usuario_autenticado"];

if($usuario_autenticado!=NULL)

{
  //Arquivo para consertar os caracteres especiais
 include('caracteres.php'); 
 //Include dos arquivos necess�rios do sistema
 include('conn.php');
 include('estilo.css');
 include('data.php');

}

else

{

 echo "<script>alert('A sess�o expirou, � preciso fazer o login novamente');

 top.location='index.php';</script>";

}

?>
<html>
</html>
<html>
<link href="estilo.css" rel="stylesheet" type="text/css">
	<style type="text/css">
<!--
body {
	background-image: url(img/background.PNG);
}
    </style>
<style type="text/css">
<!--
.style3 {
	color: #000033;
	font-weight: bold;
}
-->
</style>
<link href="responsax.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {	color: #FFFFFF;
	font-weight: bold;
	font-size: 12px;
}
.style6 {font-size: 14px}
-->
</style>
<body class=fonte>

<form name=form1 method=post>

<h1 class="style3"><font face=verdana><img src="images/material.png" width="35" height="35"> Cadastrar Material:</font></h1>
<hr color=black size=2>
<br>
<table border=0 class=fonte>


<tr>
  <td width="174"><span class="style6">Nome do Material  :</span></td>
  <td width="318"><input name=nome type=text class=botao id="nome" size=50></td></tr>
<tr>
  <td></td>
  <td>&nbsp;</td>
</tr>
<tr><td></td><td><div align="center">
  <input type=submit value=' Cadastrar ' class=por>
  <span class="atributos_titulo">
   <input name="button" type=button class="por" onClick="history.go(-1);" value="Voltar">
  </span></div></td></tr>
</table>
</form>

<p>
  <?php
$nome=$_POST['nome'];
$data=mktime();
$por=$_SESSION["usuario_autenticado"];


if($nome!=NULL)

{

 $busca_conv="select * from material where nome = '".$nome."';";
 $res_busca_conv=mysql_query($busca_conv,$conn);
 $num_conv=mysql_num_rows($res_busca_conv);
 if($num_conv==0)

 {

  $cad_conv="insert into material values ('','".$nome."','".$data."','".$por."');";

  $ok=mysql_query($cad_conv,$conn);

  if($ok==1)

  {

   $busca_conv2="select * from material where nome = '".$nome."';";

   $res_busca_conv2=mysql_query($busca_conv2,$conn);

   $campo_conv2=mysql_fetch_array($res_busca_conv2);

   echo "<script>alert('Material Cadastrado.');window.location='cad_material.php?id=$campo_conv2[id]';</script>";

  }

  else

  {

   echo "ERRO: ".mysql_error($conn).".";

  }

 }

 else

 {

  echo "<script>alert('O Material: $nome j� est� cadastrado.');</script>";

 }

}

?>
  <br>
</p>
<p>&nbsp;</p>
</body>

</html>


