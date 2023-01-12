<?php
include('connection.php');
$username = $_POST['username'];
$password = $_POST['password'];
echo "$username";
$query = "SELECT * FROM studentdata WHERE username = $username AND password = $password";
$result = $conn->query($query);
if($result->num_raws > 0)
{
    
}
else
{
    echo "error";
}
?>