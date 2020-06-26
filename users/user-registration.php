<?php
   require_once("authentication/user-reg-auth.php");

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
					<a class="navbar-brand text-dark" href="../pages/index.php">
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
								<button class="bg-transparent" ><a class="nav-link active text-white" href="../pages/index.php">Latest News</a></button>
							</li>
							<li class="nav-item">
							<button class="bg-transparent"><a class="nav-link active text-white" href="../pages/aboutus.php">About Us</a></button>
							</li>
							<li class="nav-item">
							<button class="bg-transparent"><a class="nav-link active text-white" href="../pages/advert.php">For Advert</a></button>
							</li>
							<li class="nav-item">
							<button class="bg-transparent"><a class="nav-link active text-white" href="../pages/signin.php">Sign In</a></button>
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

                <h1>Registration</h1>
             </div>
        </div>
    </div>
<!--UPPER IMAGE WITH SIGNIN/REGISTER ENDS HERE-->



	

<!--Registration form starts from here and it is visible -->

	<div class="container">
        <div class="row justify-content-center">
		   <div class="col-6 mt-3">

         <?php
               if (isset($_GET['regFeedback']) && $_GET['regFeedback'] == 'success') {
                  echo "<div class='alert alert-success'>Registartion successful</div>";
               }elseif (isset($regErrorMessage)) {
               echo "<div class='alert alert-danger'>$regErrorMessage</div>";
               }
         ?>

                <h2 class="text-center">Register Here</h2>

                <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                    <div class="form-group">
                       <label>Full Name:</label>
                       <input type="text" placeholder="full name" class="form-control" name="userFullName">
                    </div>


                    <div class="form-group">
                       <label>Email:</label>
                       <input type="text" placeholder="email" class="form-control" name="userEmail">
                    </div>

                    <div class="form-group">
                       <label>Phone Number:</label>
                       <input type="text" placeholder="080xxxxxxxx" class="form-control" name="userMobile">
                    </div>

                    <div class="form-group">
                       <label>Username:</label>
                       <input type="text" placeholder="username" class="form-control" name="user-name">
                    </div>

                    <div class="form-group">
                       <label>Gender:</label>
                       <input type="checkbox" value="male" name="gender">&nbsp Male 
                       <input type="checkbox" value="female" name="gender">&nbsp Female 
                       <input type="checkbox" value="undisclosed" name="gender">&nbsp Undisclosed
                    </div>

                    <div class="form-group">
                       <label>Password:</label>
                       <input type="password" placeholder="password" class="form-control" name="userPass">
                    </div>

                    <div class="form-group">
                       <label>Confirm Password:</label>
                       <input type="password" placeholder="confirm password" class="form-control" name="confirmPassword">
                    </div>


                    <div>
                       <label>Image:</label>
                       <input type="file" name="userImage" class="form-control-file" >
                    </div>


                    <div class="form-group mt-3">
                       
                       <button type="submit" class="form-control" name="regUserButton">Register</button>
                    </div>
                    
                </form>

          </div>
       </div>
    </div>

<!--Registration form ends from here and it is visible -->






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