<?php include 'header.php';
include '../backend/connect_db.php';
    
?>
<h3  class="text-center  mt-2"> كل الطلاب المتقدمين</h3>
<div class="float-right"><a href="dashboard.php"> <button type="button" class="btn btn-info ">الرئيسية</button></a></div>
<div class="float-left"><a href="students_accepted.php"><button type="button" class="btn btn-info ">الطلاب المقبولين</button></a></div>
<table class="table" >
    <thead>
        <tr>
            <th scope="col">الإسم</th>
            <th scope="col">المساق</th>
            <th scope="col"> الدرجة</th>
            <th scope="col">التفاصيل</th>
        </tr>
    </thead>
    <tbody>
        <tr>        
            <?php 
                global $conn;
                $sql1 ="SELECT name_stud,name_sc_st,degree FROM student_stud;";
                $result =mysqli_query($conn,$sql1);
                
                if(mysqli_num_rows($result)>0) { 
                    while($row= mysqli_fetch_assoc($result)) {
                        $name = $row['name_stud'];
                        ?>
                    <form action="study.php" method="GET">
                        <td name="name" require >
                            <input class="border-0" name="go" type="text" value="<?php echo $name;?>">
                        </td>
                        <td><?php echo $row['name_sc_st'];?></td>
                        <td><?php echo $row['degree'];?>%</td>
                        
                        <th scope="row"> <a href="study.php?'<?php echo $name; ?>'"> <button type="submit"  class="btn btn-info">معاينة</button> </a></th>
                    </form>
                </tr>
                <?php }}?>
 
            </tbody>
        </table>

<?php include 'footer.php' ?>