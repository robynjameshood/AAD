<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php?error=1");
}

include("database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <script type="text/javascript" src="scripts/javascript.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Smart Fridge</title>
</head>
<body>

<section>
    <section id="navsection">
        <div class="toggleBox">
            <a onclick="displayMenu()" href="#"><img class="menus" src="images/left-alignment.png" alt="menubuttons">
                <img class="close" src="images/closetoggle.png" alt="toogle close button"></a>
        </div>
        <nav class="navigation">
            <a href="index.php">Home</a>
            <a href="dashboard.php">Dashboard</a>
            <a href="order-report.php">Order Report</a>
            <a href="expiring.php">Expiring Items</a>
            <a href="fridge-items.php">Fridge Items</a>
            <a href="limited-stock.php">Limited Stock</a>
            <a href="health-safety.php">Health & Safety</a>
            <?php
                if($_SESSION["level"]== "admin"){
                    echo  '<a href="admin-page.html">Admin</a>';
                }
                 ?>
        </nav>
        <div class="logout"><a href="database/logout.php"><p>Log Out</p></a></div>

    </section>

    <main>
        <div class="title">Fridge Items</div>
        <table>
            <tr>
                <th>Items</th>
                <th>Quantity</th>
                <th>Take Item</th>
            </tr>


            <tr>
                <?php $query = "SELECT name, quantity FROM items";
                $result = $connection->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['quantity'] = $row['quantity'];
                        echo "<tr><td>" . ucfirst($_SESSION['name']) . "</td>";
                        echo "<td>" . ucfirst($_SESSION['quantity']) . "</td>";
                        echo "<td>" .
                    "<form class=\"loginform\" action=\"database/update-fridge-items.php?option=remove&removequantity=1&name=" . $_SESSION["name"] . '"  method="post">
                        <button type=\"submit\">Remove</button></form>
                </td></tr> . ';
                    }
                } ?>

        </table>
    </main>
</section>

</body>
</html>