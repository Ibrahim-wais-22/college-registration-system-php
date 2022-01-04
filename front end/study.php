<?php include 'header.php';
include '../backend/connect_db.php';
$name = $_GET['go'];

?>

    <div class="row">
        
        
        <!-- ################## -->
        <div class="col-6">
            <table class="table" >
            <?php 
            global $conn;
            global $row;
            $sql1 ="SELECT * FROM student_stud WHERE name_stud = '$name' ";
            $result =mysqli_query($conn,$sql1);
            
            if(mysqli_num_rows($result)>0) { 
                while($row= mysqli_fetch_assoc($result)) {
                        $name = $row['name_stud'];
        ?>
        <thead>
            <tr>
                <th scope="col">إسم الطالب</th>
                <th scope="col"><?php echo $name;  ?></th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>مكان وتاريخ الميلاد</td>
                <th scope="row"><?php echo $row['date_brith'];  ?> -<?php echo $row['place_brith'];  ?> </th>
            </tr>
            <tr>
                <td>رقم التلفون</td>
                <th scope="row"><?php echo $row['phone_stud'];  ?></th>
            </tr>
            <tr>
                <td>الجنسية</td>
                <th scope="row"><?php echo $row['nationality'];  ?></th>
            </tr>
            <tr>
                <td >رقم الإثبات الشخصي</td>
                <th scope="row"><?php echo $row['pid_stud'];  ?></th>
            </tr>
            
            <tr>
                <td>المساق</td>
                <th scope="row"><?php echo $row['name_sc_st'];  ?></th>
            </tr>
            <tr>
                <td>رقم الجلوس</td>
                <th scope="row"><?php echo $row['num_sit_sc'];  ?></th>
            </tr>
            <tr>
                <td >درجة الثانوية</td>
                <th scope="row"><?php echo $row['degree'];  ?></th>
            </tr>
            <tr>
                <td >تاريخ التخرج من الثانوية</td>
                <th scope="row"><?php echo $row['date_sc_st'];  ?></th>
            </tr>
            <tr>
                <td >البريد الإلكتروني</td>
                <th scope="row"><?php echo $row['email'];  ?></th>
            </tr>
        </tbody>
    </table>
    <?php }}?>
</div>

<!-- #############################3 -->

<div class="col-6">

<table class="table" >
<?php 
            global $conn;
            global $name;
            $sql1 ="SELECT * FROM student_choice WHERE name_stud='$name' ";
            $result =mysqli_query($conn,$sql1);
            
            if(mysqli_num_rows($result)>0) { 
                while($row= mysqli_fetch_assoc($result)) {
                    
        ?>
    <thead>
        <tr>
            <th scope="col">القسم</th>
            <th scope="col">العملية</th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <!-- <form action="study.php" method="POST"> -->

                <td><?php echo $row['name_dep'];  ?></td>
                <th scope="row"><a href="../backend/accepted.php?name=<?php echo $name;?>"><button type="submit" name="accept" class="btn btn-info">قبول</button></a></th>
            <!-- </form> -->
            
        </tr>
                    
    </tbody>
    <?php }}?>
</table>
</div>

<!-- ############################# -->
<div class="col-4"><a href="dashboard.php"> <button type="button" class="btn btn-info ">الرئيسية</button></a></div>
<div class="col-4"><a href="students_accepted.php"><button type="button" class="btn btn-info ">الطلاب المقبولين</button></a></div>
<div class="col-4"><a href="all_student.php"><button type="button" class="btn btn-info  ">كل الطلاب المتقدمين</button></a></div>
</div>


<?php include 'footer.php' ?>