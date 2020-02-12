<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
include 'navigation.php';
$output = shell_exec('python r.py');
echo "<p> The python script said </p>";
echo "<pre>$output</pre>";
?>

</body>
</html>