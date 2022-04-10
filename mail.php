<?php
echo $_POST['name'];
$to="grandgaming2429@gmail.com";
$subject=$_POST['subject'];
$msg="Hey!".$_POST['name']." ,".$_POST['message'];
$from="From: grandgaming2429@gmail.com";

if (mail($to, $subject, $msg, $from))
{
  ?>
  <script>
    alert("Email Sent!");
  </script>
  <?php
   header('location:demo.php');
}
else{echo "not sent.";}

?>
