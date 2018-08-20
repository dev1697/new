//php database connectivity
<?php
$servername = "lh";
$username = "user";
$password = "pass";
$db = "student";
//connection being created
$con = new mysqli($servername, $username, $password, $db);

//connection being checked
if ($conn->connect_error)
{
die("failure " . $conn->connect_error);
} 
echo "successful";
$sql = "INSERT INTO student(name, age, branch, year, sem, psem)VALUES($name,$age,$branch,$year,$sem,$prevsem)";
if ($con->query($sql) === TRUE) {
    echo "New record";
} else {
    echo "Error: ". $sql. $con->error;
}

$con->close();
?>