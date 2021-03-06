
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        acess_equipam
* GENERATION DATE:  17.06.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.acess_equipam.php
* FOR MYSQL TABLE:  cad_acess_equipam
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

class acess_equipam
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $acequipam_nome;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function acess_equipam()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM cad_acess_equipam WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->acequipam_nome = $row->acequipam_nome;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM cad_acess_equipam WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO cad_acess_equipam ( acequipam_nome ) VALUES ( '$this->acequipam_nome' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE cad_acess_equipam SET  acequipam_nome = '$this->acequipam_nome' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
