<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST') { //check if the form was posted
        //Get form data
        $first_name = $_POST['first-name'] ?? null;
        $last_name = $_POST['last-name'] ?? null;
        $email = $_POST['email'] ?? null;
        $password = $_POST['password'] ?? null;
        $confirm_password = $_POST['confirm-password'] ?? null;


        $baduser = false; //no errors


        //check if fields were entered
        if(empty($first_name)) {
            echo "Please enter your first name <br>";
            $baduser = true;
        }

        if(empty($last_name)) {
            echo "Please enter your last name <br>";
            $baduser = true;
        }

        if(empty($email)) {
            echo "Please enter your email address <br>";
            $baduser = true;
        }

        if(empty($password)) {
            echo "Please enter your password <br>";
            $baduser = true;
        }

        if(empty($confirm_password)) {
            echo "Please confirm your password <br>";
            $baduser = true;
        }

        if($password !== $confirm_password) {
            echo "Passwords do not match <br>";
            $baduser = true;
        }


        //Check if username is already in database
        $sql = "SELECT email FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if(!$baduser) { //everything passed. no errors
           // echo "User registered successfully";


        }




    }
    
    
