<!doctype html>

<?php
	$servername = "localhost";
	$username="root";
	$password="";
	$dbname="wedding";
	try{
		$conn = new mysqli($servername, $username,$password,$dbname);
		}catch(MySQLi_Sql_Exception $ex){
		echo("error in connection");
		}
	
	if(isset($_POST['submit']))
	{
		$dname=$_POST['dname'];
		$daddress=$_POST['daddress'];
		$dphone = $_POST['dphone'];
		$email=$_POST['email'];
		$user = $_POST['dusername'];
		$pass = $_POST['pass'];
		$dprice = $_POST['dprice'];
		
		$register_query = "INSERT INTO `decoration`(`dname`,  `daddress`,  `dphone`, `email`, `dusername`, `pass`,`dprice`) VALUES ('$dname','$daddress','$dphone','$email','$user','$pass','$dprice')";
		
		$SELECT = "SELECT email Form decoration where email = $email limit 1";

		$result = $conn -> prepare($SELECT);
      
		try{
		
			$register_result = mysqli_query($conn, $register_query);
			if($register_result){
				if(mysqli_affected_rows($conn)>0){
				echo '<script>alert("registration successful")</script>';
				}else{
				echo '<script>alert("error in registration")</script>';
				}
		 
				}
			}catch(Exception $ex){
			echo("error".$ex->getMessage());
			}
		}

 
?>



<html>
<head>
	<meta charset="utf-8">
	<meta name= "viewport" content="width = device - width, initial-scale = 1, shrink-to-fit = no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<title> Registration Form</title>
	
	<style type="text/css">
	body {
		background-color: #F1E2E2;
		font-family : arial;
		font-size : 18px;
		line-height : 18px;
		color : #000;
		padding: 4px;
		text-align: center;
		margin: 12px;
		background: url(decor.jpg) no-repeat;
		margin-top: 150px;
		margin-left : 200px;
		background-size:  cover;
	}
	</style>
	
</head>
 
<body>
	
	<form action="" method="post">
	<table   margin-top= "7px">

	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>

	<tr>
	<td>Company Name:</td>
	<td><input type="text" name="dname" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	

	
	<tr>
	<td></td>
	<td></td>
	</tr>

	
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td>   Location   :</td>
	<td><input type="text" name="daddress" ></td>
	</tr>

	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	 
	<tr>
	<td>Price :</td>
	<td><input type="text" name="dprice" ></td>
	 
	</tr>
	<tr>
	<td></td>
	<td></td>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	
	
	<tr>
	<td></td>
	<td></td>
	</tr>


	

	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>

	<tr>
	<td>Phone:</td>
	<td><input type="tel" name="dphone" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	 
	<tr>
	<td>Email:</td>
	<td><input type="email" name="email" ></td>
	 
	</tr>
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	 
	<tr>
	<td>User Name:</td>
	<td><input type="text" name="dusername" ></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	 
	<tr>
	<td>Password:</td>
	<td><input type="password" name="pass" value=""></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>


	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>


	<tr>
	<td></td>
	<td></td>
	</tr>
	
	<tr>
	<td></td>
	<td></td>
	</tr>
	 <td><a href="home.php" class="btn btn-info" role="button">Back</a></td>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="SignUp"></td>
	</tr>
	
	</table>
	
	</form>
	
	<!-- Optional JavaScript -->
	    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>