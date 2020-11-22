<?php 
// // Save our Form Data
// $firstName = $_POST["FirstName"];
// $lastName = $_POST["LastName"];
// credentials for accessing the database

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "friy";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
    
}

// select all users from usser table and display them as a response
$sql = "SELECT USER_ID, FIRST_NAME, LAST_NAME FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
    // Output each user from the rows returned from the data base
    while($row =$result->fetch_assoc())
    {
        echo "ID: " . $row["USER_ID"]. " Name: " . $row["FIRST_NAME"]. " " . $row["LAST_NAME"]. "<br>";
        
    }
}
elseif($result->num_rows == 0)
{
    echo "There are no users in the database.";
    
}
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// close connection
$conn->close();
?>