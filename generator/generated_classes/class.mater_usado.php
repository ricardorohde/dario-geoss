
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        mater_usado
* GENERATION DATE:  22.05.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\generator/generated_classes/class.mater_usado.php
* FOR MYSQL TABLE:  os_mater_usado
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

class mater_usado
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $idx_os;   // (normal Attribute)
var $idx_material;   // (normal Attribute)
var $quant_mater;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function mater_usado()
{

$this->database = Database::getDb();

}


// **********************
// GETTER METHODS
// **********************


function getid()
{
return $this->id;
}

function getidx_os()
{
return $this->idx_os;
}

function getidx_material()
{
return $this->idx_material;
}

function getquant_mater()
{
return $this->quant_mater;
}

// **********************
// SETTER METHODS
// **********************


function setid($val)
{
$this->id =  $val;
}

function setidx_os($val)
{
$this->idx_os =  $val;
}

function setidx_material($val)
{
$this->idx_material =  $val;
}

function setquant_mater($val)
{
$this->quant_mater =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM os_mater_usado WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->idx_os = $row->idx_os;

$this->idx_material = $row->idx_material;

$this->quant_mater = $row->quant_mater;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM os_mater_usado WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO os_mater_usado ( idx_os,idx_material,quant_mater ) VALUES ( '$this->idx_os','$this->idx_material','$this->quant_mater' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE os_mater_usado SET  idx_os = '$this->idx_os',idx_material = '$this->idx_material',quant_mater = '$this->quant_mater' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>
