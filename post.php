<?php


require_once('config.php');
require_once('function.php');


$data = $_POST;
$name = $_POST["name"];
$comment = $_POST["comment"];

$dbh = connectDatabase();
$sql = "insert into users(name,comment,created_at)values(:name,:comment,now())";
$stmt = $dbh->prepare($sql);

$stmt->bindParam(":name",$name);
$stmt->bindParam(":comment",$comment);
$stmt->execute();