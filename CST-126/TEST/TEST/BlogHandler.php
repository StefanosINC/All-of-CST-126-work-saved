<?php
//find and access DB from our functions.php file
require_once 'functions.php';

//Save our Form Data
$BlogTitle = $_POST["BLOG_TITLE"];
$BlogContent = $_POST ["BLOG_CONTENT"];

// Credentials for accessing the database
$conn = dbconnect();

// Insert HTML Form into User table
$sql = "INSERT INTO blog5 (BLOG_TITLE, BLOG_CONTENT)
        VALUES ('" . $BlogTitle . "',  '" . $BlogContent . "')";

if ($conn->query($sql) === TRUE)
{
    echo "You posted something in blog nice<br>Great job your a scholar<br>";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
////// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//echo mysqli_get_server_info($conn);
//echo "System status: <br><br>". mysqli_stat($conn);


// Close the Connection
$conn->close();

?>