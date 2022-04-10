<?php

include 'connect.php';

if(isset($_POST['name']))
{
  $username= $_POST['name'];
  $email= $_POST['email'];
  $phonenumber=$_POST['phonenumber'];
  $password= $_POST['password'];

  $pass= password_hash($password,PASSWORD_BCRYPT);

  $emailquery = "select * from registration where email='$email'";
  $query = mysqli_query($con,$emailquery);

  $emailcount = mysqli_num_rows($query);

     $insertquery = "INSERT INTO `registration`(`username`, `email`, `phonenumber`, `password`)
     VALUES ('$username','$email','$phonenumber','$pass')";

     $iquery= mysqli_query($con,$insertquery);
     if($iquery)
     {
       ?>
       <script>
         alert("Insert Success!");
       </script>
       <?php
       header('location:login.php');
     }else{
       ?>
       <script>
         alert("Insertion Failure!");
       </script>
       <?php
     //}
  }
}

?>
