<?php include 'header.php';?>
<?php include '../backend/connect_db.php';
// if(isset($_SESSION["id_stud"])){
//     header('location:../front end/input_informations.php');
// }





?>
<h3 class="text-center  mt-2">المعلومات الشخصية</h3>
<div class="row">
    <div class="col-4 "></div>
<div class="col-4 border border-success rounded  mb-2">

<form action="../backend/input_information.php" method="post">

    <div class="form-group">
        
        <lable> الإسم</lable>
        <input  class="form-control border border-success" name="name" type="text" required  ><br>
        <lable>تاريخ الميلاد</lable>
        <input class="form-control border border-success " name="b_date" type="date" required ><br>
        
        <lable>مكان الميلاد </lable>
        <input class="form-control border border-success " name="b_place" type="text" required ><br>
        
        <lable> رقم التلفون</lable>
        <input  class="form-control border border-success" name="phone_number" type="number" required ><br>
        
        <lable> الإثبات الشخصي</lable>
        <input class="form-control border border-success" name="pid_stud" type="number" required ><br>
        
        <lable>نوع الإثبات الشخصي</lable>
        <input  class="form-control border border-success" name="type_pid" type="text" required ><br>
        
        <lable>الجنسية </lable>
        <input class="form-control border border-success" name="natinalaty" value="سوداني\سودانية" type="text" required ><br>
        
        <lable>المساق </lable>
        <input class="form-control border border-success" name="course" type="text" required ><br>
        
        <lable>رقم الجلوس</lable>
        <input class="form-control border border-success" name="num_study" type="number" required 
        ><br>
        <lable>درجة الثانوية </lable>
        <input class="form-control border border-success" name="degree" type="number" required ><br>

        <lable>تاريخ التخرج من الثانوية</lable>
        <input class="form-control border border-success" name="school_date" type="date" required ><br>
        
        <lable  for="exampleInputEmail1" >البريد الإلكتروني</lable>
        <input class="form-control border border-success" name="email" type="email" required ><br>
        
        <lable>ارفق الأوراق التالية :
            <ul>
                <li>البطاقة الشخصية\الجواز</li>
                <li>صوزة رقم الجلوس</li>
                <li>سورة شهادة الثانوية</li>
                <li></li>
                <li></li>
            </ul>
        </lable>
        <input class="form-control border border-success" name="paper" type="file" required ><br>
        
        <button type="submit" class="btn btn-success" name="input_stud">NEXT</button>
    </div>
    
</form>
</div>
</div>
<div class="col-4 "></div>
<?php include 'footer.php' ?>