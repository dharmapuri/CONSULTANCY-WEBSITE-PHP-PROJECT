<?php
$server = "localhost";
$user="root";
$password="";
$db ="signup";

$con = mysqli_connect($server,$user,$password,$db);

if($con)
{
  ?>
  <script>
    alert("Connection Success!");
  </script>
  <?php
}else{
  ?>
  <script>
    alert("Failure!");
  </script>
  <?php
}
 ?>
