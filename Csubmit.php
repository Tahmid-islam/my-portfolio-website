<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
    <link rel="stylesheet" href="Structure.css">
</head>

<body>
    <header id="main-header">
        <div class="container">
            <h1 class="glow">Md. Ahanaf Tahmid Islam</h1>
        </div>
    </header>

    <nav id="navbar">
        <div class="container">
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="About me.php">About me</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <?php

    require_once('config.php');

    if (isset($_POST['firstname'])) {
        $FName = $_POST['firstname'];
    } else {
        $Fname = "Not Selected";
    }


    if (isset($_POST['lastname'])) {
        $LName = $_POST['lastname'];
    } else {
        $LName = "Not Selected";
    }


    if (isset($_POST['email'])) {
        $Email = $_POST['email'];
    } else {
        $Email = "Not Selected";
    }

    if (isset($_POST['message'])) {
        $Message = $_POST['message'];
    } else {
        $Message = "Not Selected";
    }
    if (mysqli_query($con, "INSERT INTO contact (First_Name, Last_Name, Email, Message	) VALUES ('$FName', '$LName', '$Email', '$Message')")) {
        echo "<h3>Information submitted</h3>" . "<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);


    echo 'First Name: ' . $FName . "<br>";
    echo 'Last Name: ' . $LName . "<br>";
    echo 'Email: ' . $Email  . "<br>";
    echo 'Message: ' . $Message . "<br>";

    ?>


</body>

<footer id="footer">
    <H4>
        &copy; 2020 Md. Ahanaf Tahmid Islam. All rights reserved
    </H4>
</footer>

</html>