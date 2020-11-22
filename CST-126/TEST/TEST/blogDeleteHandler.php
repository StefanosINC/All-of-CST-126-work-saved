<?php
include 'header.php';
require_once 'functions.php';

$ID = $_GET["USER_ID"];

// Create connection
$conn = dbConnect();


$sql = "DELETE FROM blog5
          WHERE USER_ID = $ID";
//check for something other than true or false check number of rows
if ($conn->query($sql) === TRUE)
{
    $title = "Post deleted!";
    $message = "Blog was successfully deleted!";
    include ('blogResponder.php');
}

else
{
    $title = "Submission Error";
    $message = "Submission Error " . $sql . "<br>" . $conn->error;
    include ('blogResponder.php');
    // echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();