<?php
// https://www.phpzag.com/how-to-create-simple-rest-api-in-php/ db2


//test db connect ok
/*
$host = '127.0.0.1';
$user  = 'root';
$password   = "1234";
$database  = "dbtest001"; 

$connectDB =  mysqli_connect($host, $user, $password, $useDB);
if (!$connectDB) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}
else{
	echo "db ok";
}
*/


class Database2 {
	
	private $host  = '127.0.0.1';
    private $user  = 'root';
    private $password  = "1234";
    private $database  = "dbtest001"; 
    
    public function getConnection(){		
		$conn = new mysqli($this->host, $this->user, $this->password, $this->database);
		if($conn->connect_error){
			die("Error failed to connect to MySQL: " . $conn->connect_error);
		} else {
			return $conn;
		}
    }
}


?>