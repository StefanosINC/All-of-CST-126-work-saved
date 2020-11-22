<?php
require_once 'functions.php';
//include 'header.php';
/*
*loginHandler will not let registered user login - It checks if a duplicate username was found
*/
$username = $_POST["username"];
$password = $_POST["password"];

// Make sure posted Form Data is valid before selecting from the database
if($username == NULL || trim($username) == "")
{
    exit("Username is a required feild");
}
if($password == NULL || trim($password) == "")
{
    exit("Password is a required feild");
}

$conn = dbconnect();

// Select user from bloguser table and see if they are registered.
$sql = "SELECT USER_ID, USERNAME FROM USERS WHERE  USERNAME = '".$username."' AND PASSWORD ='".$password."'";
//echo $sql;
$result = $conn->query($sql);

//echo (#sql)
if($conn->error)
{
    echo "ERROR: " . $sql . "<br>";
}
else
    if ($result->num_rows == 1)
{
   echo "Login was successful.";
    $row = $result->fetch_assoc();
    saveUserName($row["USERNAME"]);  
    include('whoAmI.php');
    exit();
    
}
elseif($result->num_rows == 0)
{
    echo "Login failed.";
}
elseif($result->num_rows > 1)
{
    echo "Multiple users have registered.";
}
$conn->close();
//else
//{
    //echo "ERROR: " . $sql . "<br>" . $conn->error;
//}
    
//Close the connection