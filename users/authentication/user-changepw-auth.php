<?php
    if (isset($_POST['changePw'])) {
        
        $changePwError = array();

        $userCurrentCode = sanitize($_POST['currentPw']);
        $userNewCode = sanitize($_POST['newPw']);
        $userConfirmNewCode = sanitize($_POST['confirmNewPw']);


        // get the user login id and use it to select the user details out
        // then compare if the password matches with the current pasword enterd by the user
        //if not throw error

        $user_Id = userLoggedIn();

        $detailsOfUser = "SELECT * FROM usersdetails WHERE usersId = $user_Id ";
        $queryDetailsOfUser = mysqli_query($connection,$detailsOfUser);

        if (!$queryDetailsOfUser) {
            
            die("could not query QUERYDETAILSOFUSER" .mysqli_error($connection));
        }

        $fetchDetailsOfUser = mysqli_fetch_assoc($queryDetailsOfUser);

        $theUserPassWord = $fetchDetailsOfUser['passWord'];

        //then let us compare the entered password for the current password with the one in the db

        if ($theUserPassWord !== $userCurrentCode) {
            
            $changePwError[] = "Incorrect Password";
        }

        //check if nothing is entered in the fields

        if (empty($userCurrentCode)) {
            
            $changePwError[] = "Enter your current password";
        }

        if (empty($userNewCode)) {
            
            $changePwError[] = "Enter your new password";
        }

        if (empty($userConfirmNewCode)) {
            
            $changePwError[] = "Confirm your new Password";
        }


        // check if the new password matches 

        if ($userNewCode !== $userConfirmNewCode) {
            
            $changePwError[] = "Your new password does not match";
        }

        if ($userCurrentCode === $userNewCode) {
            
            $changePwError[] = "Choose another new password";
        }


        //if no error was occured
        //then proceed to change the password

        if (empty($changePwError)) {
            
            $insertNewPw = "UPDATE `usersdetails` SET `passWord`= '$userNewCode' WHERE usersId = $user_Id";
            $queryInsertNewPw = mysqli_query($connection,$insertNewPw);

            if (!$queryInsertNewPw) {
                
                die("could not query QUERYINSERTNEWPW" .mysqli_error($connection));
            }

            header("location:../pages/signin.php");
            exit();

        }else{

            $changePwErrMessage = "<ul>";

            foreach($changePwError as $changePwErrors){

                $changePwErrMessage .= "<li>$changePwErrors</li>";

            }

            $changePwErrMessage .= "</ul>";
        }


    }
?>