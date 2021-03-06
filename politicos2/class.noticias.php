
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        noticias
* GENERATION DATE:  15.06.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.noticias.php
* FOR MYSQL TABLE:  noticias
* FOR MYSQL DB:     politicos
* -------------------------------------------------------
* CODE GENERATED BY:
* MY PHP-MYSQL-CLASS GENERATOR
* from: >> www.voegeli.li >> (download for free!)
* -------------------------------------------------------
*
*/

include_once("class.database.php");

// **********************
// CLASS DECLARATION
// **********************

class noticias
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $titulo;   // (normal Attribute)
var $data;   // (normal Attribute)
var $imagem;   // (normal Attribute)
var $texto;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function noticias()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM noticias WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->titulo = $row->titulo;

$this->data = $row->data;

$this->imagem = $row->imagem;

$this->texto = $row->texto;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM noticias WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO noticias ( titulo,data,imagem,texto ) VALUES ( '$this->titulo','$this->data','$this->imagem','$this->texto' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE noticias SET  titulo = '$this->titulo',data = '$this->data',imagem = '$this->imagem',texto = '$this->texto' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
