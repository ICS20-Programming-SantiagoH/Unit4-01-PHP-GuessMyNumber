<?php

// Initial variables and constants
$result = "";
define("MAX",6);
define("MIN",1);

// get guess from user
$userGuess = $_POST['userGuess'];

// Random number generator
$generator = rand(MIN,MAX);

// If statments
if ($userGuess == $generator) {
  echo 'You have correctly guessed my number.';

}

if ($userGuess != $generator) {
  echo 'You have incorectly guessed my number, try again.';

}

?>