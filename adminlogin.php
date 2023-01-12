<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentstyle.css">
    <title>ADMIN LOGIN</title>
</head>
<body>
    <div class="container">
    <form action="" method="POST">
        <div class="header-text">
            <h1>ADMIN LOGIN</h1>
        username: <input type="text" name="adusername" id="adusername">
        password: <input type="password" name="adpassword" id="adpassword">
                  <button name="submit" >SUBMIT</button>
        </div>
    </form>
    </div>
    
</body>
</html>
<?php
include("connection.php");
if(isset($_POST['submit']))
{
        $username = $_POST['adusername'];
        $password = $_POST['adpassword'];
        $sql= "SELECT * from adminlog WHERE username = '$username' AND password = '$password'";
                            $result = $conn->query($sql);
                                if($result->num_rows > 0)
                                {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $dbusername = $row['username'];
                                            $dbpassword = $row['password'];
                                           
                                        }
                                        if($username == $dbusername && $password == $dbpassword)
                                        {
                                           session_start();
                                            header('location: admin.php');
                                        }
                                        else
                                        {
                                            echo "invalid user";
                                        }
                                } else{
                                    echo "invalid user";
                                    
                                }
    

}
?>