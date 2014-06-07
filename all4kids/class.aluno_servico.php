
<?php
/*
*
* -------------------------------------------------------
* CLASSNAME:        aluno_servico
* GENERATION DATE:  07.06.2014
* CLASS FILE:       C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\generator/classes/class.aluno_servico.php
* FOR MYSQL TABLE:  aluno_servico
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

class aluno_servico
{ // class : begin


// **********************
// ATTRIBUTE DECLARATION
// **********************

var $id;   // KEY ATTR. WITH AUTOINCREMENT

var $idx_aluno;   // (normal Attribute)
var $idx_servico;   // (normal Attribute)

var $database; // Instance of class database


// **********************
// CONSTRUCTOR METHOD
// **********************

function aluno_servico()
{

$this->database = Database::getDb();

}


// **********************
// SELECT METHOD / LOAD
// **********************

function select($id)
{

$sql =  "SELECT * FROM aluno_servico WHERE id = $id;";
$result =  $this->database->query($sql);
$result = $this->database->result;
$row = $result->fetch_object();


$this->id = $row->id;

$this->idx_aluno = $row->idx_aluno;

$this->idx_servico = $row->idx_servico;

}

// **********************
// DELETE
// **********************

function delete($id)
{
$sql = "DELETE FROM aluno_servico WHERE id = $id;";
$result = $this->database->query($sql);

}

// **********************
// INSERT
// **********************

function insert()
{
$this->id = ""; // clear key for autoincrement

$sql = "INSERT INTO aluno_servico ( idx_aluno,idx_servico ) VALUES ( '$this->idx_aluno','$this->idx_servico' )";
$result = $this->database->query($sql);


}

// **********************
// UPDATE
// **********************

function update($id)
{



$sql = " UPDATE aluno_servico SET  idx_aluno = '$this->idx_aluno',idx_servico = '$this->idx_servico' WHERE id = $id ";

$result = $this->database->query($sql);



}


} // class : end

?>