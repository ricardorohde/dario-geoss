<?php
 session_start();
 

 if($_GET['lang']!=NULL){
 session_register("lang");
 $_SESSION['lang']=$_GET['lang'];
 }
?>
<title>:: Portal Sentinela - O Vigilante da Amaz&ocirc;nia. ::</title>
<LINK href="arquivos/estilo.css" type=text/css rel=stylesheet>

<style type="text/css">
<!--
body {
	background-image: url(arquivos/bg.gif);
}
-->
</style>
<style>
#lightbox{
background-color:#eee;
padding: 10px;
border-bottom: 2px solid #666;
border-right: 2px solid #666;
}
#lightboxCaption{
font-size: 0.8em;
padding-top: 0.4em;
}
#lightbox img{ border: none; }
#overlay img{ border: none; }
#overlay{
background-image: url(lightbox/overlay.png);
}
* html #overlay{
background-color: #000;
back\ground-color: transparent;
background-image: url(blank.gif);
filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="lightbox/overlay.png", sizingMethod="scale");
}
</style>
<script type="text/javascript" src="lightbox/lightbox.js"></script>
<script src="funcoesg.js" type="text/javascript"></script>
<style type="text/css">

<!--

body {

	background-color: #FFFFFF;

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}

a:link {

	color: #000000;

	text-decoration: none;

}

a:visited {

	color: #000000;

	text-decoration: none;

}

a:hover {

	color: #000000;

	text-decoration: underline;

}

a:active {

	color: #000000;

	text-decoration: none;

}

-->

</style>
<style tytpe="text/css">
.fonte{Font-Family: arial; Font-Size: 8pt; Font-Style: normal; color: #666666; Text-Decoration: none}
.fonte_link{Font-Family: arial; Font-Size: 8pt; Font-Style: normal; Text-Decoration: none}
.botao{font-family: verdana; font-size: 10 px;background-color:;}
a:link{color:'#000080';text-decoration:none}
a:active{color:'#000080'}
a:visited{color:'#000080'}
a:hover{text-decoration:none;color="black";size:1}
.boldlaranja { font-family:tahoma; font-size:11px; color:#FFFFFF; font-weight:bold; }
.boldamarelo { font-family:tahoma; font-size:11px; color:#CC9900; font-weight:bold; }
.boldazul { font-family:tahoma; font-size:11px; color:#006699; font-weight:bold; }



#Layer1 {
	position:absolute;
	left:289px;
	top:220px;
	width:366px;
	height:253px;
	z-index:1;
}
.style29 {	font-size: 12px;

	font-weight: bold;

	font-family: Arial, Helvetica, sans-serif;
}
.style29 {
	font-size: 12px;

	font-weight: bold;

	font-family: Arial, Helvetica, sans-serif;
}
</style>
<style type="text/css">
<!--
body {
	background-image: url(arquivos/bg.gif);
}
.style29 {font-size: 11px}
.acesso { font-family:Arial; font-size:11px; font-weight:bold; color:#FFFFFF; }
.titulo { font-family:Arial; font-size:18px; font-weight:bold; color:#333333; }
.atributos_titulo { font-family:Arial; font-size:11px; font-weight:bold; color:#333333; }
.materia { font-family:Tahoma; font-size:11px; color:#2D2D2D; }
.arquivo { font-family:Arial; font-size:12px; font-weight:bold; color:#FFFFFF; }
.meses { font-family:Arial; font-size:11px; font-weight:bold; color:#F6F6F6; }
.por { font-family:Verdana; font-size:10px; font-weight:bold; color:#000000; }
.comentarios_italico { font-family:Tahoma; font-size:11px;  color:#333333; font-style:italic;}
.fonte_cinza { font-family:Arial; font-size:11px; color:#666666; }
.comentarios_responsabilidade { font-family:Verdana; font-size:11px; color:#666666; font-style:italic;}
.email_materia { font-family:Verdana; font-size:12px; font-weight:bold; color:#666666;}


a.l_meses:link    { text-decoration: none; color:#FFFFFF; font-size:11px; }
a.l_meses:visited { text-decoration: none; color:#FFFFFF; font-size:11px; }
a.l_meses:active  { text-decoration: none; color:#FFFFFF; font-size:11px; }
a.l_meses:hover   { text-decoration: none; background-color:#FFFFFF; color:#333333; font-size:11px; }

a.l_menu_materia:link    { text-decoration: none; color:#333333; font-size:11px; }
a.l_menu_materia:visited { text-decoration: none; color:#333333; font-size:11px; }
a.l_menu_materia:active  { text-decoration: none; color:#333333; font-size:11px; }
a.l_menu_materia:hover   { text-decoration: none; background-color:#E9E9E9; color:#000000; font-size:11px; }

a.menu_principal:link    { text-decoration: none; color:#333333; font-size:11px;}
a.menu_principal:visited { text-decoration: none; color:#333333; font-size:11px;}

a.menu_principal:hover   { text-decoration: none; color:#000000; font-size:11px; font-weight:bold}
a.menu_principal:active  { text-decoration: none; color:#33333; font-size:11px;}
-->
</style>
<style>
#lightbox{
background-color:#eee;
padding: 10px;
border-bottom: 2px solid #666;
border-right: 2px solid #666;
}
#lightboxCaption{
font-size: 0.8em;
padding-top: 0.4em;
}
#lightbox img{ border: none; }
#overlay img{ border: none; }
#overlay{
background-image: url(lightbox/overlay.png);
}
* html #overlay{
background-color: #000;
back\ground-color: transparent;
background-image: url(blank.gif);
filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="lightbox/overlay.png", sizingMethod="scale");
}
.style30 {font-size: 12px;

	font-weight: bold;

	font-family: Arial, Helvetica, sans-serif;
}
.style30 {	font-size: 12px;

	font-weight: bold;

	font-family: Arial, Helvetica, sans-serif;
}
.style81 {color: #FFFFFF}
.style82 {font-size: 12px}
.style83 {font-family: Tahoma}
.style33 {color: #0000FF}
.style34 {color: #000099}
</style>
<script type="text/javascript" src="lightbox/lightbox.js"></script>
<?php
 include('random.php');
 $foto = gera_foto(); 
?>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td class="style22"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="1"></td>
      </tr>
    </table>
      <table width="776" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
          <td height="112"><table width="772" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td height="2"></td>
            </tr>
          </table>
            <table width="772" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td width="772" height="150" background="arquivos/<?php print $foto; ?>.jpg"><table width="768" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="124" colspan="2">&nbsp;</td>
                  </tr>
                  <tr><?php
						if($_POST['buscarnot']){
						$buscar = $_POST['buscar'];
						echo "<script>window.location='noticias.php?busca=$buscar';</script>";
						}
						?>
                                        <td width="35"><img src="arquivos/BotaoLupa.jpg" width="26" height="24"></td>
                     <form action="http://www.portalsentinela.com/busca.php" id="cse-search-box"> <td width="733">
<style type="text/css">
@import url(http://www.google.com/cse/api/branding.css);
</style>

        
        <input type="hidden" name="cx" value="partner-pub-3585189984164153:3q4q63-1f2p" />
        <input type="hidden" name="cof" value="FORID:11" />
        <input type="text" name="q" size="28" />
        <input type="submit" name="sa" value="Pesquisar" />
                      </td></form>
                  </tr>
                </table></td>
              </tr>
            </table>
            <table width="772" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="2"><table width="772" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="3"></td>
                    </tr>
                  <tr>
                    <td height="1" bgcolor="#999999"></td>
                    </tr>
                  <tr>
                    <td height="3"></td>
                    </tr>
                </table>
                  <table width="772" height="17" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="3%" height="17"><div align="center"><img src="arquivos/casa.gif" width="16" height="15" /></div></td>
                    <td width="5%" class="style11 style1"><a href="index.php" class="style25"><span class="menu">         <?php
					 if($_SESSION['lang']==''){
                     $_SESSION['lang']='Brazil';
 }					  ?>
                      <?php if(($_SESSION['lang']=='Brazil')or($_SESSION['lang']=='')){	?></span>Capa
                      <?php } if($_SESSION['lang']=='eng') { ?></span>Index<?php } if($_SESSION['lang']=='esp') { ?></span>In�cio
                      <?php } ?></span></a></td>
                    <td width="2%"><img src="arquivos/seta.gif" width="10" height="10" /></td>
                    <td width="44%" class="style11 style1 style25"><span class="style25"><a href="videos.php">Videos</a> | <a href="expediente.php">Expediente</a> | <a href="colunistas.php">Colunistas</a> | <a href="index.php" class="style25"><span class="menu">
                      <?php if(($_SESSION['lang']=='Brazil')or($_SESSION['lang']=='')){	?>                    </span></a><a href="contato.php">Fale Conosco</a><?php } if($_SESSION['lang']=='eng') { ?></span></a><a href="contato.php">Contact</a><?php } if($_SESSION['lang']=='esp') { ?></span></a><a href="contato.php">Hable conosco</a><?php } ?>  | <a href="#" onClick="javascript:window.external.AddFavorite('http://www.portalsentinela.com/','Portal Sentinela');">Favoritos</a></span></td>
                    <td width="46%" class="style11 style1"><table width="360" border="0" align="right" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="4%"><div align="center"><img src="arquivos/calendario.gif" width="14" height="14"></div></td>
                        <td width="81%"><span class="style26">
<?php					
 if(($_SESSION['lang']=='Brazil')or($_SESSION['lang']=='')){
$dia_semana = date("w");

						  switch($dia_semana)
   {
      case "0" : echo "Domingo"; break;
      case "1" : echo "Segunda"; break;
      case "2" : echo "Ter&ccedil;a"; break;
      case "3" : echo "Quarta"; break;
      case "4" : echo "Quinta"; break;
      case "5" : echo "Sexta"; break;
      case "6" : echo "S&aacute;bado"; break;
   }

						   ?>
,
<?php

    $dia=date('d');

    $mes=date('m');

    $ano=date('Y');

    $hora=date('H');

    $min=date('i');

    $xx="Bom dia";

    $mes2['01']="Janeiro";

    $mes2['02']="Fevereiro";

    $mes2['03']="Mar&ccedil;o";

    $mes2['04']="Abril";

    $mes2['05']="Maio";

    $mes2['06']="Junho";

    $mes2['07']="Julho";

    $mes2['08']="Agosto";

    $mes2['09']="Setembro";

    $mes2['10']="Outubro";

    $mes2['11']="Novembro";

    $mes2['12']="Dezembro";

    if(($hora>=12)and($hora<18))

    {

     $xx="Boa tarde";

    }

    if(($hora>=18)and($hora<=24))

    {

     $xx="Boa noite";

    }

    echo "$dia de ".$mes2[$mes]." de $ano. $xx";
	
} else {
$dia_semana = date("w");

						  switch($dia_semana)
   {
      case "0" : echo "Sunday"; break;
      case "1" : echo "Monday"; break;
      case "2" : echo "Tuesday"; break;
      case "3" : echo "Wednesday"; break;
      case "4" : echo "Thursday"; break;
      case "5" : echo "Friday"; break;
      case "6" : echo "Saturday"; break;
   }

						   ?>
,
<?php

    $dia=date('d');

    $mes=date('m');

    $ano=date('Y');

    $hora=date('H');

    $min=date('i');

    $xx="Good Day";

    $mes2['01']="January";

    $mes2['02']="February";

    $mes2['03']="March";

    $mes2['04']="April";

    $mes2['05']="May";

    $mes2['06']="Juny";

    $mes2['07']="July";

    $mes2['08']="August";

    $mes2['09']="September";

    $mes2['10']="October";

    $mes2['11']="November";

    $mes2['12']="December";

    if(($hora>=12)and($hora<18))

    {

     $xx="Good Afternoon";

    }

    if(($hora>=18)and($hora<=24))

    {

     $xx="Good Night";

    }

    echo "$dia of ".$mes2[$mes]." of $ano. $xx";

}
	

	
	
	include "conn.php";
//Contando o numero de noticias por cada categoria
$consulta_cat = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '1'") or die(mysql_error());
$total_cat = mysql_result($consulta_cat,0,"total");	

$consulta_cat2 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '2'") or die(mysql_error());
$total_cat2 = mysql_result($consulta_cat2,0,"total");

$consulta_cat3 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '3'") or die(mysql_error());
$total_cat3 = mysql_result($consulta_cat3,0,"total");

$consulta_cat4 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '4'") or die(mysql_error());
$total_cat4 = mysql_result($consulta_cat4,0,"total");	

$consulta_cat5 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '5'") or die(mysql_error());
$total_cat5 = mysql_result($consulta_cat5,0,"total");

$consulta_cat6 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '6'") or die(mysql_error());
$total_cat6 = mysql_result($consulta_cat6,0,"total");

$consulta_cat7 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '7'") or die(mysql_error());
$total_cat7 = mysql_result($consulta_cat7,0,"total");

$consulta_cat8 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '8'") or die(mysql_error());
$total_cat8 = mysql_result($consulta_cat8,0,"total");

$consulta_cat9 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '9'") or die(mysql_error());
$total_cat9 = mysql_result($consulta_cat9,0,"total");

$consulta_cat10 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '10'") or die(mysql_error());
$total_cat10 = mysql_result($consulta_cat10,0,"total");

$consulta_cat11 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '11'") or die(mysql_error());
$total_cat11 = mysql_result($consulta_cat11,0,"total");

$consulta_cat12 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '12'") or die(mysql_error());
$total_cat12 = mysql_result($consulta_cat12,0,"total");

$consulta_cat13 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '13'") or die(mysql_error());
$total_cat13 = mysql_result($consulta_cat13,0,"total");

$consulta_cat14 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '14'") or die(mysql_error());
$total_cat14 = mysql_result($consulta_cat14,0,"total");

$consulta_cat15 = mysql_query("SELECT count(codigo_categoria) as total FROM noticias WHERE codigo_categoria = '15'") or die(mysql_error());
$total_cat15 = mysql_result($consulta_cat15,0,"total");

    ?>!</span><font color=blue class="style22">
&nbsp;&nbsp;<?php //include('whosonline.php'); ?>
</font></td>
                        <td width="15%"><?php if($_SESSION['lang']=='eng'){	?>
                          <a href="index.php?lang=Brazil"><img src="images/Brazil.gif" alt="Brazil" width="18" height="12" border="0" /></a><span class="style25"> | </span> <a href="index.php?lang=esp"><img src="images/Spain.gif" alt="English" width="18" height="12" border="0" /></a>
                          <?php } ?>
                          <?php if(($_SESSION['lang']=='Brazil')or($_SESSION['lang']=='')){ ?>
                          <a href="index.php?lang=eng"><img src="images/United_States.gif" alt="English" width="18" height="12" border="0" /></a><span class="style25"> | </span> <a href="index.php?lang=esp"><img src="images/Spain.gif" alt="Espanish" width="18" height="12" border="0" /></a>
                          <?php } ?>
                          <?php if($_SESSION['lang']=='esp'){ ?>
                          <a href="index.php?lang=Brazil"><img src="images/Brazil.gif" alt="Brazil" width="18" height="12" border="0" /></a><span class="style25"> | </span> <a href="index.php?lang=eng"><img src="images/United_States.gif" alt="English" width="18" height="12" border="0" /></a>
                          <?php } ?></td>
                      </tr>
                    </table></td>
                    </tr>
                </table>
                  <table width="772" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="3"></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="1"></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="8" class="style22"></td>
  </tr>
</table>
<table width="778" height="227" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="155" valign="top" class="style22"><table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="59" class="style22"><table width="154" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tr>
              <td width="159"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="1" class="style22"></td>
                  </tr>
                </table>
				<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="98" height="18" background="images/bg.jpg" class="style27"><div align="left" class="style11 style25 style71"><strong>&nbsp;<?php if($_GET['lang']=='Brazil'){	?>
                              <span class="style81">Menu:</span>
                            <?php } else { ?>
                            <span class="style81">Menu:</span>
                            <?php } ?></strong></div></td>
                          </tr>
                  </table>
                  <table width="152" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                      <td width="152" height="68" valign="top"><DIV class=menu>
					  
<UL>
   <li><a title="Principal" 
            href="index.php">Principal</a></li>
  <LI><A title="R�dio Sentinela Ao Vivo" 
            href="radio.php">R�dio Sentinela Ao Vivo</A></LI>
  <LI><A title="R�dio e TV Sentinela" 
            href="http://www.tvsentinela.com/" target="_blank">R�dio e TV Sentinela</A></LI>
			 <LI><A title="Busque no Portal Sentinela" 
            href="buscaportal.php">Busca do Portal</A></LI>				
   <LI><A title="V&iacute;deos" 
            href="videos.php">V&iacute;deos TV Sentinela </A></LI>
                  <LI><A title="Galeria de Fotos" 
            href="galeria_i.php">Galeria Fotos Internauta </A></LI>
                  <LI><A 
            href="chat" title="Chat" target="_blank">Chat</A></LI>
			      <LI><A 
            href="sugestoes.php" title="Sugest�es">Sugest�es</A></LI>
			   <LI><A 
            href="denuncie.php" title="Denuncie Aqui">Denuncie Aqui</A></LI>
			      <LI><A title="Not�cias do Internauta" 
            href="ajude.php">Not�cias do Internauta</A></LI>
                  <LI><A title="Not�cias da Cidade" 
            href="not.php?codigo_categoria=1">Not�cias de &Oacute;bidos </A></LI>
                  <LI><A title="Brasil" 
            href="not.php?codigo_categoria=2">Brasil</A></LI>
                  <LI><A title="Coluna Social" 
            href="not.php?codigo_categoria=3">Coluna Social  </A></LI>
                  <LI><A title="Amaz�nia Urgente" 
            href="not.php?codigo_categoria=4">Amaz�nia Urgente </A></LI>
                  <LI><A 
            href="previsao.php" title="Previs�o do Tempo">Previs&atilde;o do Tempo  </A></LI>
                  <LI><A title="Cultura" 
            href="not.php?codigo_categoria=6">Cultura  </A></LI>
                  <LI><A title="Educa&ccedil;&atilde;o" 
            href="not.php?codigo_categoria=7">Educa&ccedil;&atilde;o</A></LI>
                  <LI><A title="Esporte" 
            href="not.php?codigo_categoria=8">Esporte </A></LI>
			      <LI><A title="Tecnologia"
		    href="not.php?codigo_categoria=9">Tecnologia  </A></LI>
                  <LI><A 
            href="http://www1.folha.uol.com.br/folha/urania/signoexpress1.shtml" title="Hor&oacute;scopo" target="_blank">Hor&oacute;scopo </A></LI>
                  <LI><A title="Not�cias da Regi�o" 
            href="not.php?codigo_categoria=11">Not�cias da Regi�o</A></LI>
                  <LI><A title="Mundo" 
            href="not.php?codigo_categoria=12">Mundo </A></LI>
                  <LI><A title="Neg&oacute;cios" 
            href="not.php?codigo_categoria=13">Neg&oacute;cios</A></LI>
                  <LI><A title="Sa&uacute;de" 
            href="not.php?codigo_categoria=14">Sa&uacute;de</A></LI>
                  <LI><A title="Turismo" 
            href="not.php?codigo_categoria=15">Turismo </A></LI>
           
  </UL>
</DIV></DIV></td>
                    </tr>
                  </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1"></td>
                    </tr>
                </table></td>
            </tr>
        </table></td>
      </tr>
    </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="152" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="152" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="68" valign="top"><table width="150" height="68" border="1">
                          <tr>
                            <td width="140"><div align="center"><span class="style26">
                                <?php
                   
		  
		  		 //Contando o n&uacute;mero de foto_do_dia existentes
$consulta_propaganda = mysql_query("SELECT count(codigo_propaganda) as total FROM propaganda WHERE nome_propaganda='1'") or die(mysql_error());
$total_propaganda = mysql_result($consulta_propaganda,0,"total");
         if($total_propaganda==0){ 
		 echo "<font class=materia>Espa�o Reservado.</font>";  }
	          

		  $busca_propaganda= "SELECT * FROM propaganda where ativado=0 order by rand();";
          $res_busca_propaganda=mysql_query($busca_propaganda,$conn);
          $num_propaganda=mysql_num_rows($res_busca_propaganda);


          $col=1;



          $linha=$num_propaganda/$col;



          if($linha>1)



          {



           $linha=1;



          }



          echo "<table border=0 class=fonte width=100 cellspacing=0>";



          for($l=0;$l<$linha;$l++)



          {



           echo "<tr>";



           for($c=0;$c<$col;$c++)



           {



            $campo_propaganda=mysql_fetch_array($res_busca_propaganda);



            echo "<td>";



            if($campo_propaganda[codigo_propaganda]!=NULL)



            {



             $busca_foto="select * from foto_propaganda where codigo_propaganda = '1' order by rand();";



             $res_busca_foto=mysql_query($busca_foto,$conn);



             $num_foto=mysql_num_rows($res_busca_foto);



             if($num_foto>0)



             {



              $campo_foto=mysql_fetch_array($res_busca_foto);



              echo "<center><a href=$campo_foto[descricao_foto] target=_blank><img src=admin/$campo_foto[foto] name=PictureBox width=140 height=48 border=0></a><BR>";



             }


/*
             echo "<font size=2 class='materia' color=black><b>".$campo_propaganda[nome_propaganda]."</b></font>



            ";
*/


             echo "</center></a></td>";



            }



           }



           echo "</tr>";



          }



          echo "</table>";



          ?>
                            </span></div></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="152" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="152" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="68" valign="top"><table width="150" height="68" border="1">
                          <tr>
                            <td width="140"><div align="center"><span class="style26"><?php
                   
		  
		  		 //Contando o n&uacute;mero de foto_do_dia existentes
$consulta_propaganda = mysql_query("SELECT count(codigo_propaganda) as total FROM propaganda WHERE nome_propaganda='2'") or die(mysql_error());
$total_propaganda = mysql_result($consulta_propaganda,0,"total");
         if($total_propaganda==0){ 
		 echo "<font class=materia>Espa�o Reservado.</font>";  }
	          

		  $busca_propaganda= "SELECT * FROM propaganda where ativado=0 order by rand();";
          $res_busca_propaganda=mysql_query($busca_propaganda,$conn);
          $num_propaganda=mysql_num_rows($res_busca_propaganda);


          $col=1;



          $linha=$num_propaganda/$col;



          if($linha>1)



          {



           $linha=1;



          }



          echo "<table border=0 class=fonte width=100 cellspacing=0>";



          for($l=0;$l<$linha;$l++)



          {



           echo "<tr>";



           for($c=0;$c<$col;$c++)



           {



            $campo_propaganda=mysql_fetch_array($res_busca_propaganda);



            echo "<td>";



            if($campo_propaganda[codigo_propaganda]!=NULL)



            {



             $busca_foto="select * from foto_propaganda where codigo_propaganda = '2' order by rand();";



             $res_busca_foto=mysql_query($busca_foto,$conn);



             $num_foto=mysql_num_rows($res_busca_foto);



             if($num_foto>0)



             {



              $campo_foto=mysql_fetch_array($res_busca_foto);



              echo "<center><a href=$campo_foto[descricao_foto] target=_blank><img src=admin/$campo_foto[foto] name=PictureBox width=140 height=48 border=0></a><BR>";



             }


/*
             echo "<font size=2 class='materia' color=black><b>".$campo_propaganda[nome_propaganda]."</b></font>



            ";
*/


             echo "</center></a></td>";



            }



           }



           echo "</tr>";



          }



          echo "</table>";



          ?>
                            </span></div></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="152" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="152" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="68" valign="top"><table width="150" height="68" border="1">
                          <tr>
                            <td width="140"><div align="center"><span class="style26">
                              <?php
                   
		  
		  		 //Contando o n&uacute;mero de foto_do_dia existentes
$consulta_propaganda = mysql_query("SELECT count(codigo_propaganda) as total FROM propaganda WHERE nome_propaganda='3'") or die(mysql_error());
$total_propaganda = mysql_result($consulta_propaganda,0,"total");
         if($total_propaganda==0){ 
		 echo "<font class=materia>Espa�o Reservado.</font>";  }
	          

		  $busca_propaganda= "SELECT * FROM propaganda where ativado=0 order by rand();";
          $res_busca_propaganda=mysql_query($busca_propaganda,$conn);
          $num_propaganda=mysql_num_rows($res_busca_propaganda);


          $col=1;



          $linha=$num_propaganda/$col;



          if($linha>1)



          {



           $linha=1;



          }



          echo "<table border=0 class=fonte width=100 cellspacing=0>";



          for($l=0;$l<$linha;$l++)



          {



           echo "<tr>";



           for($c=0;$c<$col;$c++)



           {



            $campo_propaganda=mysql_fetch_array($res_busca_propaganda);



            echo "<td>";



            if($campo_propaganda[codigo_propaganda]!=NULL)



            {



             $busca_foto="select * from foto_propaganda where codigo_propaganda = '3' order by rand();";



             $res_busca_foto=mysql_query($busca_foto,$conn);



             $num_foto=mysql_num_rows($res_busca_foto);



             if($num_foto>0)



             {



              $campo_foto=mysql_fetch_array($res_busca_foto);



              echo "<center><a href=$campo_foto[descricao_foto] target=_blank><img src=admin/$campo_foto[foto] name=PictureBox width=140 height=48 border=0></a><BR>";



             }


/*
             echo "<font size=2 class='materia' color=black><b>".$campo_propaganda[nome_propaganda]."</b></font>



            ";
*/


             echo "</center></a></td>";



            }



           }



           echo "</tr>";



          }



          echo "</table>";



          ?>
                            </span></div></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="152" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="152" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="68" valign="top"><table width="150" height="68" border="1">
                            <tr>
                              <td width="140"><div align="center"><span class="style26">
                                  <?php
                   
		  
		  		 //Contando o n&uacute;mero de foto_do_dia existentes
$consulta_propaganda = mysql_query("SELECT count(codigo_propaganda) as total FROM propaganda WHERE nome_propaganda='4'") or die(mysql_error());
$total_propaganda = mysql_result($consulta_propaganda,0,"total");
         if($total_propaganda==0){ 
		 echo "<font class=materia>Espa�o Reservado.</font>";  }
	          

		  $busca_propaganda= "SELECT * FROM propaganda where ativado=0 order by rand();";
          $res_busca_propaganda=mysql_query($busca_propaganda,$conn);
          $num_propaganda=mysql_num_rows($res_busca_propaganda);


          $col=1;



          $linha=$num_propaganda/$col;



          if($linha>1)



          {



           $linha=1;



          }



          echo "<table border=0 class=fonte width=100 cellspacing=0>";



          for($l=0;$l<$linha;$l++)



          {



           echo "<tr>";



           for($c=0;$c<$col;$c++)



           {



            $campo_propaganda=mysql_fetch_array($res_busca_propaganda);



            echo "<td>";



            if($campo_propaganda[codigo_propaganda]!=NULL)



            {



             $busca_foto="select * from foto_propaganda where codigo_propaganda = '4' order by rand();";



             $res_busca_foto=mysql_query($busca_foto,$conn);



             $num_foto=mysql_num_rows($res_busca_foto);



             if($num_foto>0)



             {



              $campo_foto=mysql_fetch_array($res_busca_foto);



              echo "<center><a href=$campo_foto[descricao_foto] target=_blank><img src=admin/$campo_foto[foto] name=PictureBox width=140 height=48 border=0></a><BR>";



             }


/*
             echo "<font size=2 class='materia' color=black><b>".$campo_propaganda[nome_propaganda]."</b></font>



            ";
*/


             echo "</center></a></td>";



            }



           }



           echo "</tr>";



          }



          echo "</table>";



          ?>
                              </span></div></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="152" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="152" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="68" valign="top"><table width="150" height="68" border="1">
                            <tr>
                              <td width="140"><div align="center"><span class="style26">
                                <?php
                   
		  
		  		 //Contando o n&uacute;mero de foto_do_dia existentes
$consulta_propaganda = mysql_query("SELECT count(codigo_propaganda) as total FROM propaganda WHERE nome_propaganda='5'") or die(mysql_error());
$total_propaganda = mysql_result($consulta_propaganda,0,"total");
         if($total_propaganda==0){ 
		 echo "<font class=materia>Espa�o Reservado.</font>";  }
	          

		  $busca_propaganda= "SELECT * FROM propaganda where ativado=0 order by rand();";
          $res_busca_propaganda=mysql_query($busca_propaganda,$conn);
          $num_propaganda=mysql_num_rows($res_busca_propaganda);


          $col=1;



          $linha=$num_propaganda/$col;



          if($linha>1)



          {



           $linha=1;



          }



          echo "<table border=0 class=fonte width=100 cellspacing=0>";



          for($l=0;$l<$linha;$l++)



          {



           echo "<tr>";



           for($c=0;$c<$col;$c++)



           {



            $campo_propaganda=mysql_fetch_array($res_busca_propaganda);



            echo "<td>";



            if($campo_propaganda[codigo_propaganda]!=NULL)



            {



             $busca_foto="select * from foto_propaganda where codigo_propaganda = '5' order by rand();";



             $res_busca_foto=mysql_query($busca_foto,$conn);



             $num_foto=mysql_num_rows($res_busca_foto);



             if($num_foto>0)



             {



              $campo_foto=mysql_fetch_array($res_busca_foto);



              echo "<center><a href=$campo_foto[descricao_foto] target=_blank><img src=admin/$campo_foto[foto] name=PictureBox width=140 height=48 border=0></a><BR>";



             }


/*
             echo "<font size=2 class='materia' color=black><b>".$campo_propaganda[nome_propaganda]."</b></font>



            ";
*/


             echo "</center></a></td>";



            }



           }



           echo "</tr>";



          }



          echo "</table>";



          ?>
                              </span></div></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="152" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="152" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="150" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="68" valign="top"><table width="150" height="68" border="1">
                            <tr>
                              <td width="140"><div align="center"><span class="style26">
                                  <?php
                   
		  
		  		 //Contando o n&uacute;mero de foto_do_dia existentes
$consulta_propaganda = mysql_query("SELECT count(codigo_propaganda) as total FROM propaganda WHERE nome_propaganda='6'") or die(mysql_error());
$total_propaganda = mysql_result($consulta_propaganda,0,"total");
         if($total_propaganda==0){ 
		 echo "<font class=materia>Espa�o Reservado.</font>";  }
	          

		  $busca_propaganda= "SELECT * FROM propaganda where ativado=0 order by rand();";
          $res_busca_propaganda=mysql_query($busca_propaganda,$conn);
          $num_propaganda=mysql_num_rows($res_busca_propaganda);


          $col=1;



          $linha=$num_propaganda/$col;



          if($linha>1)



          {



           $linha=1;



          }



          echo "<table border=0 class=fonte width=100 cellspacing=0>";



          for($l=0;$l<$linha;$l++)



          {



           echo "<tr>";



           for($c=0;$c<$col;$c++)



           {



            $campo_propaganda=mysql_fetch_array($res_busca_propaganda);



            echo "<td>";



            if($campo_propaganda[codigo_propaganda]!=NULL)



            {



             $busca_foto="select * from foto_propaganda where codigo_propaganda = '6' order by rand();";



             $res_busca_foto=mysql_query($busca_foto,$conn);



             $num_foto=mysql_num_rows($res_busca_foto);



             if($num_foto>0)



             {



              $campo_foto=mysql_fetch_array($res_busca_foto);



              echo "<center><a href=$campo_foto[descricao_foto] target=_blank><img src=admin/$campo_foto[foto] name=PictureBox width=140 height=48 border=0></a><BR>";



             }


/*
             echo "<font size=2 class='materia' color=black><b>".$campo_propaganda[nome_propaganda]."</b></font>



            ";
*/


             echo "</center></a></td>";



            }



           }



           echo "</tr>";



          }



          echo "</table>";



          ?>
                              </span></div></td>
                            </tr>
                        </table></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
    </td>
    <td width="4" valign="top" class="style22">&nbsp;</td>
    <td width="474" valign="top" class="style22"><table width="470" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="1" class="style22"></td>
            </tr>
          </table>
            <table width="468" height="575" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
              <tr>
                <td height="464" valign="top"><table width="468" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="20" background="imgalessandro6.jpg"><table width="468" border="0" align="left" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="20" background="images/bg.jpg"><span class="style26 style28"><span class="menu"><?php if(($_SESSION['lang']=='Brazil')or($_SESSION['lang']=='')){	?></span><span class="style81">Den&uacute;ncias [ <?php $consultac = mysql_query("SELECT count(id_cmt) as total FROM denuncia WHERE ativado='0'") or die(mysql_error());
print mysql_result($consultac,0,"total"); ?> ] 
                              <?php } if($_SESSION['lang']=='eng') { ?>
                            </span></span><span class="style81"><strong>Denuncias</strong>
                            <?php } if($_SESSION['lang']=='esp') { ?>
                            <strong>Denuncia</strong></span>
                            <?php } ?>
                            </span></span></td>
                          </tr>
                        </table></td>
                      </tr>
                    </table>
                    <center>
                    <br />
                    <table width="468" height="207" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td height="143" valign="top"><table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td height="6" class="style22"></td>
                          </tr>
                        </table>
						<table width="464" border="0" cellspacing="0" cellpadding="0">
                          <tr>
						    <td height="200" background=""><div align="center"><span style="border:2px #EAEAEA dotted;"><span class="materia">Den&uacute;ncias do Portal Sentinela aqui. Existem <b><?php $consultacc = mysql_query("SELECT count(id_cmt) as total FROM denuncia WHERE ativado='1'") or die(mysql_error());
print mysql_result($consultacc,0,"total"); ?></b> Den�ncias a serem averiguadas.</span></span></div>
					          <span style="border:2px #EAEAEA dotted;"><span class="materia"><img src="arquivos/indio.gif" width="109" height="116" align="left" /></span></span><br />
					        <br />
					        <br />
					        <br />
					        <br />
					        <br />
					        <br />
					        <?php
//Contando o n&uacute;mero de perguntas existentes
$consultac = mysql_query("SELECT count(id_cmt) as total FROM tab_perguntas") or die(mysql_error());
$totalcom = mysql_result($consultac,0,"total");
//Contando o n&uacute;mero de respostas existentes
$consultacc = mysql_query("SELECT count(id_cmt) as total FROM tab_respostas") or die(mysql_error());
$totalcom2 = mysql_result($consultacc,0,"total");
?>
                            <table width="94%" border="0" cellpadding="0" cellspacing="0">
                              
                              <tr>
                                <?php
		$consulta = mysql_query("SELECT * FROM denuncia WHERE ativado = '0' ORDER BY id_cmt DESC") or die(mysql_error());
		


    $i=0;
	while($comentarios=mysql_fetch_array($consulta)) {
    $i++;
	
							
								 
?>
                                <td width="587" align="center" valign="top" class="legenda_foto" style="padding-top:15px; padding:5px; border:2px #EAEAEA dotted;"><div align="left" class="materia">
                                    <table border="0" cellpadding="0" cellspacing="0" width="459" height="42">
                                      <tr>
                                        <td width="566" valign="top" bgcolor="#CCCCCC" style="border: 1px dashed #CC0000"><p align="left" class="materia"><strong><b><?php=$comentarios['nome_cmt']?>
                                            </b> </strong>em <span class="style83" style="border-top:1px #CCCCCC dotted;; font-size:11px; color:#333333;">
                                            <?php=$comentarios['data_cmt']?>
                                              &nbsp;&nbsp;
                                              <?php=$comentarios['hora_cmt']?>
                                            </span> : <b>
                                              <?php=$comentarios['texto_cmt']?>
                                              </b> <br />
                                          </p>
                                          <p align="left" class="materia">&nbsp;</p></td>
                                      </tr>
                                      <?php
$consulta2 = mysql_query("SELECT * FROM tab_respostas WHERE codigo_pergunta = '".$comentarios['id_cmt']."'") or die(mysql_error());

$i=0;
while($campo_resp=mysql_fetch_array($consulta2)) {
$i++;
?>
                                      <tr>                                      </tr>
                                      <?php } ?>
                                    </table>
                                </div></td>
                              </tr>
                              <?php } ?>
                            </table>
                            <p style="padding:10px; padding-top:0px;"><span class="materia">
                              <?php if($totalcom==0){ echo "<font class='materia'>Ainda n&atilde;o h&aacute; perguntas.</font>"; } ?>
                              <br />
                              <br />
                              <br />
                              <br />
                              <br />
                              <br />
                              <br />
                              <br />
                              <br />
                            </span></p></td>
                          </tr></table>
						
                        </td>
                      </tr>
                    </table>
                    <p class="style25 style11 style25 style25">&nbsp;</p>
                    </td>
              </tr>
            </table>
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="1"></td>
              </tr>
          </table></td>
      </tr>
    </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="470" height="62" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="470" height="62" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#666666">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="468" height="60" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="60" valign="top"><script type="text/javascript"><!--
google_ad_client = "pub-3585189984164153";
/* 468x60, created 5/6/08 */
google_ad_slot = "4824279746";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table></td>
    <td width="145" valign="top" class="style22"><table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="144" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
            <tr>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="1" class="style22"></td>
                  </tr>
                </table>
                  <table width="142" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                    <tr>
                      <td height="68" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="98" height="20" background="images/bg.jpg" class="style27"><div align="left" class="style11 style25"><strong>&nbsp;<span class="style81">Enquete:</span></strong></div></td>
                        </tr>
                      </table>
                        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="98" height="1" bgcolor="#CCCCCC" class="style27"></td>
                          </tr>
                        </table>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="197"><?php
include ("enquete/apgconecta.php");
require ("enquete/apgvota.php");
?></td>
                          </tr>
                        </table></td>
                    </tr>
                  </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1"></td>
                    </tr>
                </table></td>
            </tr>
          </table></td>
        </tr>
          </table>      
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="144" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="142" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="68" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="98" height="20" background="images/bg.jpg" class="style27"><div align="left" class="style11 style25"><strong><span class="menu"><?php if(($_SESSION['lang']=='Brazil')or($_SESSION['lang']=='')){	?></span><span class="style81">Foto do Dia :<span class="style26 style28">
                              <?php } if($_SESSION['lang']=='eng') { ?>
                              <span class="style25">Picture of Day:</span>
                              <?php } if($_SESSION['lang']=='esp') { ?>
                              <span class="style25">Image del dia:
                              <?php } ?>
                              </span> </span></span></strong></div></td>
                          </tr>
                        </table>
                          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="98" height="1" bgcolor="#CCCCCC" class="style27"></td>
                            </tr>
                          </table>
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td height="122"><div align="center">
                                <?php
                   
		  
		  		 //Contando o n&uacute;mero de foto_do_dia existentes
$consulta_foto_dia = mysql_query("SELECT count(codigo_foto_dia) as total FROM foto_dia") or die(mysql_error());
$total_foto_dia = mysql_result($consulta_foto_dia,0,"total");
         if($total_foto_dia==0){ 
		 echo "<font class=materia>N&atilde;o h&aacute; Foto do Dia cadastrada.</font>";  }
	          

		  $busca_foto_dia= "SELECT * FROM foto_dia where ativado=0 order by codigo_foto_dia DESC limit 0,1;";
          $res_busca_foto_dia=mysql_query($busca_foto_dia,$conn);
          $num_foto_dia=mysql_num_rows($res_busca_foto_dia);


          $col=3;



          $linha=$num_foto_dia/$col;



          if($linha>3)



          {



           $linha=2;



          }



          echo "<table border=0 class=fonte width=100 cellspacing=0>";



          for($l=0;$l<$linha;$l++)



          {



           echo "<tr>";



           for($c=0;$c<$col;$c++)



           {



            $campo_foto_dia=mysql_fetch_array($res_busca_foto_dia);



            echo "<td>";



            if($campo_foto_dia[codigo_foto_dia]!=NULL)



            {



             $busca_foto="select * from foto_foto_dia where codigo_foto_dia = '".$campo_foto_dia[codigo_foto_dia]."' order by codigo_foto_dia DESC limit 0,1;";



             $res_busca_foto=mysql_query($busca_foto,$conn);



             $num_foto=mysql_num_rows($res_busca_foto);



             if($num_foto>0)



             {



              $campo_foto=mysql_fetch_array($res_busca_foto);



              echo "<center><a href=admin/$campo_foto[foto] rel=lightbox title=$campo_foto[descricao_foto]><img src=admin/$campo_foto[foto] name=PictureBox width=100 border=0></a><BR>";



             }



             echo "<font size=2 class='materia' color=black><b>".$campo_foto_dia[nome_foto_dia]."</b></font>



            ";



             echo "</center></a></td>";



            }



           }



           echo "</tr>";



          }



          echo "</table>";



          ?>
                              </div></td>
                            </tr>
                          </table></td>
                      </tr>
                  </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="59" class="style22"><table width="144" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
              <tr>
                <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td height="1" class="style22"></td>
                    </tr>
                  </table>
                    <table width="142" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                      <tr>
                        <td height="68"><div align="center" class="style21">
                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="98" height="20" background="images/bg.jpg" class="style27"><div align="left" class="style25 style25"><strong>&nbsp;<span class="style81">Publicidade:</span></strong></div></td>
                              </tr>
                            </table>
                          <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td width="98" height="1" bgcolor="#CCCCCC" class="style27"></td>
                              </tr>
                            </table>
                          <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="6" class="style22"></td>
                              </tr>
                            </table>
                          <script type="text/javascript"><!--
google_ad_client = "pub-3585189984164153";
/* 120x600, created 5/10/08 */
google_ad_slot = "2770220984";
google_ad_width = 120;
google_ad_height = 600;
//-->
        </script>
                            <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
                            <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="6" class="style22"></td>
                              </tr>
                            </table>
                          <script type="text/javascript"><!--
google_ad_client = "pub-3585189984164153";
/* 120x240, created 5/10/08 */
google_ad_slot = "1891746805";
google_ad_width = 120;
google_ad_height = 240;
//-->
        </script>
                            <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
                            <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="6" class="style22"></td>
                              </tr>
                            </table>
                          <script type="text/javascript"><!--
google_ad_client = "pub-3585189984164153";
/* 120x240, created 5/10/08 */
google_ad_slot = "7666152373";
google_ad_width = 120;
google_ad_height = 240;
google_cpa_choice = ""; // on file
//-->
        </script>
                            <script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
        </script>
                            <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td height="6" class="style22"></td>
                              </tr>
                            </table>
                        </div></td>
                      </tr>
                    </table>
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td height="1"></td>
                      </tr>
                  </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="50" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="6" class="style22"></td>
        </tr>
      </table></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="8" class="style22"></td>
  </tr>
</table>
<table width="778" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="1" class="style22"></td>
      </tr>
    </table>
        <table width="776" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td height="35"><div align="center" class="style21"><span class="style17"><span class="style18">Copyright &copy; Portal Sentinela.com Todos os   direitos reservados<br />
            </span></span><span class="style16"><strong>Proibida a c&oacute;pia</strong> ou qualquer outra forma de   reprodu&ccedil;&atilde;o, integral ou parcial, sem o pr&eacute;vio acordo do autor.</span></div></td>
          </tr>
        </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="1"></td>
          </tr>
      </table></td>
  </tr>
</table>
