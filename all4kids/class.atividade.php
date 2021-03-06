
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        atividade
* GENERATION DATE:  25.08.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.atividade.php
* FOR MYSQL TABLE:  atividade
* FOR MYSQL DB:     all4kids
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

class atividade
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $nome;   // (normal Attribute)
var $vagas;   // (normal Attribute)
var $valor;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function atividade()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM atividade WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->nome = $row->nome;

$this->vagas = $row->vagas;

$this->valor = $row->valor;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM atividade WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO atividade ( nome,vagas,valor ) VALUES ( '$this->nome','$this->vagas','$this->valor' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE atividade SET  nome = '$this->nome',vagas = '$this->vagas',valor = '$this->valor' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
