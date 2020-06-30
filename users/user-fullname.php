<?php

   $loggedInPerson = userLoggedIn();
			
   $getloggedInPersonDet = "SELECT * FROM usersdetails WHERE usersId = $loggedInPerson";

   $queryLoggedInPersonDet = mysqli_query($connection,$getloggedInPersonDet);

   if (!$queryLoggedInPersonDet) {
       
       die("could not query queryLoggedInPersonDet " .mysqli_error($connection));
   }

   $fetchLoggedInPersonDet = mysqli_fetch_assoc($queryLoggedInPersonDet);

   $fetchLoggedInPersonName = $fetchLoggedInPersonDet['fullName'];

   echo $fetchLoggedInPersonName;		
?>