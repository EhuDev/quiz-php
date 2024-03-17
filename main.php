<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>PHP Quiz</title>
</head>

<body>
  <div class="main-container">
    <h1>PHP Quiz</h1>
    <div class="form-container">
      <form action="submit.php" method="post" class="form">
        <div class="question">
          <p>1.What does PHP stand for?</p>
          <input type="text" name="q1" class="text" required>
        </div>
        <div class="question">
          <p>2.Which symbol is used to denote the start of a PHP code block?</p>
          <input type="text" name="q2" class="text" required>
        </div>
        <div class="question">
          <p>3.Which function is used to open a file in PHP?</p>
          <select name="q3">
            <option value="fopen">fopen</option>
            <option value="open_file">open_file</option>
            <option value="read_file">read_file</option>
            <option value="file_open">file_open</option>
          </select>
        </div>
        <div class="question">
          <p>4.Which function is used to output text in PHP?</p>
          <select name="q4">
            <option value="print()">print()</option>
            <option value="echo()">echo()</option>
            <option value="display()">display()</option>
            <option value="printf()">printf()</option>
          </select>
        </div>
        <div class="question">
          <p>5.What does the acronym SQL stand for?</p>
          <input type="radio" name="q5" value="Structured Query Language" required>Structured Query Language <br>
          <input type="radio" name="q5" value="Simple Query Language" required>Simple Query Language<br>
          <input type="radio" name="q5" value="Standard Query Language" required>Standard Query Language<br>
          <input type="radio" name="q5" value="Sequential Query Language" required>Sequential Query Language<br>
        </div>
        <div class="question">
          <p>6.What is the correct way to comment a single line in PHP?</p>
          <input type="radio" name="q6" value="// This is a comment" required>// This is a comment <br>
          <input type="radio" name="q6" value="# This is a comment" required># This is a comment<br>
          <input type="radio" name="q6" value="/* This is a comment */" required>/* This is a comment */<br>
          <input type="radio" name="q6" value="-- This is a comment --" required>-- This is a comment --<br>
        </div>
        <div class="question">
          <p>7.Which of the following is not a PHP data type?</p>
          <input type="checkbox" name="q7" value="Integer">Integer<br>
          <input type="checkbox" name="q7" value="String">String<br>
          <input type="checkbox" name="q7" value="Boolean">Boolean<br>
          <input type="checkbox" name="q7" value="Double">Double<br>
        </div>
        <div class="question">
          <p>8.How do you concatenate two strings in PHP?</p>
          <input type="checkbox" name="q8" value="Using the . operator">Using the . operator<br>
          <input type="checkbox" name="q8" value="Using the + operator">Using the + operator<br>
          <input type="checkbox" name="q8" value="Using the & operator">Using the & operator<br>
          <input type="checkbox" name="q8" value="Using the , operator">Using the , operator<br>
        </div>
        <div class="question">
          <p>9.What is the output of the PHP code: <code>echo "Hello" . " " . "World";</code>?</p>
          <textarea name="q9" rows="4" cols="50" required></textarea>
        </div>
        <div class="question">
          <p>10.What is the correct way to end a PHP statement? </p>
          <textarea name="q10" rows="4" cols="50" required></textarea>
        </div>
        <br>
        <input type="submit" value="Submit" class="button-30">
      </form>
    </div>



  </div>

</body>

</html>