
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylesheet.css">
    <script type="text/javascript" src="scripts/javascript.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/cf5860b398.js" crossorigin="anonymous"></script>
    <title>Smart Fridge</title>
</head>
<body>

    <section class="body-section">
        <section id="navsection">
            <div class="toggleBox">
                <a onclick="displayMenu()" href="#"><img class="menus" src="images/left-alignment.png" alt="menubuttons">
                    <img class="close" src="images/closetoggle.png" alt="toogle close button" ></a>
             </div>
            <nav class="navigation">
                <a href="index.php">Home</a>
                <a href="dashboard.php">Dashboard</a>
                <a href="order-report.php">Order Report</a>
                <a href="expiring.php">Expiring Items</a>
                <a href="fridge-items.php">Fridge Items</a>
                <a href="limited-stock.php">Limited Stock</a>
                <a href="health-safety.php">Health & Safety</a>
                <a href="admin-page.html">Admin</a>
            </nav>
            <div class="logout"><a href="database/logout.php"><p>Log Out</p></a></div>
        </section>
            
        </header>

        <main>
            
            <div class="categories">
               
                <!--manage supplier div-->
                <div class="category" style="cursor:pointer; height: auto; background-color: transparent;">
                  <p align="center"><button class="back-btn" onclick="document.location='admin-page.html'"><i class="fa-solid fa-rotate-left"></i></button>
                    Manage Suppliers</p>
                    <table class="report-table">
                      <tr>
                        <th></th>
                        <th>Quantity</th>
                        <th>Take Item</th>
                    </tr>
        
        
                    <tr>
                        <?php $query = "SELECT name, quantity FROM suppliers";
                        $result = $connection->query($query);
        
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $row['name'];
                                $row['quantity'];
                                echo "<tr><td>" . ucfirst($_SESSION['name']) . "</td>";
                                echo "<td>" . ucfirst($_SESSION['quantity']) . "</td>";
                                echo "<td>" .
                            "<form class=\"loginform\" action=\"database/update-fridge-items.php?option=remove&removequantity=1&name=" . $_SESSION["name"] . '"  method="post">
                                <button type=\"submit\">Remove</button></form>
                        </td></tr> . ';
                            }
                        } ?>
                      </table>
                      <button class="save-btn">Save</button>
                </div>
            </div>

         
        </main>
            
        
    </section>
    
</body>
</html>