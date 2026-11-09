<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['student_name'];
    $reg = $_POST['reg_number'];
    $class = $_POST['class'];

    $file = fopen("classes.txt", "a");

    $data = $name . ", " . $reg . ", " . $class . "\n";

    fwrite($file, $data);

    fclose($file);

    echo "Student information saved successfully!";

}
?>