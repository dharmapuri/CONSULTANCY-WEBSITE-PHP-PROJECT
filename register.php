<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Registration Page</h1>
        <p>Welcome, Please Register!</p>
        <form action="submit.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <label for="phonenumber">Phone Number</label>
            <input type="text" name="phonenumber" id="phonenumber" required>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            <button type="submit" name="button">Submit</button>
        </form>

    </div>
</body>
</html>
