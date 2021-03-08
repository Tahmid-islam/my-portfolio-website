<?php
session_start();
?>

<?php
$Name = $_POST['Name'];
$User_Name = $_POST['UserName'];
$Password = $_POST['password'];
$Repassword = $_POST['repassword'];
if (isset($_POST['gender'])) {
    $Gender = $_POST['gender'];
}
if (isset($_POST['skills'])) {
    $Skills = $_POST['skills'];
}
$Contact_No = $_POST['ContactNo'];
$Email = $_POST['email'];
$University = $_POST['University_name'];

require_once('config.php');
if ($Password == $Repassword) {
    if (mysqli_query($con, "INSERT INTO user (Name, User_Name, Password, Gender, Programming_Skill, Contact_No, Email, University) VALUES ('$Name', '$User_Name', '$Password', '$Gender', '$Skills', '$Contact_No', '$Email', '$University')")) {
        header("Location:Login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
} else {
    $_SESSION["error1"] = "Password did not match";
    header("Location:Registration.php");
}
mysqli_close($con);
?>