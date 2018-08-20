//creating databse in php:
//$con is the connection object:
<?php
$servername = "lh";
$username = "user";
$password = "pass";
$db = "student";
//connection being created
$con = new mysqli($servername, $username, $password, $db);
$sql="CREATE DATABASE student";
if ($con->query($sql)===TRUE) {
    echo "database created";
}
else 
{
    echo "Error".$con->error;
}
$con->close();
?>