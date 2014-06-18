<?php
/*
*
* MARCO VOEGELI 31.12.2005
* www.voegeli.li
*
* This class provides one central database-connection for
* al your php applications. Define only once your connection
* settings and use it in all your applications.
*
*
*/

  
 class Database
 { // Class : begin
 
 var $host;  		//Hostname, Server
 var $password; 	//Passwort MySQL
 var $user; 		//User MySQL
 var $database; 	//Datenbankname MySQL
 var $query;
 var $result;
 var $rows;
 
private static $db;
private $connection;

private function __construct() {
///*
  $this->host = "localhost";                  //          <<---------
  $this->password = "";           //          <<---------
  $this->user = "root";                   //          <<---------
  $this->database = "politicos";           //          <<---------
  //*/  

  $this->rows = 0;
  $this->connection = new MySQLi($this->host,$this->user,$this->password,$this->database);
}

function __destruct() {
	$this->connection->close();
}

public static function getConnection() {
	if (self::$db == null) {
		self::$db = new Database();
	}
	return self::$db->connection;
} 

public static function getDb() {
	if (self::$db == null) {
		self::$db = new Database();
	}
	return self::$db;
} 
 
 function Query($query)
 { // Method : begin
	$this->query = $query;
	$this->result = $this->connection->query($query) or die (mysqli_error($this->connection));

 } // Method : end	
  
} // Class : end
 
?>
