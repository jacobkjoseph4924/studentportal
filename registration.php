<html>
<head>
    <link rel="stylesheet" href="studentstyle.css">
    <title>Registration</title>
</head>
<body>
    <div class="container">

<form action="insertq.php" method="post">
    <div class="header-text">
        <h1>REGISTRAION</h1></div>
        
                First Name: <input type="text" name="firstname" required><br>
                Last Name: <input type="text" name="lastname" required><br>
                Date Of Birth: <br><input type="date" name="dob" required><br> <br>
                E-mail: <input type="email" name="email" required><br> <br>
                Phone: <br><input type="tel" name="phone" id="phone" pattern="[0-9]{10}" required 
                style="width :100%; padding: 12px 20px;"><br><br>
                <!--Collage:<input type="text" name="collage" required><br>-->
                Collage:<br> <select name="collage" id="collage" style="width :100%; padding: 12px 20px;" required>
                                    <option value="">----SELECT----</option>
                                            <option value="a">a</option>
                                            <option value="b">b</option>
                                            <option value="c">c</option>
                                            <option value="d">d</option>
                                </select>
                        <br><br>
                <input type="radio" name="rad" id="ug" value="ug">
                <label for="ug">UG</label>
                <input type="radio" name="rad" id="pg" value="pg">
                <label for="pg">PG</label><br> <br>
                <!-- Department: <input type="text" name="department" required><br> -->
                <!-- Programme:<br> <select name="program" id="program" style="width :100%; padding: 12px 20px;" required>
                                    <option value="">----SELECT----</option>
                                            <option value="pa">a</option>
                                            <option value="pb">b</option>
                                            <option value="pc">c</option>
                                            <option value="pd">d</option>
                                </select> -->
                            

                Course:<br> <select name="course" id="course" style="width :100%; padding: 12px 20px;" required>
                                <option value="">----SELECT----</option>
                                         <option value="ca">a</option>
                                         <option value="cb">b</option>
                                         <option value="cc">c</option>
                                         <option value="cd">d</option>
                                </select>
                                <br><br>
                Admission Date: <br><input type="date" name="admdate" required><br> <br>
                <!-- Register Number: <input type="text" name="regnum" > <br> -->
                User Name: <input type="text" name="username" required><br><br>
                Password: <input type="password" value="" name="password" id="pswrd" required><br>
                <input type="checkbox" onclick="myFunction()">show Password <br> <br>
                Confirm Password: <input type="password"  name="confirmpassword" id="cnfpswrd"><br><br>
                
                Adress: <textarea name="adress" id="adress" cols="30" rows="2" required></textarea><br><br>
                Upload Profile Picture: <input type="file" name="photo" ><br> <br>
                <button type="submit">SUBMIT</button>
                <p><a href="index.php">Cancel</a></p>
        
    </div>  
    
   <script>
        function myFunction() 
        {
            var x = document.getElementById("pswrd");
            if (x.type === "password") 
                {
                    x.type = "text";
                } 
                else 
                    {
                        x.type = "password";
                    }
        }
        function popFunction()
        {
            alert("success");
            
        }
    
   </script> 
   
 <?php  
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "SPD";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("INSERT INTO studentdata (firstname, lastname, dob, email, collage, admdate, regnum, username, password, adress, photo) 
                        VALUES (:firstname, :lastname, :dob, :email, :collage, :admdate, :regnum, :username, :password, :adress, :photo)");
                    
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':dob',$dob);
$stmt->bindParam(':email', $email);
// $stmt->bindParam(':phone', $phone);
$stmt->bindParam(':collage', $collage);
// $stmt->bindParam(':rad', $rad);

// $stmt->bindParam(':course', $course);
$stmt->bindParam(':admdate' , $admdate);
$stmt->bindParam(':regnum' , $regnum);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':adress', $adress);
$stmt->bindParam(':photo', $photo);


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$dob = $_POST["dob"];
$email = $_POST["email"];
// $phone = $_POST["phone"];
$collage = $_POST["collage"];
// $rad = $_POST["rad"];
// $course = $_POST["course"];
$admdate = $_POST["admdate"];
$regnum = $_POST["regnum"];
$username = $_POST["username"];
$password = $_POST["password"];
$adress = $_POST["adress"];
$photo = $_POST["photo"];
$stmt->execute();
header('location: regindex.php');
?>
