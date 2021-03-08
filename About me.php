<!DOCTYPE html>
<html>

<head>
    <title>About me</title>
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
    <h3>Father Name: Md. Mainul Islam</h3>
    <h3>Mother Name: Azmain Ara Parvin</h3>
    <h3>Present Address: Ramnagar, Sadar, Dinajpur</h3>
    <h3>Parmanent Address: Ramnagar, Sadar, Dinajpur</h3>
    <h3>Hobbies: Traveling, Sleeping, Watching movies</h3>

    <?php
  $education = [
    "SSC" => [
      "Institute" => "Dinajpur Zilla School",
      "Year" => "2014",
      "Board" => "Education Board Dinajpur",
      "GPA" => "5.00"
    ],

    "HSC" => [
      "Institute" => "Dinajpur Government College",
      "Year" => "2016",
      "Board" => "Education Board Dinajpur",
      "GPA" => "4.76"
    ],

    "B.Sc" => [
      "Institute" => "North South University",
      "Year" => " ",
      "Board" => " ",
      "GPA" => " "
    ]
  ];
  ?>

    <div id="about-form">
        <table style=" width: 100%">
            <tr>
                <th>Degree</th>
                <th>Institute</th>
                <th>Passing Year</th>
                <th>Board</th>
                <th>GPA</th>
            </tr>

            <tr>
                <?php
        foreach ($education as $key => $information) {
          echo "<tr>";
          echo "<td> $key </td>";
          foreach ($information as $information2) {
            echo "<td> $information2 </td>";
          }
          echo "</tr>";
        }
        ?>
            </tr>
        </table>
    </div>
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <h3>Facebook: <a href="https://www.facebook.com/ahanaf.tahmid.islam/" target="_blank" class="fa fa-facebook"></a>
    </h3>
    <h3>Email: tahmid231@gmail.com </h3>
</body>
<footer id="footer">
    <H4>
        &copy; 2020 Md. Ahanaf Tahmid Islam. All rights reserved
    </H4>
</footer>

</html>