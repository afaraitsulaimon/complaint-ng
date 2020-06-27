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
?>