<?php 

$logInUsers = userLoggedIn();

$selectTheUserProfile = "SELECT * FROM usersdetails WHERE usersId = $logInUsers";

$querySelectTheUserProfile = mysqli_query($connection,$selectTheUserProfile);

if (!$querySelectTheUserProfile) {
    
   die("could not query QUERYSELECTTHEUSERPROFILE " .mysqli_error($connection));
}

//count the rows

$numOfProfile = mysqli_num_rows($querySelectTheUserProfile);

if ($numOfProfile = 1) {
    
   $fetchUserProfilePic = mysqli_fetch_assoc($querySelectTheUserProfile);

   echo '<img src=data:image;base64,'. $fetchUserProfilePic['userImages'] .' class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width:80px; height:80px;border-radius:50%;"> ';
}

?>