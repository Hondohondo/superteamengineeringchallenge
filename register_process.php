<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') { //check if the form was posted
        //Get form data
        $first_name = $_POST['first-name'] ?? null;
        $last_name = $_POST['last-name'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $confirm_password = $_POST['confirm-password'] ?? null;


        $baduser = false; //no errors


        //check if name was entered
        if(empty($first_name)) {
            echo "Please enter your first name";
            $baduser = true;
        }

        if(empty($last_name)) {
            echo "Please enter your last name";
            $baduser = true;
        }

        if(empty($email)) {
            echo "Please enter your email address";
            $baduser = true;
        }

        if(empty($password)) {
            echo "Please enter your password";
            $baduser = true;
        }

        if(empty($confirm_password)) {
            echo "Please confirm your password";
            $baduser = true;
        }

        if($password !== $confirm_password) {
            echo "Passwords do not match";
            $baduser = true;
        }




    }
    
    
