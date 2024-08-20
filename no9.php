<?php
// Specify the name of the text file you want to read
$file_name = 'example.txt';

// Check if the file exists
if (file_exists($file_name)) {
  // Read the contents of the file
  $file_contents = file_get_contents($file_name);

  // Display the contents of the file on the web page
  echo $file_contents;
} else {
  // Display an error message if the file does not exist
  echo "The file does not exist.";
}
?>