
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<h1>successfully registered</h1>-->
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "SPD";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// prepare sql and bind parameters
$stmt = $conn->prepare("INSERT INTO studentdata (firstname, lastname, dob, email, collage, username, password, adress, photo) 
                        VALUES (:firstname, :lastname, :dob, :email, :collage, :username, :password, :adress, :photo)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':dob', $dob);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':collage', $collage);
// $stmt->bindParam(':department',$department);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':adress', $adress);
$stmt->bindParam(':photo', $photo);

// insert a row
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob= $_POST["dob"];
$email = $_POST["email"];
$collage = $_POST["collage"];
// $department = $_POST["department"];
$username = $_POST["username"];
$password = $_POST["password"];
$adress = $_POST["adress"];
$photo = $_POST["photo"];
//$photo = $_FILES['photo']['name'];
$stmt->execute();

?>