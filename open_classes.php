<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("classes.txt", "w") or die("Unable to open file!");
fwrite($myfile, "Akariza Miriam\n");
fwrite($myfile, "Akayezu Jean d'Amour\n");
fwrite($myfile, "Dukuzemariya Chantal");
fclose($myfile);
echo "Writing in file completed!";

?>

</body>
</html>