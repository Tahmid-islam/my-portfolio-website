<?php
session_start();
require_once('config.php');
if (isset($_POST['login'])) {
    $query = "select * from user where User_Name='" . $_POST['uname'] . "' and Password='" . $_POST['psw'] . "'";
    $result = mysqli_query($con, $query);

    if (mysqli_fetch_assoc($result)) {
        $_SESSION['User'] = $_POST['uname'];
        header("location:Dashboard.php");
    } else {
        header("location:Login.php?Invalid= Please Enter Correct User Name and Password ");
    }
} else {
    echo 'Not Working Now Guys';
}
mysqli_close($con);