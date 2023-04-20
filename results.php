<?php

// Determines what movie the user is allowed to watch based on their age

// Gets the user's age 
$age = $_POST["user-age"];

// Tells user to enter a positive age
if ($age < 0) {
  echo "Enter a valid age!";
}

// Tells user that they can watch R rated movies
else if ($age > 17) {
  echo "You can watch R rated movies by yourself.";
}

// Tells user that they can watch PG-13 movies
else if ($age > 12) {
  echo "You can watch PG-13 rated movies by yourself.";
}

// Tells user that they can watch PG or G rated movies
else if ($age >= 5 ) {
  echo "You can watch PG or G rated movies by yourself.";
}

// Tells user that they cannot watch a movie alone
else if ($age < 5) {
  echo "You should not watch a movie alone.";
}

// Tells user to enter their age instead of leaving it blank
else {
  echo "Enter an age!";
}

?>
