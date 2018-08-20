//updating data in the database:
//$sql holds the query:
$sql = "UPDATE student SET prevsem='92' WHERE name='deep'";
if($con->query($sql)===TRUE)
{
    echo "record now updated";
}
else
{
    echo "error" . $con->error;
}