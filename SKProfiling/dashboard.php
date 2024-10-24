<?php
// Start session
session_start();

// Check if user is logged in (you might want to implement your login check here)
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->
</head>

<body>
    <div class="dashboard">
        <h1>Welcome to Your Dashboard!</h1>
        <p>You have successfully logged in.</p>
        
        <!-- Add more dashboard content here as needed -->

        <a href="login.php" style="text-decoration: none;">Logout</a> <!-- Link to logout -->
    </div>
</body>

</html>
