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
  <link rel="stylesheet" href="front.css">
  <title>Welcome</title>
</head>

<body>
  <div class="main-container">
    <h1>TEAM BOJI</h1>
    <div class="container">
      <h2>Click Start if you ready</h2>

    </div>
    <a href="./quiz.php" class="button-30">
      Start
    </a>

  </div>


</body>

</html>