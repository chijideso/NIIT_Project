<?php
require ("datab.php");

class Reg extends DBconnection{

    public function insertUser($uname,$phone,$state,$password)
    {
   $uid = rand(9,99.9);
        if($this->conn->query("INSERT INTO  employee VALUES(0,'$uid','$uname','$phone','$state','$password')"))
        {
            echo "User Inserted";
        }
        else{
            echo 'User Creation Failed';
        }
    }

}
if(isset($_POST['btn'])) //register
{
    $uname = $_POST['uname'];
    $phone = $_POST['phone'];
    $state = $_POST['state'];
    $password = $_POST['password'];
    $reg = new Reg(); //Object
//$reg->createTable(); //Calling Method
    $reg->insertUser($uname,$phone,$state,$password);
}
header("location:loginform.php");


?>



