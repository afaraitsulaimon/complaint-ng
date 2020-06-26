<?php


   define("DBSERVER", "localhost");
   define("DBNAME","complain-ng");
   define("DBUSER","root");
   define("DBPASS","");

   //connecting to the server

   $connection = mysqli_connect(DBSERVER,DBUSER,DBPASS);

   if (!$connection) {
       
    die("could not query the server" .mysqli_error($connection));
   }

   //connecting the database

   $conn_database = mysqli_select_db($connection, DBNAME);

   if (!$conn_database) {
       
    die("could not query database" .mysqli_error($connection));
    
   }

?>