<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "eyecare";
    $conn = mysqli_connect($host, $user, $pass, $db);

    if(isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        $sql = "DELETE FROM appointment WHERE id = $id";

        if(mysqli_query($conn, $sql)) {
            header("Location: admin.php");
            exit();
        } else {

            echo "Error: " . mysqli_error($conn);
        }
    } else {
        header("Location: admin.php");
        exit();
    }
?>
