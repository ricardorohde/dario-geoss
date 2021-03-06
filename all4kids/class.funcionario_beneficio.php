
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        funcionario_beneficio
* GENERATION DATE:  07.06.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.funcionario_beneficio.php
* FOR MYSQL TABLE:  funcionario_beneficio
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

class funcionario_beneficio
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $idx_funcionario;   // (normal Attribute)
var $idx_beneficio;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function funcionario_beneficio()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM funcionario_beneficio WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->idx_funcionario = $row->idx_funcionario;

$this->idx_beneficio = $row->idx_beneficio;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM funcionario_beneficio WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO funcionario_beneficio ( idx_funcionario,idx_beneficio ) VALUES ( '$this->idx_funcionario','$this->idx_beneficio' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE funcionario_beneficio SET  idx_funcionario = '$this->idx_funcionario',idx_beneficio = '$this->idx_beneficio' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
