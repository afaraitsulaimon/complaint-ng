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
   
    <div class="container-fluid upper">
      <div class="row">
          <div class="col-lg-12" style="margin-bottom:100px;">

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
		  <!--Menu ends from here -->    
		  

		  </div>
		  
	





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