
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        inventario
* GENERATION DATE:  17.06.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.inventario.php
* FOR MYSQL TABLE:  cad_inventario
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

class inventario
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $idx_semaf;   // (normal Attribute)
var $idx_material;   // (normal Attribute)
var $quant_mater;   // (normal Attribute)
var $agenda;   // (normal Attribute)
var $data_install;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function inventario()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM cad_inventario WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->idx_semaf = $row->idx_semaf;

$this->idx_material = $row->idx_material;

$this->quant_mater = $row->quant_mater;

$this->agenda = $row->agenda;

$this->data_install = $row->data_install;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM cad_inventario WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO cad_inventario ( idx_semaf,idx_material,quant_mater,agenda,data_install ) VALUES ( '$this->idx_semaf','$this->idx_material','$this->quant_mater','$this->agenda','$this->data_install' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE cad_inventario SET  idx_semaf = '$this->idx_semaf',idx_material = '$this->idx_material',quant_mater = '$this->quant_mater',agenda = '$this->agenda',data_install = '$this->data_install' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
