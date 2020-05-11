<?php
class Items{   
 

private $conn;


public function __construct($db){
        $this->conn = $db;
    }	


function read(){	
	if($this->id) {
		//$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable." WHERE id = ?");
		$stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");

		$stmt->bind_param("i", $this->id);					
	} else {
		$stmt = $this->conn->prepare("SELECT * FROM users");		
	}		
	$stmt->execute();			
	$result = $stmt->get_result();		
	return $result;	
}


}
?>