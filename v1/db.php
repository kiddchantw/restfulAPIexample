<?php
//PDO test 
// echo "start PDO <br>";

//直接使用
//$servername = "localhost";
//Connection failed from db : SQLSTATE[HY000] [2002] No such file or directory
// $servername = "127.0.0.1";
// $username = "root";
// $password = "1234";
// $dbname = "dbtest001";
// try {
//     // $conn = new PDO($servername,$dbname, $username, $password);
//     //$conn = new PDO("mysql:host=$servername;dbname=dbtest001", "root@localhost", "1234");
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
// } catch(PDOException $e) {
//     echo "Connection failed from db : " . $e->getMessage();
// }


class Database{

    protected $servername = "127.0.0.1";
    protected $username = "root";
    protected $password = "1234";
    protected $dbname = "dbtest001";

    public function dbConnection(){
        try {
    //$conn = new PDO($servername,$dbname, $username, $password);
    //$conn = new PDO("mysql:host=$servername;dbname=dbtest001", "root@localhost", "1234");
            $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully db3";
        } catch(PDOException $e) {
        // set the PDO error mode to exception
            echo "Connection failed from db3 : " . $e->getMessage();
        }
    }

    // public function _construct(){
    //     $H = " dbphp construct";
    //     var_dump($H);
    //      try {
    //     //$conn = new PDO($servername, $dbname, $username, $password);
    //     //$conn = new PDO("mysql:host=$servername;dbname=dbtest001", "root@localhost", "1234");
    //         $conn = new PDO("mysql:host=".$this->servername.";dbname=".$this->dbname, $this->username, $this->password);
    //         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         echo "Connected successfully db1";
    //     } catch(PDOException $e) {
    //     // set the PDO error mode to exception
    //         echo "Connection failed from db1 : " . $e->getMessage();
    //     }
    // }
    // echo $H; 
}


?>