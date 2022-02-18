<?php
require 'common.php';

$score = $_GET['total_score'];
$score = mysqli_real_escape_string($connect, $score);

$insert_query = "INSERT into quiz (email,name,score) VALUES ('$_SESSION[email]','$_SESSION[username]','$score')";
$insert_query_result = mysqli_query($connect, $insert_query) or die(mysqli_error($connect));

 header("location: ./../index.php");
