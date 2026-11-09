<?php

// Create a file
$myfile = fopen("students.txt", "w") or die("Unable to create file!");

// Close the file
fclose($myfile);

echo "File created successfully!";

?>