
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        servicos
* GENERATION DATE:  17.06.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.servicos.php
* FOR MYSQL TABLE:  cad_servicos
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

class servicos
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $servicos_nome;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function servicos()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM cad_servicos WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->servicos_nome = $row->servicos_nome;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM cad_servicos WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO cad_servicos ( servicos_nome ) VALUES ( '$this->servicos_nome' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE cad_servicos SET  servicos_nome = '$this->servicos_nome' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
