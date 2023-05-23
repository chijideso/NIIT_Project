<?php
class DBconnection {
protected string $server="127.0.0.1";
protected $user = "root";
protected $password="";
protected string $database ="employees";
public $conn;

//creat a constructor
public function __construct(){
    $this->conn = new mysqli($this->server, $this->user, $this->password, $this->database);
    if($this->conn->connect_error){
        echo 'connecting to database error';
    }
    // else {
        
    //     // echo 'sucessfully connected to database';
    // }
       
    
}
}

?>




