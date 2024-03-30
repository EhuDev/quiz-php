<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="quiz.css">
  <script src="https://cdn.lordicon.com/lordicon.js"></script>
  <title>PHP Quiz</title>

</head>

<body>

  <div class="div-container">
    <h1>PHP Quiz</h1>
    <?php
    session_start();
    if ((isset ($_GET['attempt']) && $_GET['attempt'] == 'exhausted') || (isset ($_SESSION['attempt_count']) && $_SESSION['attempt_count'] == 0)) {
      echo "<p id='sorry'>Sorry, you have exhausted all attempts.</p>";

    }
    ?>
    <div class="container">
      <div class="reset-btn">
        <input type="hidden" name="attempt" value="1">
        <?php
        if (isset ($_SESSION['attempt_count'])) {
          echo "<p>Attempts Remaining: <span id='attempt-count'>" . $_SESSION['attempt_count'] . "</span>
          <a href='./index.php'>
          <img src='./reset.gif' alt=''>
        </a></p>";
        }
        ?>
      </div>
      <form action="submit.php" method="post">
        <div class="form-carousel">
          <div class="form-slide">
            <div class="question">
              <p>1. What does PHP stand for?</p>
              <input type="text" name="q1" class="text" required>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>2. Which symbol is used to denote the start of a PHP code block?</p>
              <input type="text" name="q2" class="text" required>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>3.Which of the following is used to declare a constant in PHP?</p>
              <select name="q3" required>
                <option value="" selected disabled>Select</option>
                <option value="var()">var()</option>
                <option value="define()">define()</option>
                <option value="const()">const()</option>
                <option value="let()">let()</option>
              </select>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>4.Which function is used to output text in PHP?</p>
              <select name="q4" required>
                <option value="" selected disabled>Select</option>
                <option value="print()">print()</option>
                <option value="echo()">echo()</option>
                <option value="display()">display()</option>
                <option value="printf()">printf()</option>
              </select>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>5.Which superglobal variable is used to access form data sent via POST method in PHP?</p>
              <input type="radio" name="q5" value="$_POST" required>$_POST<br>
              <input type="radio" name="q5" value="$_GET" required>$_GET<br>
              <input type="radio" name="q5" value="$_REQUEST" required>$_REQUEST<br>
              <input type="radio" name="q5" value="$_SESSION" required>$_SESSION<br>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>6.What is the correct way to comment a single line in PHP?</p>
              <input type="radio" name="q6" value="// This is a comment" required>// This is a comment <br>
              <input type="radio" name="q6" value="# This is a comment" required># This is a comment<br>
              <input type="radio" name="q6" value="/* This is a comment */" required>/* This is a comment */<br>
              <input type="radio" name="q6" value="-- This is a comment --" required>-- This is a comment --<br>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>7.Which of the following is not a PHP data type?</p>
              <input type="checkbox" name="q7" value="Integer">Integer<br>
              <input type="checkbox" name="q7" value="String">String<br>
              <input type="checkbox" name="q7" value="Boolean">Boolean<br>
              <input type="checkbox" name="q7" value="Double">Double<br>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>8.How do you concatenate two strings in PHP?</p>
              <input type="checkbox" name="q8" value="Using the . operator">Using the . operator<br>
              <input type="checkbox" name="q8" value="Using the + operator">Using the + operator<br>
              <input type="checkbox" name="q8" value="Using the & operator">Using the & operator<br>
              <input type="checkbox" name="q8" value="Using the , operator">Using the , operator<br>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>9.What is the output of the PHP code: <code>echo "Hello" . " " . "World";</code>?</p>
              <textarea name="q9" rows="4" cols="50" required></textarea>
            </div>
          </div>
          <div class="form-slide">
            <div class="question">
              <p>10.What is the correct way to end a PHP statement? </p>
              <textarea name="q10" rows="4" cols="50" required></textarea>
            </div>
          </div>
        </div>
        <br>
        <button type="button" id="prevBtn" class="button-31" onclick="moveSlide(-1)">Previous</button>
        <button type="button" id="nextBtn" class="button-31" onclick="moveSlide(1)">Next</button>
        <input type="submit" value="Submit" class="button-30" id="submitBtn" style="display: none;">
      </form>
    </div>

  </div>
  <script>
    let slideIndex = 0; // Starting from question 1
    showSlide(slideIndex);

    function moveSlide(n) {
      showSlide(slideIndex += n);
    }

    function showSlide(n) {
      let slides = document.getElementsByClassName("form-slide");
      if (n >= slides.length) { slideIndex = 0 }
      if (n < 0) { slideIndex = slides.length - 1 }
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slides[slideIndex].style.display = "block";
      // Show/hide Next button based on slide index
      if (slideIndex < slides.length - 1) {
        document.getElementById("nextBtn").style.display = "block";
      } else {
        document.getElementById("nextBtn").style.display = "none";
      }
      // Show/hide Submit button based on slide index
      if (slideIndex === slides.length - 1) {
        document.getElementById("submitBtn").style.display = "block";
      } else {
        document.getElementById("submitBtn").style.display = "none";
      }
      // Show/hide Previous button based on slide index
      if (slideIndex === 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "block";
      }
    }

  </script>

</body>

</html>