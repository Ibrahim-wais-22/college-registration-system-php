<?php 
include 'connect_db.php';
session_start();

// ########################## الحصول على id الخاص يالطالب
global $conn;
$id_stud= "SELECT id_stud  FROM student_stud WHERE name_stud='{$_SESSION['name']}'";
$result_id = $conn->query($id_stud);
if ($result_id->num_rows > 0) {
  while($row2 = $result_id->fetch_assoc()) {
    $id = $row2["id_stud"];
  }};
    
// ################## الحصول على اسم التخصص الذي تم اختياره
$option = isset($_POST['depart_option']) ? $_POST['depart_option'] : false;
if ($option) {
  $id_input=  htmlentities($_POST['depart_option'], ENT_QUOTES, "UTF-8");
  echo '<br>'.$id_input.'<br>';
  $sql ="SELECT depart FROM depart WHERE depart='$id_input' ";
  $result =mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0) { 
    while($row= mysqli_fetch_assoc($result)) {
      // global $id;
      echo "id dep: " . $row["depart"]. "<br>".$id."<br>";
      $sql2 = "INSERT INTO student_choice(id_student,name_stud,name_dep)VALUES('$id','{$_SESSION['name']}','{$row['depart']}') ";
      if(mysqli_query($conn,$sql2)=== true){
        header('location:../front end/seccsesfuly.php');
        exit();
        session_destroy();
    }else{
      echo "<script> alert('لم يتم الاختيار!!')</script>";
      echo("Error description: " . mysqli_error($conn));
    }
    
    }
  } else {
    echo "0 results";
  }
} else {
  echo "task option is required<br>"; 
  exit; 
}

include 'close_db.php';
?>
