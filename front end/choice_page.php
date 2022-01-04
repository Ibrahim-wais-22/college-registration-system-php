<?php include 'header.php';?>
<?php include '../backend/connect_db.php';
session_start();?><br>
<?php 
global $conn;
$query1 = "SELECT  depart FROM depart";
$result1 = mysqli_query($conn,$query1);
?>
<h3 class="text-center  mt-2"> إختيار الرغبة</h3>
<div class="row">
<div class="col-4 "></div>
<div class="col-4 border border-success rounded  mb-2">

    <form action="../backend/chioces_page.php" method="POST">
        <div class="form-group">
            <lable> إسم الطالب</lable>
            <select class="form-select form-select-lg mb-3 border border-success" aria-label=".form-select-lg example">
                <option value="1" > <?php echo $_SESSION['name'];?></option>
                
            </select><br>
            <!-- id_sc_stud -->
            <lable> الكلية</lable> 
            <select class="form-select form-select-lg mb-3 border border-success" aria-label=".form-select-lg example">
                <option selected>كلية علوم الحاسوب</option>
                <option value="1" > </option>
                
            </select><br>
            
            <!-- id_dep_stud -->
            <lable>القسم </lable>
            <select name='depart_option' class="form-select form-select-lg mb-3 border border-success" aria-label=".form-select-lg example">
            
            <option selected>اختر اسم القسم</option>
            <?php 
            if(mysqli_num_rows($result1)>0){
                while($row1= mysqli_fetch_assoc($result1)){ 
            ?>
            <option selected> <?php echo mysqli_real_escape_string($conn,$row1['depart']); ?></option>
        <?php }}?></select><br>
        
    
            
        <!-- id_speci_stud -->
        <button type="submit" class="btn btn-success">NEXT</button>
    </div>

    </form>
</div>
</div>
<div class="col-4 "></div>
<?php include 'footer.php' ?>