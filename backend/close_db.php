<?php 
include 'connect_db.php';
global $conn;
mysqli_close($conn);
if($conn){
    echo 'database is close!';
}
else{
    echo 'database is NOT close!';
};



?>