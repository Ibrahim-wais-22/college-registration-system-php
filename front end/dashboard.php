<?php include 'header.php';

?>
<div class="container m-5">
<h3  class="text-center  m-2"> الصفحة الرئيسية</h3>

    <div class="row  mt-5 border border-success p-5 ">
        <div class="col-4"><a href="all_student.php"><button type="button" class="btn btn-success  ">كل الطلاب المتقدمين</button></a></div>
        <div class="col-4"><a href="students_accepted.php"><button type="button" class="btn btn-success  ">كل الطلاب المقبولين</button></a></div>
        <div class="col-4"><a href="students_foreigns.php"><button type="button" class="btn btn-success  ">كل الطلاب الأجانب</button></a></div>
        
    </div>
    
</div>
<a href="login.php"><button type="button" class="btn btn-info  ">خروج</button></a>
<?php include 'footer.php' ?>