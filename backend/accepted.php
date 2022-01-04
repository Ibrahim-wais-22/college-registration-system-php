<?php 
include 'connect_db.php';
echo print_r($_GET);
$name = $_GET['name'];

// if(isset($_POST['accept'])){
    global $conn;
    $sql1 ="UPDATE student_stud SET accept='1' WHERE name_stud='$name' ";

if(mysqli_query($conn,$sql1)=== true){
    echo "<script> alert('لقد تم قبول الطالب !')</script>";
    header("location:../front end/all_student.php");
}else{
    echo "<script> alert('لم يتم قبول الطالب !')</script>";
    echo("Error description: " . mysqli_error($conn));
}


include 'close_db.php';
?>