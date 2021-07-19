<!DOCTYPE html>
<html>
<head>
	<meta  name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Banking Website</title>
	<title>Custtomers</title>

	<style >
		body{
			margin: 0;
			/*background-color: #6B7CED;*/
		}
		
		.topnav{
			overflow: hidden;
			background-image: url("cus_nav.png");
			background-size: cover;
			height:150px;
		
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
		.center-text{
			text-align: center;
		}
		.transaction{
			text-decoration: none;
			padding: 10px;
			color: white;
			font-size: 20px;
			font-family: Roboto,Helvetica,Arial,sans-serif;
			color: #03a9f4;

		}
		#show{
			width: 130px;
			height: 30px;
			border: none;
			background: transparent;
			font-size: 20px;
			font-family: Roboto,Helvetica,Arial,sans-serif;
			color: #03a9f4;

		}
		dialog{
			width: 40%;
			height: 30%;
			background-color: pink;
			outline: none;
		}
		#entername,#enteramount{
			font-size: 15px;
			width: 40%;
			height: 30%;
			border: none;
			border-bottom: 1px solid;
			background: transparent;
			margin-top: 40px;
			outline: none;
			
		}
		#close,#sendmoney{
			font-size: 14px;
			outline: none;
			border: none;
			width: 110px;
			height: 35px;
			margin-top: 40px;
			margin-right: 20px;
			float: right;
			background: black;
			color: white;

		}
		#lbl_cus{
			font-size: 30px;
			margin-left: 670px;
		}
		.customers_det{
			/*border: 1px solid black;*/
			display: flex;
			flex-direction: column;
		}
		#main-div1,#main-div2{
			/*border: 1px solid black;*/
			display: flex;
			flex-direction: row;
			padding: 20px;
			font-size: 20px;
		}
		#sub-div1{
			border: 3px solid pink;
			text-align: center;
			padding: 17px;
		}
		
		
		
	</style>
</head>
<body>


	<!-- header starts here -->
	<div class="topnav">
		<a href="#" id="first">BANKING SYSTEM</a>
		<a href="./main.php"><i class="fa fa-fw fa-home"></i>Home</a>
		
	</div>
	<!-- header ends here -->


	<div class="center-text">
		

		<a href="sendmoney.php"><button class="btn" id="show">Send Money</button></a>
		<a href="transfer.php" class="transaction">See All Transactions</a>
		<br><br>
		
	</div>



	<label id="lbl_cus">Our Customers</label>
	<section >
		<div class="customers_det">
			<div id="main-div1">
				<div id="sub-div1">
					<a href=""><img src="boyimg.png"></a>
					<p>Hope</p>
				</div>
				<div id="sub-div1">
					<a href=""><img src="boyimg.png"></a>
					<p>Greg</p>
				</div>
				<div id="sub-div1">
					<a href=""><img src="girlimg1.png"></a>
					<p>Cherry</p>
				</div>
				<div id="sub-div1">
					<a href=""><img src="girlimg.png"></a>
					<p>Allie</p>
				</div>
				<div id="sub-div1">
					<a href=""><img src="boyimg.png"></a>
					<p>Olive</p>
				</div>

			</div>
			<div id="main-div2">
				<div id="sub-div1">
					<a href=""><img src="girlimg.png"></a>
					<p>Gene</p>
				</div>
				<div id="sub-div1">
					<a href=""><img src="boyimg.png"></a>
					<p>Jen</p>
				</div>
				<div id="sub-div1">
					<a href=""><img src="girlimg1.png"></a>
					<p>Anita</p>
				</div>
				<div id="sub-div1">
					<a href=""><img src="boyimg.png"></a>
					<p>Peter</p>
				</div>
				<div id="sub-div1">
					<a href=""><img src="girlimg1.png"></a>
					<p>Ray</p>
				</div>
			</div>
			
		</div>
	</section>
</body>
</html>