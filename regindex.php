
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="regstyle.css">
<title>STUDENT PORTAL</title>
</head>
<body>

<h2>SUCCESSFULLY REGISTERED</h2>


<button class="open-button" onclick="openForm()">LOG IN</button>

<div class="form-popup" id="myForm">
  <form action="" class="form-container" method="POST">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="logusername" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="logpassword" required>

    <button type="submit" class="btn" name="submit">Login</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
</body>
</html>
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
