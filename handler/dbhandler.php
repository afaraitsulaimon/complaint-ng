<?php

    

    function sanitize($data){

        $data = trim($data);
        $data = strip_tags($data);
        return $data;
    }

// to check if the user has logged in
//then return the session id of the user
    function userLoggedIn(){

        if (isset($_SESSION['idOfUser'])) {
            
            return $_SESSION['idOfUser'];
        }else{

            return false;
        }
    }


    function theName(){
        global $connection;

        $id = userLoggedIn();

       if (isset($id)) {
           
          
        $presentUserDetails = "SELECT * FROM usersdetails WHERE usersId = $id";

        $querypresentUserDetails = mysqli_query($connection,$presentUserDetails);

        if (!$querypresentUserDetails) {
            
            die("could not query the QUERYPRESENTUSERDETAILSNAME " .mysqli_error($connection));
        }
        
        $fetchPresentUserDetails = mysqli_fetch_assoc($querypresentUserDetails);

        $fetchPresentUserFullName = $fetchPresentUserDetails['fullName'];
        return $fetchPresentUserFullName;

       }
      
   }



   //for displaying user email address

   
   function theEmail(){
    global $connection;

   $id = userLoggedIn();

   if (isset($id)) {
       
    $presentUserDetails = "SELECT * FROM usersdetails WHERE usersId = $id";

    $querypresentUserDetails = mysqli_query($connection,$presentUserDetails);
    
    if (!$querypresentUserDetails) {
        
        die("could not query the QUERYPRESENTUSERDETAILSEMAIL " .mysqli_error($connection));
    }
    
    $fetchPresentUserDetails = mysqli_fetch_assoc($querypresentUserDetails);
 
    $fetchPresentUserEmail = $fetchPresentUserDetails['email'];
 
     return $fetchPresentUserEmail;
   }

}


   //for displaying user phone number

   
   function thePhoneNumber(){
    global $connection;

   $id = userLoggedIn();

   if (isset($id)) {
       
    $presentUserDetails = "SELECT * FROM usersdetails WHERE usersId = $id";

    $querypresentUserDetails = mysqli_query($connection,$presentUserDetails);
 
    if (!$querypresentUserDetails) {
        
        die("could not query the QUERYPRESENTUSERDETAILSPHONENUMBER " .mysqli_error($connection));
    }
    
    $fetchPresentUserDetails = mysqli_fetch_assoc($querypresentUserDetails);
 
    $fetchPresentUserPhoneNumber = $fetchPresentUserDetails['phoneNumber'];
 
     return $fetchPresentUserPhoneNumber;
   }
  
}


//for displaying username of the user


function theUserName(){
    global $connection;

   $id = userLoggedIn();

   if (isset($id)) {
    $presentUserDetails = "SELECT * FROM usersdetails WHERE usersId = $id";

    $querypresentUserDetailsUsername = mysqli_query($connection,$presentUserDetails);
 
    if (!$querypresentUserDetailsUsername) {
        
        die("could not query the QUERYPRESENTUSERDETAILSUSERNAME " .mysqli_error($connection));
    }
    
    $fetchPresentUserDetails = mysqli_fetch_assoc($querypresentUserDetailsUsername);
 
    $fetchPresentUserUsername = $fetchPresentUserDetails['userName'];
    return $fetchPresentUserUsername;
   }
  
}



?>