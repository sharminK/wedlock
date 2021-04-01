<html>
	<head>
		<meta charset="utf-8">
		<title>login form</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<style type="text/css">
			/*body {
				background-color: #F1E2E2;
				font-family : arial;
				font-size : 20px;
				line-height : 20px;
				color : #000;
				padding: 2px;
				text-align: center;
				margin: 12px;
				background: url(a.jpg) no-repeat;
				margin-top : 100px;
				margin-left : 50px;
				background-size:  cover;


			}*/
			body{
			 background: #642B73; 
			background: -webkit-linear-gradient(to right, #C6426E, #642B73); 
			background: linear-gradient(to right, #C6426E, #642B73); 
		  	}
		  	.btn{

   			margin:10px 20px;
    		line-height: 20px;
			}
div.card {

	margin-left: 525px ;
	margin-top: 50px;

  width: 400px;
  box-shadow: 0 10px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  text-align: center;
}

div.container {

  padding: 20px;
 
}
ul.list-group  {

  margin-left: 30px;
  margin-right: 30px;
 
}

		</style>
	</head>
	<br><br>
	<body>

		<form action = "login.php" method = "post" >
			
			<div class="card">
 <br>
    <h1>WEDLOCK</h1>
 
  <div class="container">
    <ul class="list-group ">

    	<input type = "email" name = "email" required = "required"placeholder="Email">
    	<br>
    	<input type = "password" name = "pass" required = "required" placeholder="Password">
    	
  </ul>
  <br>
			<button type="submit" value="Login" class="btn btn-primary" style="background-color: #cd4c75">Login</button> 
			<a href="index.html"  class="btn btn-info" role="button" style="background-color:	#721d72">Back</a>
  </div>
</div>
	</form>
	

		<!-- <form action = "login.php" method = "post" >
			Email: <input type = "email" name = "email" required = "required">
			<br><br><br>
			Password: <input type = "password" name = "pass" required = "required" >
			<br><br>
			<input type="submit" name="" value="Login">
			<br><br>
	<tr>
	<td></td>
	<td></td>
	<td></td>
	<br></br>
	<td><a href="index.html" class="btn btn-info" role="button" style= "margin-left: 550px;">Back</a></td>
	</tr>
		</form> -->
	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

</body>
</html>
