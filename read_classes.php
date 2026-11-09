<?php

// Open the file in read mode
$myfile = fopen("classes.txt", "r") or die("Unable to open file!");

// Read the entire file
$content = fread($myfile, filesize("classes.txt"));

// Display the contents in the browser
echo nl2br($content);

// Close the file
fclose($myfile);

?>