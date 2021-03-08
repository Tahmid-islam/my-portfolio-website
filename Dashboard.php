<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Detail</title>
    <link rel="stylesheet" href="Structure.css">
    <script>
    function usersearchTxt(str) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById('searchTxt').innerHTML = this.responseText;
            }
        }
        xmlhttp.open("GET", "Search_DB.php?search=" + str, true);
        xmlhttp.send();
    }
    </script>
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
                <li>if (isset($_SESSION['User'])) echo '<a href="Logout.php?logout">Logout</a>'</li>
            </ul>
        </div>
    </nav>
    <h2><?php
        if (isset($_SESSION['User'])) {
            echo ' Well Come ' . $_SESSION['User'] . '<br/>';
        } else {
            header("location:Login.php");
        }
        ?></h2>


    <h3>Contact information search here: <br></h3>
    <input id="searchBox" type="text" onkeyup="usersearchTxt(document.getElementById('searchBox').value);">
    <br><br>
    <div id="searchTxt">
        <?php
        include 'Search_DB.php';
        echo fetch('');
        ?>
    </div>

</body>
<footer id="footer">
    <H4>
        &copy; 2020 Md. Ahanaf Tahmid Islam. All rights reserved
    </H4>
</footer>

</html>