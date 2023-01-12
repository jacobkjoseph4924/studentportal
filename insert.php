<?php

include("connection.php");
if(isset($_POST['submit']))
{
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$collage = $_POST['collage'];
$department = $_POST['department'];
$admdate = $_POST['admdate'];
$regnum = $_POST['regnum'];
$username = $_POST['username'];
$password = $_POST['password'];
$adress = $_POST['adress'];
$photo = $_POST['photo'];

$sql = "INSERT INTO studentdata (firstname, lastname, dob, email, collage, department, admdate, regnum, username, password, adress, photo) values ('$firstname', '$lastname', '$dob', '$email', '$collage', '$department', '$admdate', '$regnum', '$username', '$password', '$adress', '$photo')";

}/*$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "SPD";




$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO test (firstname, lastname, email) 
                        VALUES (:firstname, :lastname, :email)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
//$stmt->bindParam(':collage', $collage);

// insert a row
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
//$collage = $_POST["collage"];
$stmt->execute();*/
?>