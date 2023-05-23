<?php
require ("datab.php");
class loginC extends DBconnection{

    public function login($uname, $password){
        $sql = $this->conn->query("SELECT * FROM employee WHERE  employee.uname='$uname' AND employee.password='$password'");
        
        if($y=$sql->num_rows<1){
            //if ther is no match
            echo 'the username or password does not match';
        }
        else { 
         session_start();
            $row = $sql->fetch_assoc();
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['password'] = $row['password'];
            header("location:index.php");
        }
            }
   }



?>