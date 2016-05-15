<?php

require_once('config.php');
require_once('function.php');

$dbh = connectDatabase();
$sql = "select * from users order by id desc";
$stmt = $dbh->prepare($sql);
$stmt->execute();

$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post)
{
  $name = $post['name'];
  $created_at = $post['created_at'];
  $comment = $post['comment'];

  echo '<p>' . $name . $created_at . '<br>' . $comment .'</p>';
}

?>



