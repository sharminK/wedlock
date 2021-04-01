<?php
	
	session_start();
	$_SESSION['$email']=$_GET['email'];
	$email = $_GET['email'];
	$conn = new mysqli('localhost','root','','wedding');
	$sql = "SELECT * FROM customer WHERE email = '$email'";
	
	$result = $conn->query($sql);

	$customer_info = mysqli_fetch_assoc($result);
 
 ?>
 
<!doctype html>

<html lang="en">
	
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<title>Customer Info</title>
		<style media="screen">
			body{
			 background: #642B73; 
background: -webkit-linear-gradient(to right, #C6426E, #642B73); 
background: linear-gradient(to right, #C6426E, #642B73); 

/*background: #485563; 
background: -webkit-linear-gradient(to right, #29323c, #485563); 
background: linear-gradient(to right, #29323c, #485563); */

		  	}
		  	.btn{

   			margin:10px 20px;
    		line-height: 20px;
			}
div.card {

	margin-left: 500px ;
	margin-top: 50px;

  width: 500px;
  box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.container {
  padding: 10px;
 
}

		</style>
	</head>
  
	<body>
		<form action="edit(customer).php?email=".$email method="POST">
			
			<div class="card">
 <br>
    <h1>Customer Information</h1>
 
  <div class="container">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">Name :&nbsp; <?php echo $customer_info['cname']; ?></li>
    <li class="list-group-item">Password :&nbsp;<?php echo $customer_info['pass']; ?></li>
    <li class="list-group-item">Address :&nbsp;<?php echo $customer_info['caddress']; ?></li>
    <li class="list-group-item">Phone :&nbsp;<?php echo $customer_info['cph']; ?></li>
    <li class="list-group-item">Email :&nbsp;<?php echo $customer_info['email']; ?></li>
  </ul>
  <br>
			<button type="submit" class="btn btn-primary" style="background-color: #cd4c75">Edit</button> 
			<a href="home.php"  class="btn btn-info" role="button" style="background-color:	#721d72">Log Out</a>
  </div>
</div>
	</form>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
	</body>
</html>
