<?php 

include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	$eid=$_GET['editid'];
  	
      $name=$_POST['name'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $dob=$_POST['dob'];
      $state=$_POST['state'];
      $city=$_POST['city'];

    
     $query=mysqli_query($con, "update  usertable set Name='$name', Email='$email', phone='$phone', Dob='$dob', state='$state', city='$city' where ID='$eid'");
     
    if ($query) {
    echo "<script>alert('You have successfully update the data');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Crud</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="signup-form">
    <form  method="POST">
    <?php
$eid=$_GET['editid'];
$ret=mysqli_query($con,"select * from usertable where id='$eid'");
while ($row=mysqli_fetch_array($ret)) {
?>
		<h2>Update </h2>
		<p class="hint-text">Update your info.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="name" value="<?php  echo $row['name'];?>" required="true"></div>
			</div>        	
        </div>
        
        <div class="form-group">
        	<input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" >
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="phone" value="<?php echo $row['phone'];?>"  maxlength="10" pattern="[0-9]">
        </div>
        
        <div class="form-group">
            <input type="text" class="form-control" name="dob" value="<?php echo $row['dob'];?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="state" value="<?php echo $row['state'];?>" >
        </div>	
        <div class="form-group">
            <input type="text" class="form-control" name="city" value="<?php echo $row['city'];?>" >
        </div>       
      <?php 
}?>
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
        </div>
    </form>

</div>
</body>
</html>