<?php
   require_once("../users/authentication/user-login-auth.php");
   require_once("../users/configuration.php");

?>

 <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../style.css">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

	<title></title>
</head>
<body>

  <!-- Upper starts from here, it contains menu and directories of each page -->
   
    <div class="container-fluid" style="background-color:blue;">
      <div class="row">
          <div class="col-lg-12" style="margin-bottom:30px;">

          <!--Menu starts from here -->
              <div class="topMenu">
              <nav class="navbar navbar-light navbar-expand-md">
					<!-- Brand -->
					<a class="navbar-brand text-dark" href="index.php">
						<h1>complaintNG</h1>
					</a>

					<button
						class="navbar-toggler navbar-light"
						data-toggle="collapse"
						data-target="#collapsibleNavbar"
					>
						<span class="navbar-toggler-icon"></span>
					</button>

					<!-- Navbar links -->
					<div class="collapse navbar-collapse sideMenuButton" id="collapsibleNavbar">
						<ul class="navbar-nav text-white ml-auto nav-list">
							<li class="nav-item" >
								<button class="bg-transparent" ><a class="nav-link active text-white" href="index.php">Latest News</a></button>
							</li>
							<li class="nav-item">
							<button class="bg-transparent"><a class="nav-link active text-white" href="aboutus.php">About Us</a></button>
							</li>
							<li class="nav-item">
							<button class="bg-transparent"><a class="nav-link active text-white" href="advert.php">For Advert</a></button>
							</li>
							<li class="nav-item">
							<button class="bg-transparent"><a class="nav-link active text-white" href="signin.php">Sign In</a></button>
							</li>
						</ul>
					</div>
				</nav>
              </div>
         </div>
    </div>  
    </div>   
		  <!--Menu ends from here -->    
		  

<!--UPPER IMAGE WITH SIGNIN/REGISTER START HERE-->
    <div class="container-fluid">
        <div class="row">
             <div class="col-12 contactUsUp">

                <h1>Register/Sign In</h1>
             </div>
        </div>
    </div>
<!--UPPER IMAGE WITH SIGNIN/REGISTER ENDS HERE-->


<!--Registration starts from here and it is hidden until the register button is clicked -->

    <div class="container" style="display:none">
        <div class="row justify-content-around">
             <div class="col-6 mt-3">

			 <h2 class="text-center">Register</h2>

			 <form>
						<div class="form-group"><label>Full Name:</label><input type="text" placeholder="Full Name" class="form-control"></div>
						<div class="form-group"><label>Username:</label><input type="text" placeholder="Username" class="form-control"></div>
						<div class="form-group"><label>Password:</label><input type="password" placeholder="password" class="form-control"></div>
						<div class="form-group"><label>Email:</label><input type="text" placeholder="Email" class="form-control"></div>
						<div class="form-group"><label>Phone:</label><input type="text" placeholder="080xxxxxxxx" class="form-control"></div>
						<button class="form-group"><input type="submit" value="Register"> <button>Signin</button>
					</form>
			 </div>
			 
        </div>
    </div>

<!--Registration ends from here and it is hidden until the register button is clicked -->
	

<!--SignUp starts from here and it is visible -->

	<div class="container">
        <div class="row justify-content-center">
		<div class="col-6 mt-3">

<h2 class="text-center">Login</h2>

<?php
    if (isset($errorLoginMessage)) {
	     echo "<div class='alert alert-danger'>{$errorLoginMessage}</div>";
	}
?>

<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">

		   <div class="form-group"><label>Username:</label><input type="text" placeholder="Username" name="usernameDet" class="form-control"></div>
		   <div class="form-group"><label>Password:</label><input type="password" placeholder="password" name="userPassCode" class="form-control"></div>
		   <div class="form-group"><a href="">forget password</a></div>
		   <button class="form-group"><input type="submit" value="Login" name="loginUser"> <button class="ml-2 btn-group btn-dark"><a href="../users/user-registration.php">Register</button>
	   </form>
</div>
        </div>
    </div>

<!--SignUp ends from here and it is visible -->






	<!--footer starts from here-->
	    <div class="container" style="margin-top:50px;">
			<div class="row">
			  <div class="col-12 text-center">

               <p> <?php echo date('Y'); ?> Copyright of complaintNG</p>

			   </div>
			</div>

		</div>
	
	<!--footer ends here-->


  <!-- JS, Popper.js, and jQuery -->

</body>
 
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</html>