//creating table in database in php:
//$con is the connection object:
<?php
$servername = "lh";
$username = "user";
$password = "pass";
$db = "student";
//connection being created
$con = new mysqli($servername, $username, $password, $db);
$sql="CREATE TABLE student(name VARCHAR(20) PRIMARY KEY,age INT(2),branch VARCHAR(3),year VARCHAR(10),sem VARCHAR(10),prevsem INT(2) NOT NULL)";
if ($con->query($sql)===TRUE) 
{
echo "student table is created successfully";
}
else
{
echo "error".$con->error;
}
$con->close();
?>