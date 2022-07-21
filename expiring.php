<?php
require("database/connection.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php?error=true");
}
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
        <div class="title">Expiring Items</div>
        <table>
            <tr>
                <th>Items</th>
                <th>Expires in (days)</th>
            </tr>

            <?php
            $sql = "SELECT * from items where expires <= 3";
            $result = $connection->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr><td>' . ucfirst($row['name']) . '</td>';
                    echo '<td>' . $row['expires'] . '</td>';
                    '</tr>';
                }
            } ?>
        </table>
    </main>


</section>

</body>
</html>