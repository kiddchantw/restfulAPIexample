<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 
// include 'db2.php';
include_once '../config/db2.php';
include_once '../class/users.php';
//include 'users.php';
 

$database = new Database2();
$db = $database->getConnection();
 
$items = new Items($db);

$items->id = (isset($_GET['id']) && $_GET['id']) ? $_GET['id'] : '0';

$result = $items->read();

if($result->num_rows > 0){    
    $itemRecords=array();
    $itemRecords["items"]=array(); 
    while ($item = $result->fetch_assoc()) {    
        extract($item); 
        $itemDetails=array(
            "id" => $id,
            "name" => $name
            //,
            //"description" => $description,
            // "price" => $price,
            // "category_id" => $category_id,            
            // "created" => $created,
            // "modified" => $modified         
        ); 
       array_push($itemRecords["items"], $itemDetails);
    }    
    http_response_code(200);     
    echo json_encode($itemRecords);
}else{     
    http_response_code(404);     
    echo json_encode(
        array("message" => "No item found.")
    );
} 

?>