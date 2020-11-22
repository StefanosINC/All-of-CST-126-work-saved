<?php

function dbconnect() {
    // Credentials for accessing the database
    
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "Friy";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

return $conn;

}

// New functions for saving session data

function saveUserId($id)
{
    session_start();
    $_SESSION["USER_ID"] = $id;
}

function getUserId()
{
    //session_start();
    return $_SESSION["USER_ID"];
}


function saveUserName($name)
{
    $_SESSION["USERNAME"] = $name;
    
}
function getUserName()
{
$_SESSION["USERNAME"];
}


?>