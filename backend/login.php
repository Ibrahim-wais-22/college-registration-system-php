<?php 
include 'connect_db.php';


global $conn;
$name = "{$_POST['username']}";
$pass = "{$_POST['passowrd']}";
echo $name.'<br>'.$pass;
if($name==='admin' && $pass==='1234')
    {
    
            header("location:../front end/dashboard.php");
    
        }
        else
        {
            header("location:../front end/login.php");
            echo "<script> alert('غير متطابق')</script>";
        }
    




include 'close_db.php';
?>