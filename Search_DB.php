<?php

function conectionStart()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "portfolio";
    $connection = mysqli_connect(
        $servername,
        $username,
        $password,
        $dbname
    );
    return $connection;
}
function conectionEnd($value)
{
    mysqli_close($value);
}
function fetch($value = '')
{
    $connection = conectionStart();
    $sql = "SELECT * FROM contact WHERE ID LIKE '%" . $value . "%' OR First_name LIKE '%" . $value . "%' OR
    Last_Name LIKE '%" . $value . "%' OR Email LIKE '%" . $value . "%' OR Message LIKE '%" . $value . "%'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Message</th>";
        echo "</tr>";
        while ($row = mysqlI_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['First_Name'] . " " . $row['Last_Name'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Message'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error :" . $sql . "<br>" . mysqli_error($connection);
    }
    conectionEnd($connection);
}

if (isset($_GET['search'])) {
    fetch($_GET['search']);
}