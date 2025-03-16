<?php

$con = mysqli_connect('localhost', 'root', '', "eyecare");
$id = $_GET['id'];
$sql = "UPDATE `appointment` SET `status` = 'done' WHERE `appointment`.`id` = '$id'";
$result = mysqli_query($con, $sql);
if ($result) {
    header("location:admin.php");
}
?>