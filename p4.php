//updating data in the database:
//$sql holds the query:
<?php
$servername = "lh";
$username = "user";
$password = "pass";
$db = "student";
//connection being created
$con = new mysqli($servername, $username, $password, $db);
$sql = "UPDATE student SET prevsem='92' WHERE name='deep'";
if($con->query($sql)===TRUE)
{
    echo "record now updated";
}
else
{
    echo "error" . $con->error;
}
$con->close();
?>