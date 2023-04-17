<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Random number guesser">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Random number guesser</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Random number guesser game</h1>";
echo "<h3>Please enter your Numbher in Between 1 and 6</h3>";
?>

<!-- form to get the number from the user -->
    <form action="./results.php" method="post" target="results">
      <label for="userGuess"> Please entre the Number you Guess</label>
      <input type="number" id="userGuess" placeholder="Ex. 3" step="1" min="1" max="6" name="userGuess"><br><br>
      <input type="submit" value="calculate"> </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      results
    </iframe>
  </body>
</html>