<?php include 'header.php';
?>

<div class="row">
    
    <!-- ################## -->
    <div class="col-6">

        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">الإسم</th>
                    <th scope="col">إسم الطالب</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1/1/2000 - اليمن صنعاء</th>
                    <td>مكان وتاريخ الميلاد</td>
                </tr>
                <tr>
                    <th scope="row">2313344536</th>
                    <td>رقم التلفون</td>
                </tr>
                <tr>
                    <th scope="row">123587654</th>
                    <td colspan="2">البطاقة القومية</td>
                </tr>
                <tr>
                    <th scope="row">1/1/2000 - اليمن صنعاء</th>
                    <td>مكان وتاريخ الميلاد</td>
                </tr>
                <tr>
                    <th scope="row">2313344536</th>
                    <td>رقم التلفون</td>
                </tr>
                <tr>
                    <th scope="row">123587654</th>
                    <td colspan="2">البطاقة القومية</td>
                </tr>
                <tr>
                    <th scope="row">1/1/2000 - اليمن صنعاء</th>
                    <td>مكان وتاريخ الميلاد</td>
                </tr>
                <tr>
                    <th scope="row">2313344536</th>
                    <td>رقم التلفون</td>
                </tr>
                <tr>
                    <th scope="row">123587654</th>
                    <td colspan="2">البطاقة القومية</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-6">

    
        <table class="table" >
            <thead>
                <tr>
      
                <th scope="col"> التخصص</th>
                <th scope="col">القسم</th>
    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <form action="../backend/check_options.php" method="get">
    
    
                        <td>التخصص</td>
                        <td>القسم</td>
                    </form>
                </tr>
    
    
            </tbody>
        </table>
    </div>

    <div class="col-4"><a href="all_student.php"><button type="button" class="btn btn-info  ">كل الطلاب المتقدمين</button></a></div>
    <div class="col-4"><a href="students_accepted.php"><button type="button" class="btn btn-info ">الطلاب المقبولين</button></a></div>
    <div class="col-4"><a href="dashboard.php"> <button type="button" class="btn btn-info ">الرئيسية</button></a></div>
</div>


<?php include 'footer.php' ?>