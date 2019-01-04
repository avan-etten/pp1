<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Pair Program 1</h1>
<?php
include "functions.php";
$numbers = array(7,9,8,9,8,8,6);

printArray($numbers);

$largestNumber = largest($numbers);
$average = average($numbers);
$noDups = removeDups($numbers);
printArray($noDups);
echo "<p>$largestNumber</p>";
echo "<p>$average</p>";
distribution($numbers);
?>
</body>
</html>