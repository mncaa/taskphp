<?php

include 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>data inserted</title>

	<link rel="stylesheet" type="text/css" href="assets/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
</head>
<body>

	<div class="container">
	
<button class="btn btn-primary mb-3" style=" margin-left: 90%;margin-top: 20px;" ><a href="order.php" style="text-decoration: none;color: #fff;">Order Now</button>
<h3 style="color: #313131;text-align: center;">Display The Ordered Details</h3>
<table class="table table-bordered">
	<thead>
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Number</th>
		<th>Size</th>
		<th>Address</th>
		<th>Edit</th>
			<th>Remove</th>
	</tr>
</thead>
<tbody>
	<?php

$sql="select * from task1";
$result=mysqli_query($con,$sql);
if($result){
	while($row=mysqli_fetch_assoc($result)){
       $id=$row['id'];
       $name=$row['name'];
       $email=$row['email'];
       $number=$row['number'];
       $size=$row['size'];
       $address=$row['address'];
       echo '<tr>
       <td>'.$id.'</td>
       <td>'.$name.'</td>
       <td>'.$email.'</td>
       <td>'.$number.'</td>
       <td>'.$size.'</td>
       <td>'.$address.'</td>
       <td><button class="btn btn-primary"><a href="update.php?updateid='.$id.'" style="color:#fff;text-decoration:none;">Update</a></button></td>
       <td><button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" style="color:#fff;text-decoration:none;">Delete</a></button></td>
       </tr>';

           
		}
	}



	?>


