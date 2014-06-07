
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        alergia
* GENERATION DATE:  07.06.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.alergia.php
* FOR MYSQL TABLE:  alergia
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

class alergia
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $nome;   // (normal Attribute)
var $remedio;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function alergia()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM alergia WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->nome = $row->nome;

$this->remedio = $row->remedio;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM alergia WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO alergia ( nome,remedio ) VALUES ( '$this->nome','$this->remedio' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE alergia SET  nome = '$this->nome',remedio = '$this->remedio' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>