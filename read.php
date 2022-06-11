<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CRUD</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Details</b></h2>
                    </div>
                     
                </div>
            </div>
<table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
               
<tbody>
<?php
$vid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from usertable where ID =$vid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
 <tr>
    <th>Name</th>
    <td><?php  echo $row['name'];?></td> 
</tr>  
  <tr><th>Email</th>
    <td><?php  echo $row['email'];?></td></tr>  
    <tr><th>Phone</th>
    <td><?php  echo $row['phone'];?></td></tr>
  <tr>  <th>Dob</th>
    <td><?php  echo $row['dob'];?></td></tr>
    <tr><th>State</th>
    <td><?php  echo $row['state'];?></td></tr>
    <tr><th>City</th>
    <td><?php  echo $row['city'];?></td></tr>
  
<?php 
$cnt=$cnt+1;
}?>
                 
</tbody>
</table>
       
        </div>
    </div>
</div>     
</body>
</html>