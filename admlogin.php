<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin LOgin</title>
    <link rel="stylesheet" href="st.css">
</head>
<body>

    <div class="container">
        <div class="form-container">
            <h2 align="center">Admin</h2>
            <form action="admlogin.php" method="POST" align="center">
                <input type="text" name="username" placeholder="Username" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                
                <br>
                <button type="submit" name="login">Login</button>
            </form>
            
        </div>
    </div>

</body>
</html>

<?php
// @include 'conect.php';
// $host ="localhost";
// $username = "root";
// $password = "";
// $dbname ="eyecare";

// $conn = mysqli_connect($host,$username,$password,$dbname);

if(isset($_POST["login"]))
{
    

    $username = $_POST['username'];
    $password = $_POST['password'];

    // $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
    // $result = mysqli_query($conn, $sql);

    if($username == "Admin@123" && $password == "123")
    {
        header("location: admin.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>
