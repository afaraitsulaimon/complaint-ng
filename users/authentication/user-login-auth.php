<?php
       require_once("C:\wamp64\www\complaint-ng\users\configuration.php");
       require_once("../handler/dbhandler.php");


    if (isset($_POST['loginUser'])) {


        //this holds all the errorgotten here in array
        $loginError = array();
        $userDet = sanitize($_POST['usernameDet']);
        $userCode = sanitize($_POST['userPassCode']);

        //let us check for any error when trying to login

        if (empty($userDet)) {
            
            $loginError[] = "Username is required";
        }

        if (empty($userCode)) {
            
            $loginError[] = "Password is Required";
        }

        if (!empty($userDet) && !empty($userCode)) {
            
            $getUserDetails = "SELECT * FROM usersdetails WHERE userName = '$userDet' " ;

            
            $queryGetUserDetails = mysqli_query($connection,$getUserDetails);

            $fetchUserDetails = mysqli_fetch_assoc($queryGetUserDetails);

            
           
            // fetch the password and check if it matches with the password entered by the user

            $loginPass = $fetchUserDetails['passWord'];

            if ($loginPass != $userCode) {
                
                $loginError[] = "Username or password does not match";
            }
            
        }

           
     //when no error occurs, then login

        if (empty($loginError)) {

            $LoggedInUserDet = "SELECT * FROM usersdetails WHERE userName = '$userDet' AND passWord = '$userCode' " ;

            $queryLoggedInUserDet = mysqli_query($connection, $LoggedInUserDet);

            //check how many rows found in the db
            //cos we are suppose to get just only 1 row
            //if $countRows gives us one, then we fetch the user details
            // the store the user id in a session

            $countRows = mysqli_num_rows($queryLoggedInUserDet);

            if ($countRows = 1) {
                
                $fetchLoggedInUserDet = mysqli_fetch_assoc($queryLoggedInUserDet);

                

                $_SESSION['idOfUser'] = $fetchLoggedInUserDet['usersId'];

                

            }

            header("location:../users/dashboard.php");
            exit();



            
        }else{

            $errorLoginMessage = "<ul>";

            foreach($loginError as $loginErr){

                $errorLoginMessage .= "<li>$loginErr</li>";
            }

            $errorLoginMessage .= "</ul>";
        }

            
    }


?>