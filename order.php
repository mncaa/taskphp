<?php
include 'connect.php';
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email=$_POST['email'];
	$number=$_POST['number'];
	$size=$_POST['size'];
	$address=$_POST['address'];

	$sql ="insert into task1 (name,email,number,size,address)
	values('$name','$email','$number','$size','$address')";
	$result=mysqli_query($con,$sql);
	if($result){
		//echo "data inserted sucessfully";
	header('location:display.php');
	}
	else{
		die(mysqli_error($con));
	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
	
</head>

<style>
	.errorbox{color: red;}
</style>
<body>

<div class="container mt-3">
	<h1>Fill The Details</h1>
	<form  class="form" method="POST"  name="form">
		<div class="mb-3 mt-3">
			<label class="form-label">Product Name</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Enter the product name" required="" ><br>
		</div>
		<div class="mb-3">
		<label class="form-label">Email</label>
		<input type="email" name="email" id="email" placeholder="Enter the email" class="form-control" required="" ><br>
         </div>
         <div class="mb-3">
		<label class="form-label">Phone No</label>

		<input type="number" name="number" id="number" placeholder="Enter the number" class="form-control" required=""><br>
	</div>
	<div class="mb-3">
		<label class="form-label">Size</label>
		<input type="text" name="size" id="size" placeholder="Enter the Size" class="form-control" required=""><br></div>
		<div class="mb-3">
         <textarea class="form-control" id="address" placeholder="Enter Your Address" name="address" style="height:20vh;" required=""></textarea><br>
          </div>
          <div class="errorbox"  name="errorbox" id="errorbox"></div>
		<button class="btn btn-primary" name="submit" id="submit">Buy</a></button>

	
	</form>
</div>


<script type="text/javascript" src="assets/bootstrap.bundle.min.js"></script>


</body>
</html>