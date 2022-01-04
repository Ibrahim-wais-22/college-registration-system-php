<?php 
include 'connect_db.php';


global $conn;
session_start();
$_SESSION['name']=$_POST['name'];


$email= $_POST['email'];

$sql = "SELECT * FROM student_stud WHERE  email='$email' "; // للتأكد من عدم وجود تسجيل مسبق
$result1 = mysqli_query($conn,$sql);
if(mysqli_num_rows($result1) > 0){
    echo "<script> alert('لقد تم التسجيل فعلا!')</script>";
    header("location:../front end/input_informations.php ");
}else{
    //عمليه الاضافة لقواعد البيانات
    $query = "INSERT INTO student_stud(name_stud,date_brith,place_brith,phone_stud,pid_stud,type_pid,nationality,num_sit_sc ,name_sc_st,degree,date_sc_st,email,papers)VALUES('{$_POST['name']}','{$_POST['b_date']}','{$_POST['b_place']}','{$_POST['phone_number']}','{$_POST['pid_stud']}','{$_POST['type_pid']}','{$_POST['natinalaty']}','{$_POST['num_study']}','{$_POST['course']}','{$_POST['degree']}','{$_POST['school_date']}','{$_POST['email']}','{$_POST['paper']}')";
    
    if(mysqli_query($conn,$query)=== true){
        echo  "<h1>add done!</h1>";
        header("location:../front end/choice_page.php");
        exit();
    }else{
        // echo("Error description: " . mysqli_error($conn));
        echo "<script> alert('هناك خطاء قم بإعادة الإدخال')</script>";
        header("location:../front end/input_informations.php");
    }
    
}


?>

    
