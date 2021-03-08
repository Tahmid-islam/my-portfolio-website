<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registration</title>
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
        <form class="myform" name="regform" action=" R_database.php" method="post" onsubmit="return formValidation();">

            <lebel>Name: </lebel>
            <input type="text" name="Name" />
            <br />
            <lebel>User Name: </lebel>
            <input type="text" name="UserName" />
            <br />
            <lebel>Password: </lebel>
            <input type="password" name="password" />
            <br />
            <?php
            if (isset($_SESSION["error1"])) {
                echo $_SESSION["error1"];
            }
            ?> <br>
            <lebel>Re-type Password: </lebel>
            <input type="password" name="repassword" />
            <br />

            <p>Gender:
                <input type="radio" id="male" name="gender" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>
                <input type="radio" id="other" name="gender" value="Other">
                <label for="other">Other</label>
                <br>
            </p>

            <p>Programming skills:
                <input type="radio" id="Java" name="skills" value="Java">
                <label for="Java">Java</label>
                <input type="radio" id="Android" name="skills" value="Android">
                <label for="Android">Android</label>
                <input type="radio" id="Ruby" name="skills" value="Ruby">
                <label for="Ruby">Ruby</label>
                <input type="radio" id=".Net" name="skills" value=".Net">
                <label for=".Net">.Net</label>
                <br>
            </p>

            <lebel>Contact no: </lebel>
            <input type="tel" name="ContactNo">
            <br><br>
            <lebel>Email:</lebel>
            <input type="email" name="email">
            <br>
            <lebel>University:</lebel>
            <select name="University_name">
                <option value="No University Selected">[Choose Option Below]</option>
                <option value="North South University">North South University</option>
                <option value="Brac University">Brac University</option>
                <option value="East West University">East West University</option>
            </select><br><br>
            <input class="button" type="submit" value="submit" name="regsubmit" />
        </form>
    </div>
</body>

<footer id="footer">
    <H4>
        &copy; 2020 Md. Ahanaf Tahmid Islam. All rights reserved
    </H4>
</footer>



<!-- Implement the following validation rules:
i) Name cannot be empty
ii) Username cannot be empty and cannot contain whitespace
iii) Password length is between 8-32 chars
iv) Gender is selected
v) Contact no. contains numbers only -->


<script type="text/javascript">
function formValidation() {

    var Name = document.regform.Name;
    var UserName = document.regform.UserName;
    var password = document.regform.password;
    var gender = document.regform.gender;
    var ContactNo = document.regform.ContactNo.value;
    var ContactNo2 = document.regform.ContactNo;


    if (Name.value.length <= 0) {
        alert("Name cannot be empty");
        Name.focus();
        return false;
    }

    if (/\s/.test(UserName.value) || UserName.value.length <= 0) {
        alert("Username cannot be empty and cannot contain whitespace");
        UserName.focus();
        return false;
    }

    if (password.value.length > 8 || password.value.length < 32) {
        alert("Password length is between 8-32 character");
        password.focus();
        return false;
    }

    if (gender.value.length <= 0) {
        alert("Gender is not selected");
        return false;
    }

    if (ContactNo2.value.length <= 0) {
        alert("Contact no. cannot be empty");
        ContactNo2.focus();
        return false;
    }

    if (isNaN(ContactNo)) {
        alert("Contact number contains numbers only");
        return false;
    }

    return true;
}
</script>

</html>

<?php
session_destroy();
?>