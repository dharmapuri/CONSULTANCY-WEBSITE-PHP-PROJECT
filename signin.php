<?php
session_start();
include 'connect.php';



  $email= $_POST['email'];
  $password= $_POST['password'];

  $emailsearch = "select * from registration where email='$email'";
    $query = mysqli_query($con,$emailsearch);

    if($query)
    {
      $emailpass = mysqli_fetch_assoc($query);

      $dbpass= $emailpass['password'];

      $_SESSION['username'] = $emailpass['username'];

      $passdecode = password_verify($password,$dbpass);

      if ($passdecode) {
        echo "Login Success!";
        header('location:demo.php');
      }else {
        echo "Password Incorrect";
      }

    }
    else {
         echo "Invalid Email";
      }
