<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php

$FirstName = $_POST["firstname"];
$MiddleName = $_POST["middlename"];
$LastName = $_POST["lastname"];

echo nl2br("Name is " . $FirstName." ".$MiddleName." \n".$LastName);
?>
<body>
</body>
</html>