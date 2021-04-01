<?php
    $email = $_POST["email"];
    $pass = $_POST["pass"];
   
	$conn = new mysqli('localhost','root','','wedding');
	
	$sql =   "SELECT * FROM hal WHERE email = '$email' AND pass = '$pass'";  
	$sql1 =  "SELECT * FROM customer WHERE email = '$email' AND pass = '$pass'";
	$sql2 =   "SELECT * FROM decoration WHERE email = '$email' AND pass = '$pass' ";  
	$sql3 =   "SELECT * FROM photoblust WHERE email = '$email' AND pass = '$pass'";  
	$sql4 =   "SELECT * FROM food WHERE email = '$email' AND pass = '$pass'"; 
	
	$result = $conn->query($sql);
	$result1 = $conn->query($sql1);
	$result2 = $conn->query($sql2);
	$result3 = $conn->query($sql3);
	$result4 = $conn->query($sql4);
	
	$rowcount1 = mysqli_num_rows($result);
	$rowcount2 = mysqli_num_rows($result1);
	$rowcount3 = mysqli_num_rows($result2);
	$rowcount4 = mysqli_num_rows($result3);
	$rowcount5 = mysqli_num_rows($result4);
	
	
	
	
	if($rowcount1 == 1){
		session_start();
		$_SESSION['loginform'] = true;
		header("location: hall/profile(hall).php?email=".$email);
	}
	else if($rowcount2 == 1){
		session_start();
		$_SESSION['loginform'] = true;
		header("location:customer/profile(customer).php?email=".$email);
		
	}
	else if($rowcount3 == 1){
		session_start();
		$_SESSION['loginform'] = true;
		header("location:decor/profile(decoration).php?email=".$email);
	
	}
	
	else if($rowcount4 == 1){
		session_start();
		$_SESSION['loginform'] = true;
		header("location:photoblust/profile(photoblust).php?email=".$email);
	
	}
		
	else if($rowcount5 == 1){
		session_start();
		$_SESSION['loginform'] = true;
		header("location: food/profile(food).php?email=".$email);
	}
	// else{
	// 	echo "<script> alert('wrong...'); window.location='index.html' </script>";
	// }
	// else if($rowcount3 == 1){
	// 	session_start();
	// 	$_SESSION['loginform'] = true;
	// 	header("location: http://localhost:7777/Weeding/decor/profile(decoration).php?email=".$email);
	
	// }
	
	// else if($rowcount4 == 1){
	// 	session_start();
	// 	$_SESSION['loginform'] = true;
	// 	header("Location:http://localhost:7777/Weeding/photoblust/profile(photoblust).php?email=".$email);
	
	// }
		
	// else if($rowcount5 == 1){
	// 	session_start();
	// 	$_SESSION['loginform'] = true;
	// 	header("food/profile(food).php?email=".$email);
	// }
	
	else{
			// header("Location: wrong(login).php");
		echo $rowcount1.' '.$rowcount2.' '.$rowcount3.' '.$rowcount4.' '.$rowcount5.'<br>';  
	
	}
	
	
	
	
 ?>
    


