<?php


$mysqli = new mysqli('127.0.0.1', 'keeprich', 'keeprich', 'userExist') or die(mysqli_error($mysqli));

$result = $mysqli->query("SELECT * FROM checkIfExist") or die($mysqli->error);


?>