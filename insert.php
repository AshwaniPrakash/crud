<?php 

include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $dob=$_POST['dob'];
    $state=$_POST['state'];
    $city=$_POST['city'];
   
  
     $query=mysqli_query($con, "insert into usertable(name ,email, phone, dob, state, city) 
     value('$name','$email', '$phone', '$dob', '$state', '$city' )");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
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
<title>CRUD</title>
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
		<h2>Fill Data</h2>
		<p class="hint-text">Fill below form.</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="name" placeholder="Enter your Name" required="true"></div>
				
			</div>        	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Enter your Email" required="true">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="phone" placeholder="Enter your Phone Number" required="true" maxlength="10" pattern="[0-9]">
        </div>
        
        <div class="form-group">
            <input type="date" class="form-control" name="dob" placeholder="Enter your DOB" required="true" maxlength="" pattern="">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="state" placeholder="Enter Your state name" require>
        </div>	
        <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="Enter Your city name" require>
        </div>	
        <!-- <div class="form-group">
            <input type="" class="form-control" name="state" placeholder="Enter your State Name" required="true" maxlength pattern>
        </div> -->
        <!-- <div class="form-group">
            <input type="text" class="form-control" name="city" placeholder="Enter your City Name" required="true" maxlength pattern>
        </div>        -->
      
		<div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
    <div class="text-center">View Aready Inserted Data!!  <a href="index.php" bgdark>View</a></div>
</div>
</body>
</html>