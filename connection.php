<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "lastone";
$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
$sql = "SET NAMES 'utf-8'";
$result=$db->prepare($sql);
$result->execute();