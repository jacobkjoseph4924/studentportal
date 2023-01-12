<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentstyle.css">
    <title>STUDENT PORTAL</title>
</head>
<body>
<form action="" method="post">
  <div class="imgcontainer">
    <img src="download.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="logusername"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="logusername" required>

    <label for="logpassword"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="logpassword" required>

    <button type="submit" name="submit" >Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br>
    <p>
    <a href="registration.php">Registration</a></p>
  </div>

  
</form>


<?php
include("connection.php");
if(isset($_POST['submit']))
{
    if(!empty($_POST['logusername']) && !empty($_POST['logpassword']))
    {
        $logusername = $_POST['logusername'];
        $logpassword = $_POST['logpassword'];
        $sql= "SELECT * FROM studentdata where username = '$logusername' and password = '$logpassword'";
                            $result = $conn->query($sql);
                                if($result->num_rows>0)
                                {
                                        while($row = $result->fetch_assoc())
                                        {
                                            $dbusername = $row['username'];
                                            $dbpassword = $row['password'];
                                           
                                        }
                                        if($logusername == $dbusername && $logpassword == $dbpassword)
                                        {
                                           session_start();
                                            $_SESSION['sess_user'] = $logusername;
                                            $_SESSION['sess_password'] = $logpassword;
                                            header('location: profile.php');
                                        }
                                        else
                                        {
                                            echo "invalid user";
                                        }
                                } else{
                                    echo "invalid user";
                                    
                                }
    }

}
?>
</body>
</html>

