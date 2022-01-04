<?php include 'header.php';?>
<div class="row mt-5">
<div class="col-4 "></div>
    <div class="col-4 border border-success rounded  mt-5">

<form class="m-5" action="../backend/login.php" method="POST">
        <label> user name :</label>
        <input  class="form-control border border-success" type="text" name="username" required><br>
        <label> passowrd :</label>
        <input class="form-control border border-success" type="text" name="passowrd" required><br>
        <input type="submit"class="btn btn-success" value="login">
    </form>

    </div>
<div class="col-4 "></div>
</div>
<?php include 'footer.php' ?>