<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.html');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_SESSION['username']?> Dashboard</title>
</head>
<body>
    <div class="dashboard">
        <h1>Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
        <p>You have successfully logged in.</p>
        <p>Glad to have you on board</p>
        <form action="logout.php" method="POST">
            <button type="submit" name="logout">Log Out</button>
        </form>
    </div>
</body>
</html>
