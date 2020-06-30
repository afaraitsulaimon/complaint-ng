<?php

$userToShowMessage = userLoggedIn();

    $selectAllMessage = "SELECT * FROM posts WHERE userPostId = $userToShowMessage";

    $querySelectAllMessages = mysqli_query($connection,$selectAllMessage);

    if (!$querySelectAllMessages) {
        
        die("could not query QUERYSELECTALLMESSAGES" .mysqli_error($connection));
    }


    $postRowCounted = mysqli_num_rows($querySelectAllMessages);


            $messageTable = "<table class='table table-bordered'>";
            $messageTable .= "<th>#</th>";
            $messageTable .= "<th>S/N</th>";
            $messageTable .= "<th>Title</th>";
            $messageTable .= "<th>Message</th>";
            $messageTable .= "<th>Topic</th>";
            $messageTable .= "<th>View</th>";
            $messageTable .= "<th>Edit</th>";
            $messageTable .= "<th>Delete</th>";
            $messageTable .= "<th>Posted Date</th>";


    while ($fetchPostedMessages = mysqli_fetch_assoc($querySelectAllMessages)) {


          $messageTable .= "<tr>";
          $messageTable .= "<td><input type='checkbox'></td>";
          $messageTable .= "<td><input type='checkbox'></td>";
          $messageTable .= "<td>{$fetchPostedMessages['postTitle']}</td>";
          $messageTable .= "<td>{$fetchPostedMessages['postMessage']}</td>";
          $messageTable .= "<td>{$fetchPostedMessages['topicMessage']}</td>";
          $messageTable .= "<td><button>View</button></td>";
          $messageTable .= "<td><button>Edit</button></td>";
          $messageTable .= "<td><button>Delete</button></td>";
          $messageTable .= "<td>{$fetchPostedMessages['datePosted']}</td>";
          $messageTable .= "</tr>";

    
    }
    $messageTable .= "</table>";

    echo $messageTable;
?>