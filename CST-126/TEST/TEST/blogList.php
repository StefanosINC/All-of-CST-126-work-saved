<?php
include 'header.php';
require_once 'functions.php';
require_once 'utility.php';

/*
Date: 4/8/2020
blogList will be accessible to the user after the user has successfully logged in.
blogList will perform a select query on the database to report back all the successfully submitted blogs.
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Stefanos Blog </title>

    <link rel="stylesheet" type="text/css" href="BlogStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">


</head>
<body>

<header>
    <h1>test</h1>
<?php require_once 'navBar.php';
navBarPost(2);
?>
</header>


<form action="blogListSearch.php" method="POST">
    <table style = "text-align:center; margin-right: auto; margin-left:auto">
        <tr><br></tr>
        <tr>
            <td>Search For: </td><td><input name="searchPattern" type="text"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input name="Login" value="Search" type="Submit"/> </td>
        </tr>
    </table>

</form>


<div class = "error"><?=$Error?></div>

<div class="loginBox">
<?php


// Create connection
$conn = dbConnect();

//Get all users and if specified display all the users

        $displayMode = true;                // Variable to control where Users are displayed or not
        $Friy = USERS();             // Get all Users from the database
        $Friy = blog5();             // Get all Users from the database
        if($displayMode)                    // If display mode is true then display all users
        {
            include('_displayAllBlogs.php');   // Page Fragment to display all Users in a HTML Table
        }


if($conn->error)
{
    $title = "Database Error";
    $Error = "Database Error: " . $sql . "<br>" . $conn->error;
    include('blogList.php');
    exit();
}

?>
</div>

</body>
</html>
