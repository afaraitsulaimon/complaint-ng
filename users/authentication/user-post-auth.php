<?php

  if (isset($_POST['postButton'])) {
      
      $postUsersId = userLoggedIn();
       $postErrorMessage = array();
       $theTitleOfThePost = sanitize($_POST['titleForPost']);
       $theMessageOfThePost = sanitize($_POST['messageForPost']);

     

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'cars') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'application') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'beauty') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'fashion') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'food') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'government') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'housing') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'gadget') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'entertainment') {

        $theTopicPosted = $_POST['messageTopic'];

       }

       //check if the fields are empty

       if (empty($theTitleOfThePost)) {
           
        $postErrorMessage[] = "Enter the title of the message";
       }

       if (empty($theMessageOfThePost)) {
          
        $postErrorMessage[] = "Message field cannot be empty";
       }

       if (isset($_POST['messageTopic']) && $_POST['messageTopic'] == 'selectTopic') {

        $postErrorMessage[] = "Select Topic for the post";

       }

       //if no error message, then insert the message into the database
       if (empty($postErrorMessage)) {
           
           $insertPost = "INSERT INTO `posts`(`userPostId`, `postTitle`, `postMessage`, `topicMessage`, `datePosted`) VALUES ('$postUsersId','$theTitleOfThePost','$theMessageOfThePost','$theTopicPosted',NOW())" ;
           
         
           $queryInsertPost = mysqli_query($connection,$insertPost);

         

          if (!$queryInsertPost) {
              
            die("could not query QUERYINSERTPOST" .mysqli_error($connection));
          }

          header("location:user-post.php?postStatus=success");
          exit();
       }else{

        $messagePostedError = "<ul>";
        foreach($postErrorMessage as $postErrorMessages){

            $messagePostedError .= "<li>$postErrorMessages</li>";

        }
        $messagePostedError .= "</ul>";
       }



  }

?>