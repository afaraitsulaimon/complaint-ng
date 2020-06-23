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


					<!-- Brand starts here-->
					<a class="navbar-brand text-dark" href="dashboard.php">
						<h1>complaintNG</h1>
					</a>
                <!-- Brand ends here-->
					

					<!-- user dropdown starts from here -->
					<div class="dropdown ml-auto postButton">

                         <button class="btn-lg mr-5"><a href="user-post.php">Post</a></button>
                       
                            <img src="../images/disclaimer.png" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:80px; height:80px;border-radius:50%;">
                      
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Sign Out</a>
                            <a class="dropdown-item" href="#">Change Password</a>
                            <a class="dropdown-item" href="#">Edit Profile</a>
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


     <div class="container-fluid">
         <div class="row">
             <!-- LEFT SIDE OF THE POST STARTS FROM HERE-->
               <div class="col-3 bg-info">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">My Posts</a>
                            <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">New Post</a>
                            <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
                            <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
                    </div>
                   

               </div>
             <!-- LEFT SIDE OF THE POST ENDS HERE-->



             <!-- RIGHT SIDE OF THE POST STARTS FROM HERE-->
             <div class="col-9 bg-danger">
                <div class="tab-content" id="v-pills-tabContent">
                    <!--list of User Post starts from here -->
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">S/N</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Posted Date</th>
                                        <th scope="col">View</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row"><input type="checkbox"></th>
                                        <td>Mark</td>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td><button><a href = "#">View</a></button></td>
                                        <td><button><a href = "#">Edit</a></button></td>
                                        <td><button><a href = "#">Delete</a></button></td>
                                        </tr>

                                        <tr>
                                        <th scope="row"><input type="checkbox"></th>
                                        <td>Jacob</td>
                                        <td>Mark</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td><button><a href = "#">View</a></button></td>
                                        <td><button><a href = "#">Edit</a></button></td>
                                        <td><button><a href = "#">Delete</a></button></td>
                                        </tr>

                                        <tr>
                                        <th scope="row"><input type="checkbox"></th>
                                        <td>Jacob</td>
                                        <td>Mark</td>
                                        <td>Larry the Bird</td>
                                        <td>@twitter</td>
                                        <td><button><a href = "#">View</a></button></td>
                                        <td><button><a href = "#">Edit</a></button></td>
                                        <td><button><a href = "#">Delete</a></button></td>
                                        </tr>

                                        
                                    </tbody>
                            </table>
                        </div>
                    <!--list of User Post ends here -->

                        <!--New Post starts from here -->

                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                               <h1 class="text-center">Create a New Post</h1>
                               <form>
                                   <div class="form-group">
                                       <label>Title:</label>
                                       <input type="text" class="form-control">

                                   </div>

                                   <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>

                                   <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Message</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>


                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Upload Image</label>
                                        <input type="file" class="form-control-file" >
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="btn-lg ">Post</button>

                                    </div>
                               </form>
                        </div>

                        <!--New Post ends here -->

                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
                </div>

               </div>
             <!-- RIGHT SIDE OF THE POST ENDS HERE-->

         </div>

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