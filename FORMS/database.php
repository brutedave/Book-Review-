<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "book_review";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("SOMETHING WENT WRONG;");
}
