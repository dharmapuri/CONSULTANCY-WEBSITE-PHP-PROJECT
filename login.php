<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Login Page</h1>
        <p>Welcome, Please Login!</p>
        <form action="signin.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" name="button">Submit</button>
          <a href="register.php"><button type="button" name="button" onclick="register.php">Register Here</button></a>
        </form>

    </div>
</body>
</html>
