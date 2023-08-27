<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-image: url('images/yuvraj-singh-JJpnPI8Hpgo-unsplash.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center; /* Center the background image horizontally and vertically */
            background-attachment: fixed; /* Keeps the background image fixed while scrolling */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to the container */
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
  <div class="container">
    <h1>Welcome to Motorway</h1>
    <a href="logout.php" class btn btn-warning>Logout</a>
  </div>

</body>
</html>