<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="profile.css">
  <title>PROFILE</title>
</head>
<body>

<?php
session_start();

include("connection.php");
$logusername = $_SESSION['sess_user'];
$logpassword = $_SESSION['sess_password'];
$sql= "SELECT * FROM studentdata WHERE username = '$logusername' and password = '$logpassword'";
    $result = $conn->query($sql);
        if($result->num_rows>0)
            {
               while($row = $result->fetch_assoc())
                {
                   ?>
                   <div class="container"> 
                   
                      <div class="imgcontainer" style="float: left; ">
                      
                      
                      <img src = "<?php echo  $row['photo']?>" class="avatar" alt="avatar"/>
                      </div>
                      
                      <div class="name-field" >
                      <div class="logout" style="float: right">
                        <a href="index.php">LOG OUT</a></div>
                        <h1><?php echo $row['firstname']  .$row['lastname']?></h1>
                        
                      </div>
                      
                      <div class="data-field" >  
                            <div><h4><?php echo "Date Of Birth:".$row['dob']?><h4></div>

                            <div><h4><?php echo "Email:".$row['email']?></h4></div>

                            <div><h4><?php echo "Collage:".$row['collage']?></h4></div>

                            <div><h4><?php echo "Department:".$row['department']?></h4></div>
                            <div><h4><?php echo "Admisiion Date:".$row['admdate']?></h4></div>
                            <div><h4><?php echo "Registration Number:".$row['regnum']?></h4></div>
                            <div><h4><?php echo "Adress:".$row['adress']?></h4></div>
                            
                            <br>
                            
                          
                      </div>  
                      </div><?php 
                    
                }
              }

?>
</body>
</html>