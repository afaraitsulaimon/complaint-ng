<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <!-- that diplay messages after clicking view start from here-->
   <h1 class="text-center mt-5 mb-5">Message</h1>

    <div class="container">
         <div class="row justify-content-center bg-info">

               <?php
                  // if it get the id of a posted message

                  if (isset($_GET['userNoId'])) {
                      $idOfTheMessage = $_GET['userNoId'];
                      // then select all from the posts table where the post id is the same 

                      $messageClicked = "SELECT * FROM posts WHERE postId = $idOfTheMessage";
                      $queryMessageClicked = mysqli_query($connection,$messageClicked);

                      if (!$queryMessageClicked) {
                          
                        die("could not query QUERY MESSAGE CLICKED" .mysqli_error($connection));
                      }

                      //count number of rows seen

                      $numOfRowsForMessage = mysqli_num_rows($queryMessageClicked);

                      //fetch the messages

                      $fetchMessageClicked = mysqli_fetch_assoc($queryMessageClicked);


                  }
               ?>
             
              <!-- to display title start from here -->
                <div class="col-8" >
                 <h3>Title: </h3>   <?php echo "<h4> {$fetchMessageClicked['postTitle']}</h4>" ?>
                </div>
            <!-- to display title ends here -->
      
          <!-- to display message start from here -->
               <div class="bg col-8 mt-5 mb-5">
                 <h3>Message: </h3> <?php echo  "<p> {$fetchMessageClicked['postMessage']} </p>" ?>
               </div>
            <!-- to display message ends here -->

            <!-- button to go back start from here -->
                <div class="col-8" align="center">
                <button class="btn-lg"> <a href="user-post.php">Back</a></button>
                </div>
            <!-- button to go back ends here -->
      </div>

   </div>

       <!-- that diplay messages after clicking view ends here-->

</body>
</html>