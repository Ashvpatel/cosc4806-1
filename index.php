<?php

session_start();
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] == 1) {
    header("Location: index.php");
    exit();
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Mike</title>
  </head>
  
  <body>
  
    <h1>Assignment 1</h1>

    <p>Welcome, <?=$_SESSION['username'] ?></p>
    <p>Current date is: <?php echo date('F j, Y'); ?></p>

    <p><a href="/login.php">Click here to login</a></p>
    
  
  </body>

  <footer>
    <p><a href= "/logout.php"> Click here to logout</a></p>
  </footer>
</html>