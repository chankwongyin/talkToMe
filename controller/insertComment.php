<?php
include "db.php";

$username = $_GET["username"];
$comment = $_GET["comment"];
$post_id = $_GET["post_id"];

$query = "INSERT INTO comments (comment_post_id, username, comment)
VALUES (\"{$post_id}\",\"{$username}\",\"{$comment}\");";

$result = mysqli_query($connection, $query);
