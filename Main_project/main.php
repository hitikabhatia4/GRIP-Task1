<!DOCTYPE html>
<html>
<head>
	<meta  name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Banking Website</title>
	<style >
		body{
			margin: 0;
			/*background-color: #6B7CED;*/
		}
		.topnav{
			overflow: hidden;
			background-image: url("Vector_b.png");
			background-size: cover;
			height:250px;
		
		}
		.topnav a{
			float: right;
			color: black;
			text-align: center;
			padding: 14px 20px;
			text-decoration: none;
			font-size: 30px;
		}
		#first{
			float: left;
			color: #4A4C59;

		}
		h1{
			/*position: relative;*/
			font-size: 40px;
			text-align: center;
			position: absolute;
		    top: 30%;
		    left: 40%;
		}
		h3{
			/*position: relative;*/
			font-size: 40px;
			text-align: center;
			position: absolute;
		    top: 35%;
		    left: 35%;
		}
		#trans_img{
			position: absolute;
		    top: 50%;
		    left: 60%;
		    width: 35%;
		    height: auto;
			
		}
		footer{
			margin-top: 400px;
			text-align: center;
			position: relative;
			left: 0;
			width: 96%;
			padding: 20px 30px;
			background: #678FB1;
			color: white;
		}
		
		#icons{
			padding-left: 10px;
			padding-right: 20px;
			font-size: 25px;
			color: white;
		}
	</style>
	
</head>
<body >

	<!-- header starts here -->
	<div class="topnav">
		<a href="#" id="first">BANKING SYSTEM</a>
		<a href="./Customers.php"><i class="fa fa-fw fa-user"></i>Customers</a>
		<a href="#home"><i class="fa fa-fw fa-home"></i>Home</a>
		
	</div>
	<!-- header ends here -->


	<div>
	<h1>Money Transaction</h1>
	<h3>Easy way to transfer money </h3>
	<img src="trans_money.png" id="trans_img">

	<br>
	<br>
	<!-- <a href="Customers.html" class="get-started">View Customers</a> -->
	</div>
	<br>
	<br>

	<!-- footer starts here -->
	<div class="footer">
		<footer>
			<p>This Project is made by Hitka Bhatia at GRIP</p>
			<a href="https://www.linkedin.com/in/hitika-bhatia-8b9b53192/" class="fa fa-linkedin" id="icons"></a>
			<a href="https://github.com/hitikabhatia4" class="fa fa-github" id="icons"></a>
		</footer>
		
	</div>
	<!-- footer ends here -->

	



</body>
</html>