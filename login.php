<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login</title>
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<!-- Your custom styles (optional) -->
	<link href="css/style.css" rel="stylesheet">

	<style>
		#backdrop {
			height : 100vh;
			width : 100%;
			background : url('img/ir.jpg') repeat center;
			background-size : contain;
			filter : blur(3px);
			position : absolute;
			left : 0;
			top : 0;
		}
		#curtain {
		    position : relative;
		    left : 35%;
			top : 20vh;
			width : 28%;
		}
	</style>
</head>

<body>

	<!-- Start your project here-->
	<div id="backdrop"></div>

	<div id="curtain">
		<!-- Default form login -->
		<form class="text-center p-5 rainy-ashville-gradient color-block mx-auto z-depth-1-half" action="login.inc.php" method="post" style="opacity: 0.7;">

		    <p class="h4 mb-4">Login</p>

		    <!-- Email -->
		    <input type="text" name="uid" class="form-control mb-4" placeholder="TTE-number" required>
 	
		    <!-- Password -->
		    <input type="password" name="pwd" class="form-control mb-4" placeholder="Password" required>

		    <div class="d-flex justify-content-around">
		        <div>
		            <!-- Remember me -->
		            <div class="custom-control custom-checkbox">
		                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
		                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
		            </div>
		        </div>
		        <div>
		            <!-- Forgot password -->
		            <a href="">&nbsp;&nbsp;&nbsp;Forgot password?</a>
		        </div>
		    </div>

		    <!-- Sign in button -->
		    <button class="btn btn-info btn-block my-4" type="submit" name="submit">Sign in</button>

		</form>
		<!-- Default form login -->
	</div>

	<!-- /Start your project here-->

	<!-- SCRIPTS -->
	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="js/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	
</body>

</html>
