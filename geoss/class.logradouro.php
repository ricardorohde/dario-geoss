
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        logradouro
* GENERATION DATE:  23.05.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\data\localweb\generator/generated_classes/class.logradouro.php
* FOR MYSQL TABLE:  cad_logradouro
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

class logradouro
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $idx_uf;   // (normal Attribute)
var $idx_cid;   // (normal Attribute)
var $idx_bai;   // (normal Attribute)
var $lograd_nome;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function logradouro()
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

function getidx_uf()
{
return $this->idx_uf;
}

function getidx_cid()
{
return $this->idx_cid;
}

function getidx_bai()
{
return $this->idx_bai;
}

function getlograd_nome()
{
return $this->lograd_nome;
}

// **********************
// SETTER METHODS
// **********************


function setid($val)
{
$this->id =  $val;
}

function setidx_uf($val)
{
$this->idx_uf =  $val;
}

function setidx_cid($val)
{
$this->idx_cid =  $val;
}

function setidx_bai($val)
{
$this->idx_bai =  $val;
}

function setlograd_nome($val)
{
$this->lograd_nome =  $val;
}

// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM cad_logradouro WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->idx_uf = $row->idx_uf;

$this->idx_cid = $row->idx_cid;

$this->idx_bai = $row->idx_bai;

$this->lograd_nome = $row->lograd_nome;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM cad_logradouro WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO cad_logradouro ( idx_uf,idx_cid,idx_bai,lograd_nome ) VALUES ( '$this->idx_uf','$this->idx_cid','$this->idx_bai','$this->lograd_nome' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE cad_logradouro SET  idx_uf = '$this->idx_uf',idx_cid = '$this->idx_cid',idx_bai = '$this->idx_bai',lograd_nome = '$this->lograd_nome' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>