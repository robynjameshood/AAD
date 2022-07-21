<?php
include("database/connection.php");
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php?error=0");
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
    <script src="https://kit.fontawesome.com/cf5860b398.js" crossorigin="anonymous"></script>
    <title>Smart Fridge</title>
</head>
<body>

    <section>
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
                <a href="health-safety.html">Health & Safety</a>
                <?php
                if($_SESSION["level"]== "admin"){
                    echo  '<a href="admin-page.html">Admin</a>';
                }
                 ?>
            </nav>
            <div class="logout"><a href="database/logout.php"><p>Log Out</p></a></div>
        </section>


        <main>
            <div class="column">
                <form class="loginform" action=".php" method="post" >
                     <div class="form-contents">   
                        <h1 style="text-align: center">Health Safety Report</h1>
                        <p style="text-align: center;">Report anything that might pose as health & safety risk.</p>
                        <hr>
                       
                        <label for=" "> Date:</label>
                        <input class="dateInput" type="date" placeholder="Select Date" name="date" required>
                        
                        <label for="itemConditon">Fridge Condition:</label>
                        <select id="hsCondition" name="hsCondition">
                            <option value="volvo">Expired</option>
                            <option value="saab">Dirty</option>
                            <option value="fiat">Leaking</option>
                          </select>
                        <label for=" ">Additonal comments:</label>
                        <textarea name="additonalComment" id="additonalCommentBox" class="commentBox" cols="30" rows="10"></textarea>
                        <div class="submit">
                            <button type="submit" class="loginButton">Submit Report</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
            
        
    </section>
    
</body>
</html>