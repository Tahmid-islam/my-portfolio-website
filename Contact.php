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


    <div class="container">
        <form action="Csubmit.php" method="post">
            <ul class="form-style-1">
                <li><label>Full Name <span class="required">*</span></label>
                    <input type="text" name="firstname" class="field-divided" placeholder="First" required />
                    <input type="text" name="lastname" class="field-divided" placeholder="Last" required />
                </li>
                <li>
                    <label>Email <span class="required">*</span></label>
                    <input type="email" name="email" class="field-long" placeholder="Email" required />
                    <br><br>
                    <label>Your Message <span class="required">*</span></label>
                    <textarea class="field-long field-textarea" name="message" required></textarea>
                </li>
                <li>
                    <input type="submit" value="Submit" />
                </li>
            </ul>
        </form>
    </div>

</body>

<footer id="footer">
    <H4>
        &copy; 2020 Md. Ahanaf Tahmid Islam. All rights reserved
    </H4>
</footer>

</html>