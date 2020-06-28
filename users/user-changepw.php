<?php
	session_start();
	 require_once("configuration.php");
	 require_once("../handler/dbhandler.php");
     require_once("authentication/user-login-auth.php");
     require_once("authentication/user-changepw-auth.php");
?>

<!DOCTYPE html>
<html>
<head>

<style>


.btn-lg{
    border:2px solid black;
}

.btn-lg:hover{

       color:red;
       font-weight:bolder;
       border:2px solid red;

       
}
</style>

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
   
    <div class="container-fluid upper">
      <div class="row">
          <div class="col-lg-12" style="margin-bottom:100px;">

          <!--Menu starts from here -->
            <div class="topMenu">
                 <nav class="navbar navbar-light navbar-expand-md">


					<!-- Brand starts here-->
					<a class="navbar-brand text-dark" href="dashboard.php">
						<h1>complaintNG</h1>
					</a>
                <!-- Brand ends here-->
					<!-- This display the users full name-->
					<div class="ml-auto" style="color:blue; font-size:1.5em; font-weight:bold;">Welcome 
					<?php 
					    require_once("user-fullname.php");


					  ?>
					  </div>

					<!-- user dropdown starts from here -->
					<div class="dropdown ml-auto postButton">

					    

                         <button class="btn-lg mr-5"><a href="user-post.php">Post</a></button>
                       
						  <?php
                                require_once("user-profile-pics.php");
						  ?>
                                                 
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="authentication/user-logout-auth.php">Sign Out</a>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <a class="dropdown-item" href="user-edit-profile.php">Edit Profile</a>
                        </div>
                    </div>

                    <!-- user dropdown ends here -->


                 </nav>
            </div>
		  <!--Menu ends from here -->    
		  

		  </div>
		  
		   <!-- start of inside menu-->
		   <div class="container-fluid">
			 <div class="row justify-content-center">
				  <div class="col-6 " >
					 <h1 style="padding-left:50px;">Explore Topics</h1>
					 
					 <div class="form-group">
						<form>
							<input type="text" class="form-control" style="width:500px; height:50px; margin-left:50px;">
						</form>
					
					 </div>
					 

					 <div>
					<p style="padding-left:50px;">Topics:</p>
				     </div>




					 <div class=" topics1 col-xs-12 col-sm-12">
				<a href="user-pages/users-cars.php"><button><span><img src="../icon/car2.png"></span>Cars</button></a> <a href="user-pages/users-apps.php"><button style=""><span><img src="../icon/mobile-app.png"></span> Apps(Mobile & Web)</button></a> <a href="user-pages/users-beauty.php"><button><span><img src="../icon/makeup.png"></span>Beauty</button></a>
				</div>

				<div class="topics2 col-xs-12 col-sm-12">
				<a href="user-pages/users-fashion.php"><button><span><img src="../icon/fashion1.png"></span>Fashion</button></a> <a href="user-pages/users-foods.php"><button  style=""><span><img src="../icon/food.png"></span>Food & Beverages</button></a> <a href="user-pages/users-govt.php"><button style=""><span><img src="../icon/bank.png"></span>Govt/Politics</button></a>
				</div>

				<div class="topics3 col-xs-12 col-sm-12">
				<a href="user-pages/users-housing.php"><button><span><img src="../icon/house.png"></span>Apartment</button></a> <a href="user-pages/users-elect-gadgets.php"><button style=""><span><img src="../icon/gadget1.png"></span>Gadget/Electronics</button></a> <a href="user-pages/users-entertainment.php"><button style=""><span><img src="../icon/entertainment.png"></span>Entertainment</button></a>
				</div>


			</div>

				<!-- for top advert start here-->
				<div class="col-5" style="border:5px solid white">
                      <p style="font-size:3em; text-align:center; padding-top:10vh;">
						  Advertise Here!
					  </p>
				   </div>
			  <!-- for top advert ends here-->	

				<!-- statement after the menu start from here-->

				<div class="col-12 text-center frontStatement">

				<p>Complain About a Product <br> As a User</p>

				</div>
				<!-- statement after the menu ends here-->
				   
			 </div>  
		  </div>	  
		  
		  <!-- ends of inside menu-->

			  
				

				


      </div>
	</div>
</div>	


  <!-- Upper ends from here, it contains menu and directories of each page -->


   <!-- change password form starts from here -->

     
        <div class="container mt-5">
           <div class="row justify-content-around">
               <div class="col-6 bg-info">

             <!-- this display the error message if we encounter any one-->
               <?php
                   if (isset($changePwErrMessage)) {
                       
                    echo "<div class='alert alert-danger mt-2'>$changePwErrMessage</div>";
                   }
               ?>
                  <h1 class="mt-4 mb-5 text-center">Change Password</h1>

                    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
                  
                        <div class="form-group">
                           <label>Current Password:</label>
                           <input type="password" name="currentPw" class="form-control">
                        </div>


                        <div class="form-group">
                           <label>New Password:</label>
                           <input type="password" name="newPw" class="form-control">
                        </div>


                        <div class="form-group">
                           <label>Confirm New Password:</label>
                           <input type="password" name="confirmNewPw" class="form-control">
                        </div>

                        <div class="form-group" align="center">
                           <button type="submit" name="changePw" class="btn-lg" >Change Password</button>
                        </div>
                    
                    </form>
               
               </div>
           </div>

        </div>

   <!-- change password form ends here -->




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