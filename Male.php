<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
</style>
</head>

<body>
<div class="header">
<?php $active="home"; include('head.php'); ?>

</div>

<div id="page-container" style="margin-top:5px; position: relative;min-height: 84vh;">
  <div class="container">
  <div id="content-wrap" style="padding-bottom:50px;">
<div class="row">
    <div class="col-lg-6">
        <h1 class="mt-4 mb-3">Fill The Info </h1>
      </div>
</div>
<form name="donor" action="savedata.php" method="post">
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic" name='age'>Age<span style="color:red">*</span></div>
<div><input type="number" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic" name='weight'>Weight<span style="color:red">*</span></div>
<div><input type="number" class="form-control" required></div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic" name='height'>Height</div>
<div><input type="number" class="form-control"></div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic" name='med'>Any Medical History<span style="color:red">*</span></div>
<div><input type="text"  class="form-control" required></div>
</div>

<div class="col-lg-4 mb-4">
<div class="font-italic">grvgfdb<span style="color:red">*</span></div>
<div><select name="gender" class="form-control" required>
<option value=""></option>
<option value="Male">fsefbuab</option>
<option value="Female">vjsdbvkb</option>
<option value="Other">dsfbfbb</option>
</select>
</div>
</div>
<div class="col-lg-4 mb-4">
<div class="font-italic">Blood Group<span style="color:red">*</span></div>
<div><select name="blood" class="form-control" required>
  <option value=""selected disabled>Select</option>
  <!-- <?php
    include 'conn.php';
    $sql= "select * from blood";
    $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
  while($row=mysqli_fetch_assoc($result)){
   ?>
   <option value=" <?php echo $row['blood_id'] ?>" > <?php echo $row['blood_group'] ?> </option>
  <?php } ?>
</select>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 mb-4">
<div class="font-italic"><span style="color:red">*</span></div>
<div><textarea class="form-control" name="address" required></textarea></div></div>
</div> -->
<div class="row">
  <div class="col-lg-4 mb-4">
  <div><input type="submit" name="submit" class="btn btn-primary" value="Submit" style="cursor:pointer" href='Donor_Acceptor.php' method='post'></div>
  </div>
</div>
</div>
</div>
<!--
<?php include('footer.php') ?>-->
</div>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
    $age=$_POST['age'];
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $med=$_POST['med'];
    if($age>=16 && $age<=60 && $weight>=50)
        {
            echo"eligible";
        }
}
?>
