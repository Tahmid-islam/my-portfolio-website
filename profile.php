<?php
//index.php  
session_start();
$connect = mysqli_connect("localhost", "root", "", "geneve");


if (isset($_POST["add_to_cart"])) {
    if (isset($_SESSION["shopping_cart"])) {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'               =>     $_GET["id"],
                'item_name'               =>     $_POST["hidden_name"],
                'item_price'          =>     $_POST["hidden_price"],
                'item_quantity'          =>     $_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("Item Already Added")</script>';
            echo '<script>window.location="list_b.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id'               =>     $_GET["id"],
            'item_name'               =>     $_POST["hidden_name"],
            'item_price'          =>     $_POST["hidden_price"],
            'item_quantity'          =>     $_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="list_b.php"</script>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>


<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #09374D;
    color: white;
}
</style>

<body>

    <head>
        <title>GENEVE STORE</title>
    </head>

    <div class="wrapper">
        <div class="heading">
            <div>

                <table>
                    <th>
                        <h1>GENEVE STORE</h1>
                    </th>
                    <th><input type="text" Item Name="search" placeholder="Search for products ,brands, shops"
                            style="width:400px;height:40px;"></th>

                </table>
            </div>
        </div>

        <div class="container">
            <h1 class="glow">Car Hut(পানির দামে গাড়ি কিনুন)</h1>

            <nav id="navbar">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="sellerinfo.php">Seller Information</a></li>
                </ul>
            </nav>

            <div class="content">



                <?php
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>

                <form method="post" action="list_b.php?action=add&id=<?php echo $row["id"]; ?>">


                    <table border="5">
                        <tr>
                            <td rowspan="9"> <img class="mySlides product_drag" src="<?php echo $row["image"]; ?>"
                                    style="width:400px;height:200px;" data-id="<?php echo $row['id']; ?>"
                                    data-name="<?php echo $row['name']; ?>" data-price="<?php echo $row['price']; ?>">
                            </td>
                            <th colspan="2">Basic Product Information</th>
                        </tr>
                        <tr>
                            <td bgcolor="#f2ffcc">Item Name</td>
                            <td><?php echo $row["name"]; ?></td>
                        </tr>
                        <tr>
                            <td bgcolor="#f2ffcc">Brand</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td bgcolor="#f2ffcc">Condition:</td>
                            <td>095498756</td>
                        </tr>
                        <tr>
                            <td bgcolor="#f2ffcc">Colour</td>
                            <td>Colour of Computer Systems & Software Engineering</td>
                        </tr>
                        <tr>
                            <td bgcolor="#f2ffcc">Description</td>
                            <td>Software Engineering</td>
                        </tr>
                        <tr>
                            <td bgcolor="#f2ffcc">Price:</td>
                            <td>RM <?php echo $row["price"]; ?></td>
                        </tr>

                        <tr>
                            <td bgcolor="#f2ffcc">quantity:</td>
                            <td> <input type="text" name="quantity" value="1" />
                            </td>
                        </tr>

                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
                        <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                        <tr>
                            <td bgcolor=""></td>
                            <td>
                                <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success"
                                    value="Add to Cart" />
                            </td>
                        </tr>

                    </table>

                </form>

                <?php
                    }
                }
                ?>











                <table id="customers">
                    <tr>
                        <th width="40%">Item Name</th>
                        <th width="10%">Quantity</th>
                        <th width="20%">Price</th>
                        <th width="15%">Total</th>
                        <th width="5%">Action</th>
                    </tr>
                    <?php
                    if (!empty($_SESSION["shopping_cart"])) {
                        $total = 0;
                        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    ?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td>RM <?php echo $values["item_price"]; ?></td>
                        <td>RM <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                        <td><a href="list_b.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span
                                    class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php
                            $total = $total + ($values["item_quantity"] * $values["item_price"]);
                        }
                        ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">RM <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td colspan="3" align="right"></td>
                        <td align="right">

                            <form action="javascript.php" method="post">
                                <input type="submit" value="Proceed to payment" />
                                <input type="hidden" name="amount" value="<?php echo number_format($total, 2); ?>">
                            </form>

                        </td>

                        <td></td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>


            </div>



            <div class="footer">
                <table>
                    <tr>
                        <th>Address</th>
                        <th>Contact</th>
                        <th>Hours</th>
                    </tr>
                    <tr>
                        <td>UMP</td>
                        <td>0123456779</td>
                        <td>24 Hours</td>
                    </tr>
                </table>
                � 2023 carHut
            </div>
        </div>
</body>



<style type="text/css">
* table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 1000px;
}


body {
    background-imBrand: url("q3.jpg");
}

.wrapper {
    width: 1000px;
    margin: 0 auto 0 auto;
}

.heading {
    height: 100%;
    background: #09374D;
    border-radius: 10px;
    font-family: Brush Script Std;
    font-size: 16pt;
    color: #FFFFFF;
    border: 5px solid black;
}

.title {
    font-family: serif;
    font-size: 20pt;
    background: #FFFFFF;
    color: #FFFFFF;
    display: block;
}

.navigation {
    width: 1000px;
    margin: 0 auto 0 auto;
    height: 100%;
    background: #09374D;
    margin-top: 5px;
    margin-bottom: 5px;
    border-radius: 10px;
    font-family: impact;
    border: 4px solid black;
}

.navigation ul li {
    display: inline;
    margin: 55px;
    font-size: 12pt;
}

.navigation a {
    color: #FFFFFF;
    text-decoration: none;
}

.navigation a:hover {
    color: black;
    text-decoration: underline;
}


.content {
    min-height: 300px;
    background: #FFFFFF;
    width: 1000px;
    margin: 0 auto 0 auto;
    margin-top: 5px;
    margin-bottom: 5px;
    border: 3px solid black;
}


.footer {
    clear: both;
    margin: 0 auto 0 auto;
    background: #09374D;
    width: 1000px;
    height: 100%;
    color: #FFFFFF;
    text-align: center;
    padding: 10px;
    border: 3px solid black;
    border-radius: 10px;
    opacity: 1;
}
</style>

</div>




</html>