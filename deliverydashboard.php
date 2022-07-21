<?php
session_start();
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

    <section class="body-section">
        <section id="navsection">
            <div class="toggleBox">
                <a onclick="displayMenu()" href="#"><img class="menus" src="images/left-alignment.png" alt="menubuttons">
                    <img class="close" src="images/closetoggle.png" alt="toogle close button" ></a>
             </div>
            <nav class="navigation">
                <a href="index.php">Home</a>
                <a href="deliverydashboard.php">Dashboard</a>
            </nav>
            <div class="logout"><a href="database/logout.php"><p>Log Out</p></a></div>
        </section>
            
        </header>

        <main>
            <div class="title">Dashboard
  
            <span class="settings-sub"><?php echo $_SESSION['username'] ?></span>
            </div>
            <div class="categories">
                <!--expiring items div-->
                <div class="category">
                    <img src="images/settings.svg" alt="expiring" class="icons-img">
                    Controls
                    <ul>
                        <button class="controlbuttons" style="cursor:pointer" onclick="openFridge()">Open Fridge</button>
                        <button class="controlbuttons" style="cursor:pointer" onclick="lockFridge()">Lock Fridge</button>
                      </ul>
                </div>
                <!--fridge items div-->
                <div class="category" style="cursor:pointer" onclick="document.location='delivery-checklist.php'">
                    
                    <ul>
                        <img src="images/deliveryicon.svg" alt="fride-items" >
                   <h1>Deliver Items</h1> 
                      </ul>
                </div>
            </div>
            
            <!--fridge controls message-->
            <div class="column2" id="openFridge">
                <p>The fridge is now OPEN!</p>
                <button class="controlbuttons" type="button" onclick="closeFridgeControl()">Close</button>
            </div>

            <div class="column2" id="lockFridge">
                <p>The fridge is now LOCKED!</p>
                <button class="controlbuttons" type="button" onclick="closeFridgeControl()">Close</button>
            </div>
        </main>
            
        
    </section>
    
</body>
</html>