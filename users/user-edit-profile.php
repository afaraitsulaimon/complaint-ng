<?php
	session_start();
	 require_once("configuration.php");
	 require_once("../handler/dbhandler.php");
     require_once("authentication/user-login-auth.php");
     require_once("authentication/user-edit-profile-auth.php");
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
   
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12" style="background-color:blue;">

          <!--Menu starts from here -->
            <div class="topMenu">
                 <nav class="navbar navbar-light navbar-expand-md">


					<!-- Brand starts here-->
					<a class="navbar-brand text-dark" href="dashboard.php">
						<h1>complaintNG</h1>
					</a>
                <!-- Brand ends here-->
					<!-- This display the users full name-->
					<div class="ml-auto" style="color:white; font-size:1.5em; font-weight:bold;">Welcome 
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
                            <a class="dropdown-item" href="user-changepw.php">Change Password</a>
                            <a class="dropdown-item" href="user-edit-profile.php">Edit Profile</a>
                        </div>
                    </div>

                    <!-- user dropdown ends here -->


                 </nav>
            </div>
		  <!--Menu ends from here -->    
		  

		  </div>

		  

<!--UPPER IMAGE WITH SIGNIN/REGISTER START HERE-->
    <div class="container-fluid">
        <div class="row">
             <div class="col-12 contactUsUp">

                <h1>Edit Profile</h1>
             </div>
        </div>
    </div>
<!--UPPER IMAGE WITH SIGNIN/REGISTER ENDS HERE-->



	

<!--Registration form starts from here and it is visible -->

	<div class="container">
        <div class="row justify-content-center">
		   <div class="col-6 mt-5 bg-info">

      
                <h2 class="text-center mt-3">Edit Profile</h2>

                <?php

                   if (isset($_GET['editProfileStatus']) && $_GET['editProfileStatus'] == 'success') {
                       
                       echo "<div class='alert alert-success'>Profile Successfully update</div>";

                   }elseif (isset($editProfileMessage)) {
                       
                    echo "<div class='alert alert-danger'>$editProfileMessage</div>";

                   }
                ?>

                <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
                    <div class="form-group">

                       <label>Full Name:</label>
                       <input type="text" name="editFullNameOfUser" placeholder="full name" class="form-control" value ="<?php $name_ofuser = theName(); echo $name_ofuser; ?>" >
                    </div>


                    <div class="form-group">
                       <label>Email:</label>
                       <input type="text" placeholder="email" class="form-control" name="editUserEmail" value = "<?php $email_ofuser = theEmail(); echo $email_ofuser;?>">
                    </div>

                    <div class="form-group">
                       <label>Phone Number:</label>
                       <input type="text" placeholder="080xxxxxxxx" class="form-control" name="editUserMobile" value="<?php $phone_ofuser = thePhoneNumber(); echo $phone_ofuser;?>">
                    </div>

                    <div class="form-group">
                       <label>Username:</label>
                       <input type="text" placeholder="username" class="form-control" name="editUser-name" value="<?php $username_ofuser = theUserName(); echo $username_ofuser;?>">
                    </div>

                    <div class="form-group">
                       <label>Gender:</label>
                       <input type="checkbox" value="male" name="editGender">&nbsp Male 
                       <input type="checkbox" value="female" name="editGender">&nbsp Female 
                       <input type="checkbox" value="undisclosed" name="editGender">&nbsp Undisclosed
                    </div>


                    <div>
                       <label>Image:</label>
                       <input type="file" name="editUserImage" class="form-control-file" >
                    </div>


                    <div class="form-group mt-3" align="center">
                       
                       <button type="submit" class="btn-sm" name="editUserButton">Edit Profile</button>
                    </div>
                    
                </form>

          </div>
       </div>
    </div>

<!--edit profile form ends from here -->






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