<?php


    include 'config.php';

    $name =( $_POST['name']);
    $email = $_POST['email'];

   

    
 $insert = "INSERT INTO userdata('Name','Email') VALUES('$name','$email')";
    mysqli_query($conn,$insert);

 if ($conn->query($insert) === TRUE) {
     echo "New record created successfully";
    } else {
        echo "Error: ";
    }
 



?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
<form action="login_post.php" method="post">
   Name <input type="text" name="name">
   Email <input type="text " name="email">
   <input type="submit" name="btn">


</form>
</body>
</html>