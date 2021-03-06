
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        reclamante
* GENERATION DATE:  17.06.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.reclamante.php
* FOR MYSQL TABLE:  cad_reclamante
* FOR MYSQL DB:     geoss
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

class reclamante
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $reclam_nome;   // (normal Attribute)
var $telefone;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function reclamante()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM cad_reclamante WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->reclam_nome = $row->reclam_nome;

$this->telefone = $row->telefone;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM cad_reclamante WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO cad_reclamante ( reclam_nome,telefone ) VALUES ( '$this->reclam_nome','$this->telefone' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE cad_reclamante SET  reclam_nome = '$this->reclam_nome',telefone = '$this->telefone' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
