<?php
     require_once("configuration.php");
     require_once("../handler/dbhandler.php");

     //if the register button is clicked

     if (isset($_POST['regUserButton'])) {

        //store the the users details inputted
        //in the registration form

        $nameOfUser = sanitize($_POST['userFullName']);
        $emailOfUser = sanitize($_POST['userEmail']);
        $phoneOfUser = sanitize($_POST['userMobile']);
        $userUserName = sanitize($_POST['user-name']);
        
        if (isset($_POST['gender']) && $_POST['gender'] == "male") {
            
            $usersGender = $_POST['gender'];
        }


        if (isset($_POST['gender']) && $_POST['gender'] == "female") {
            
            $usersGender = $_POST['gender'];
        }

        if (isset($_POST['gender']) && $_POST['gender'] == "undisclosed") {
            
            $usersGender = $_POST['gender'];
        }


        $passOfUser = sanitize($_POST['userPass']);
        $confirmPassOfUser = sanitize($_POST['confirmPassword']);

        //store all the errors in an array
        //each error will be stored in an array
        // and be called with foreach at the end , if there is any


        $regError = array();


       if (getimagesize($_FILES['userImage']['tmp_name']) == false ) {

           $regError[] = "Select an Image";
       }else {

        //declare variable
           //this ['name'] is gotten from the html code name in the input
           //the variable $nameOfImage you created is to pick the name and store it in the database
           //so you have to also create an image name in the database also

           $image = $_FILES['userImage']['tmp_name'];
           $nameOfImage = $_FILES['userImage']['name'];
           $image = base64_encode(file_get_contents(addslashes($image)));

          
       }
       
 


        //checking if the the users details entered 
        //is up to the site specification
        // or if any of the required input is empty

        if (empty($nameOfUser)) {
            
            $regError[] = "Enter Your Full name";
        }

        if (!empty($nameOfUser) && strlen($nameOfUser) < 6) {
            
            $regError[] = "Name is too short";

        }


        if (empty($emailOfUser)) {
            
            $regError[] = "Enter Your Email Address";

        }

        if (!empty($emailOfUser) && !filter_var($emailOfUser, FILTER_VALIDATE_EMAIL)) {
            
            $regError[] = "Enter Correct Email Address";

        }


        if (empty($phoneOfUser)) {
            
            $regError[] = "Enter your Phone Number";
        }

        if (!empty($phoneOfUser) && strlen($phoneOfUser) < 11) {
            
            $regError[] = "Mobile number not correct";
        }


         if (empty($userUserName)) {
             
            $regError[] = "Enter your username";
         }


         if (!empty($userUserName) && strlen($userUserName) < 6) {
             
            $regError[] = "Username is too short";
         }

        
         if (empty($passOfUser)) {

            $regError[] = "Enter your password";
         }

         if (empty($confirmPassOfUser)) {
             
            $regError[] = "Confirm your password";
         }

         if (!empty($passOfUser) && strlen($passOfUser) < 6) {
             
            $regError[] = "Password too short";
         }


         if (!empty($passOfUser) && $passOfUser !== $confirmPassOfUser) {
             
            $regError[] = "Password does not match";
         }


         if (!isset($_POST['gender'])) {
            
            $regError[] = "Select one gender";
        }

         //if no error is found and none of it is empty

      
         if (!$regError) {
         


            $insertDetails = "INSERT INTO `usersdetails`(`fullName`, `email`, `phoneNumber`, `userName`, `passWord`, `userImages`, `imageName`, `userGender`, `registeredDate`) VALUES ('$nameOfUser','$emailOfUser','$phoneOfUser','$userUserName','$passOfUser','$image','$nameOfImage','$usersGender', NOW() )";

            $queryInsertDet = mysqli_query($connection,$insertDetails);

        

            if (!$queryInsertDet) {
                
                die("could not query QUERYINSERTDET" .mysqli_error($connection));
            }

            header("location:user-registration.php?regFeedback=success");
            exit();

         } else {
             
              $regErrorMessage = "<ul>";

              foreach($regError as $registrationErrors){
                $regErrorMessage .= "<li>$registrationErrors</li>";

              }

              $regErrorMessage .= "</ul>";
         }





     }
?>