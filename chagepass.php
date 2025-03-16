<?php
session_start();
$host = "localhost";
    $user = "root";
    $pass = "";
    $db = "eyecare";
    $conn = mysqli_connect($host, $user, $pass, $db);

if(isset($_POST["reset_password"])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $currentPassword = mysqli_real_escape_string($conn, $_POST['current_password']);
    $newPassword = mysqli_real_escape_string($conn, $_POST['new_password']);
    $cpass = $_POST['confirm_password'];

    if(empty($email) || empty($currentPassword) || empty($newPassword)) {
        echo "Please provide email, current password, and new password.";
        exit;
    }

    $sql = "SELECT `password` FROM `users` WHERE `username` = '$email'";
    $result = mysqli_query($conn, $sql);

    if($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['password'];

        if($currentPassword === $storedPassword) {
            $updateSql = "UPDATE `users` SET `password` = '$newPassword' WHERE `username` = '$email'";
            $updateResult = mysqli_query($conn, $updateSql);

            
        } 
       
        else
        {
            echo "<script>alert('current password does not match')</script>";
        }
        if($currentPassword === $storedPassword) {
            echo "<script>alert('Password changed successfully')</script>";    

            
        } 
        
    } else {
        echo "<script>alert('Username not found in the database.')</script>";
    }
    if($newPassword!=$cpass)
    {
    echo "<script>alert('your newpassword and confirmpassword  does not match')</script>";
     }  
    
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
 body {
            background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
        background-image: linear-gradient(to top, #a8edea 0%, #c7114b 100%);
        background-attachment: fixed;
          background-repeat: no-repeat;
        
            font-family: 'Vibur', cursive;
        /*   the main font */
            font-family: 'Abel', sans-serif;
        opacity: .95;
        /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        }
       

        .container {
            
            /* background-color: #fff; */
            background-image: linear-gradient(-225deg, #E3FDF5 50%, );
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            max-width: 80%;
            padding: 20px;
        }


form {
    display: flex;
    flex-direction: column;
}

label {
    margin-bottom: 5px;
    text-align: center;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: #0056b3;
    
}

    </style>
</head>
<body>
    <div class="container">
    <form method="post" action="chagepass.php">
    <h2 align="center">Reset Password</h2>
        <label for="email">Enter your username:</label>
        <input type="text" id="email" name="email" required><br>

        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required><br>

        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br>

        <label for="new_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required><br>
        
        <input type="submit" name="reset_password" value="Reset Password">
    </form></div>
</body>
</html>
