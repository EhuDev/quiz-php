<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>PHP Quiz Results</title>
</head>

<body>
  <div class="main-container">
    <h1>PHP Quiz Results</h1>
    <div class="result-container">
      <?php
      // Define the correct answers
      $correct_answers = array(
        "q1" => "Hypertext Preprocessor",
        "q2" => "<",
        "q3" => "fopen",
        "q4" => "echo()",
        "q5" => "Structured Query Language",
        "q6" => "// This is a comment",
        "q7" => "Double",
        "q8" => "Using the . operator",
        "q9" => "Hello World",
        "q10" => ";"
      );

      // Initialize score
      $score = 0;

      // Loop through submitted answers and check correctness
      foreach ($_POST as $question => $user_answer) {
        if (isset ($correct_answers[$question])) {
          $correct_answer = $correct_answers[$question];
          if ($user_answer == $correct_answer) {
            $score++;
          }
        }
      }

      // Display the score at the top
      echo "<h2 >Your Score: <span class='score'>$score</h2>";
      echo "<br>";
      echo "<hr>";

      // Loop through submitted answers again to display individual question results
      foreach ($_POST as $question => $user_answer) {
        if (isset ($correct_answers[$question])) {
          $correct_answer = $correct_answers[$question];
          echo "<p class='p1'><strong>Question:</strong> $question</p>";
          echo "<p class='p1'><strong>Your Answer:</strong> $user_answer</p>";
          echo "<p class='p1'><strong>Correct Answer:</strong>$correct_answer</p>";
          if ($user_answer == $correct_answer) {
            echo "<p class='p1'><strong>Result:</strong> <span class='result-correct'>Correct!</p>";
          } else {
            echo "<p class='p1'><strong>Result:</strong><span class='result-incorrect'> Wrong!</p>";
          }
          echo "<hr>";
        }
      }
      ?>

    </div>
    <a href="./index.php">
      <button class="button-31">back</button>
    </a>
  </div>
</body>

</html>