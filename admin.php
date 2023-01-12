<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="studentstyle.css">
    <title>ADMIN</title>
</head>
<body>
    <div class="header-text">
        <h2>ADMIN</h2>
        <div class="logout" style="float: right;">
                        <a href="adminlogout.php">LOG OUT</a></div> <br>
                        
                <table border="0px" style="width: 600px line-height: 40px;">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>First Name </th>
                        <th>Last Name </th>
                        <th>Date of Birth </th>
                        <th>Email </th>
                        <th>Collage </th>
                        <th>Department </th>
                        <th>Admission Date</th>
                        <th>Register Number </th>
                        <th>User Name </th>
                        <th>Password </th>
                        <th>Adress </th>
                        <th>Profile Picture</th>
                    </tr>   
                    </thead>
                    <tbody>
                
                        <?php
                        session_start();
                            include('connection.php');
                            
                            $sql= "SELECT * FROM studentdata";
                            $result = $conn->query($sql);
                                if($result->num_rows>0)
                                    {
                                        while($row = $result->fetch_assoc())
                                        {
                                            
                                                ?>      
                                            <tr>
                                                <td><?php echo  $row['id'] ; ?></td>
                                                <td> <?php echo  $row['firstname'] ; ?></td>
                                                <td><?php echo  $row['lastname']; ?> </td>
                                                <td><?php echo  $row['dob']; ?> </td>
                                                <td><?php echo  $row['email']; ?> </td>
                                                <td><?php echo  $row['collage']; ?> </td>
                                                <td><?php echo  $row['department']; ?> </td>
                                                <td><?php echo  $row['admdate']; ?> </td>
                                                <td><?php echo  $row['regnum']; ?> </td>
                                                <td><?php echo  $row['username']; ?> </td>
                                                <td><?php echo  $row['password']; ?> </td>
                                                <td><?php echo  $row['adress']; ?> </td>
                                                <td><img src = "<?php echo  $row['photo']?>" class="avatar" alt="avatar"/></td>
                                                <td><a href="profile.php">view</a></td>
                                            </tr>
                                            <?php 
                                           $id = $row['id'];
                                           
                                            
                                         }
                                         $_SESSION['sess_id'] = $id;
                                         
                                             ?>
                    </tbody>
                </table>
            
    </div>     
     
            <?php
           
        }
?>
</body>
</html>
