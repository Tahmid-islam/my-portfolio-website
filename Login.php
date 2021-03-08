<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
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


    <div class="container">
        <form action="Login_database.php" method="Post">
            <ul class="form-style-1">
                <li><label>User Name <span class="required">*</span></label>
                    <input type="text" name="uname" class="field-long" placeholder="Name" required />
                </li>
                <li>
                    <label>Password <span class=" required">*</span></label>
                    <input type="password" name="psw" class="field-long" placeholder="Password" required />
                </li>
                <?php
                if (@$_GET['Invalid'] == true) {
                    echo $_GET['Invalid'];
                }
                ?>
                <li>
                    <input class="button" type="submit" name="login" value="Log In" />
                </li>
            </ul>
        </form>
        <ul class="form-style-1">
            <a href="Registration.php">
                <li>
                    <input type="submit" value="Registration" />
                </li>
            </a>
        </ul>
    </div>
</body>
<footer id="footer">
    <H4>
        &copy; 2020 Md. Ahanaf Tahmid Islam. All rights reserved
    </H4>
</footer>

</html>