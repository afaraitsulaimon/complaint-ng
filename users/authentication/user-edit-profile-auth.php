<?php
    
    if (isset($_POST['editUserButton'])) {
        
        $userEditId = userLoggedIn();
        $profileEditError = array();

        $fullNameToEdit = sanitize($_POST['editFullNameOfUser']);
        $emailEdit = sanitize($_POST['editUserEmail']);
        $phoneNumberEdit = sanitize($_POST['editUserMobile']);
        $usernameEdit = sanitize($_POST['editUser-name']);

        if (isset($_POST['editGender']) && $_POST['editGender'] == 'male') {
            
            $genderEdited = $_POST['editGender'];
        }

        if (isset($_POST['editGender']) && $_POST['editGender'] == 'female') {
            
            $genderEdited = $_POST['editGender'];
        }

        if (isset($_POST['editGender']) && $_POST['editGender'] == 'undisclosed') {
            
            $genderEdited = $_POST['editGender'];
        }



        if ($_FILES['editUserImage']['tmp_name'] == false ) {

            $profileEditError[] = "Select an Image";
        }else {
 
         //declare variable
            //this ['name'] is gotten from the html code name in the input
            //the variable $nameOfEditedImage you created is to pick the name and store it in the database
            //so you have to also create an image name in the database also
 
            $edit_image = $_FILES['editUserImage']['tmp_name'];
            $nameOfEditedImage = $_FILES['editUserImage']['name'];
            $edit_image = base64_encode(file_get_contents(addslashes($edit_image)));
 
           
        }

        if (empty($fullNameToEdit)) {
            
            $profileEditError[] = "Full name is required";
        }

        if (empty($emailEdit)) {
            
            $profileEditError[] = "Email is required";
        }

        if (empty($phoneNumberEdit)) {
            
            $profileEditError[] = "Phone number is required";
        }
        
        if (empty($usernameEdit)) {
            
            $profileEditError[] = "Username is required";
        }

        if (!isset($_POST['editGender'])) {
            
            $profileEditError[] = "Select Gender";
        }

        // if no error found
        //update the user details

        if (!$profileEditError) {
     
             $updateUserProfile = " UPDATE `usersdetails` SET `fullName`= '$fullNameToEdit' ,`email`= '$emailEdit' ,`phoneNumber`= '$phoneNumberEdit' , `userName`= '$usernameEdit' , `userImages` = '$edit_image' , `imageName`= '$nameOfEditedImage' , `userGender`= '$genderEdited' WHERE usersId = $userEditId ";
                

            $queryUpdateUserProfile = mysqli_query($connection, $updateUserProfile);
            



            if (!$queryUpdateUserProfile) {
                
                die("could not query QUERYUPDATEUSERPROFILE " .mysqli_error($connection));
            }

            header("location:user-edit-profile.php?editProfileStatus=success");
            exit();
            
        }else{

            $editProfileMessage = "<ul>";

            foreach($profileEditError as $profileEditErrors){

                $editProfileMessage .= "<li>$profileEditErrors</li>";
            }

            $editProfileMessage .= "</ul>";
        }

    }


?>