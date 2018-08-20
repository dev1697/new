//displaying database content that is listing all the students from the database
//con is the connection object:
<?php
$servername = "lh";
$username = "user";
$password = "pass";
$db = "student";
//connection being created
$con = new mysqli($servername, $username, $password, $db);
$sql = "SELECT name FROM student";
$r = $con->query($sql);
if($r->num_rows > 0)
{
 while($rr=$r->fetch_assoc())
 {
  echo "name".$rr["name"]."<br>";
 }
}
else
{
    echo "empty";
}
$con->close();
?>