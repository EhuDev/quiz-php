<?php
session_start();

// Reset the attempt count when the user visits front.php
$_SESSION['attempt_count'] = 2;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Welcome</title>
</head>

<body>
  <div class="main-container">
    <h1>TEAM BOJI</h1>
    <div class="container">

      <div class="login-form">
        <form action="quiz.php">
          <h2>USER LOGIN</h2>
          <input type="text" class="text" name="user" placeholder="Enter Username" required>
          <br>
          <br>
          <input type="password" class="text" name="password" placeholder="Enter Password" required>
      </div>
      <a href="quiz.php">
        <button class="button-30">Login</button>
      </a>
      </form>



    </div>
    <!-- <a href="./quiz.php" class="button-30">
      Start
    </a> -->
  </div>
</body>

</html>