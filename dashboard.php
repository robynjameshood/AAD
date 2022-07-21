<?php
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
    <script type="text/javascript" async src="scripts/javascript.js"></script>
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
            
        </header>

        <main>
            <div class="title">Dashboard
  
            <span class="settings-sub"><?php echo $_SESSION['username'] ?></span>
            </div>
            <div class="categories">
                <!--expiring items div-->
                <div class="category" style="cursor:pointer" onclick="document.location='expiring.php'">
                    <img src="images/expiring.svg" alt="expiring" class="icons-img">
                    Expiring
                    <ul>
                        <li></li>
                        <li>Milk: Expiring in 2 days</li>
                        <li>Chicken: Expired</li>
                        <li>Eggs: Expiring in 3 weeks</li>
                      </ul>
                </div>
                <!--fridge items div-->
                <div class="category" style="cursor:pointer" onclick="document.location='fridge-items.php'">
                    <img src="images/fridge-items.svg" alt="fride-items" class="icons-img" >
                    Fridge Items
                    <ul>
                        <li>Vegtable</li>
                        <li>Meat</li>
                        <li>Fruits</li>
                        <li>Dairy</li>
                      </ul>
                </div>
            </div>

            <div class="categories">
                <!--manage alerts div-->
                <div class="category" style="cursor:pointer" id="myBtn">
                    <img src="images/alerts.svg" alt="manage-alerts" class="icons-img">
                    Manage Alerts
                    <div class="switchIconText">
                        <div class="category-parah"> Alert if fridge is open.</div>
                        <img src="images/switch-off.svg" alt="expiring" class="switch-img">
                        
                    </div>
                    <div class="switchIconText">
                        <div class="category-parah" >Alert near expiry date.</div>
                        <img src="images/switch-on.svg" alt="expiring" class="switch-img"> 
                    </div>
                </div>
                <!--Opening and locking fridge controls-->
                <div class="category">
                    <img src="images/settings.svg" alt="fridge-controls" class="icons-img">
                    Controls
                    <ul>
                        <button class="controlbuttons" style="cursor:pointer" onclick="openFridge()">Open Fridge</button>
                        <button class="controlbuttons" style="cursor:pointer" onclick="lockFridge()">Lock Fridge</button>
                      </ul>
                </div>
            </div>
             <!-- The Modal -->
             <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close" >&times;</span>
                  <h2> Manage Your Alerts</h2>
                    <div class="switchWrap">
                        <div class="alertText">Alert when items have been delivered. </div>
                        <label class="toggleSwitch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="switchWrap">
                        <div class="alertText">Alert when the fridge is open. </div>
                        <label class="toggleSwitch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
    
                    <div class="switchWrap">
                        <div class="alertText">Alert when items have been removed. </div>
                        <label class="toggleSwitch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="switchWrap">
                        <div class="alertText">Alert close to items expiry date. </div>
                        <label class="toggleSwitch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="switchWrap">
                        <div class="alertText">Alert when inventory is running low. </div>
                        <label class="toggleSwitch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                  <button class="alertButtons">Save Changes</button>
                  
                </div>
    
                </div>  

            <div class="categories">
                <!--order report div-->
                <div class="category" style="cursor:pointer; height: auto" onclick="document.location='order-report.php'">
                    <img src="images/order-report.svg" alt="expiring" class="icons-img">
                    Order Report
                    <table class="report-table">
                        <tr>
                          <th>Items</th>
                          <th>Quantity</th>
                          <th>Status</th>
                        </tr>
                        <tr>
                          <td>Eggs</td>
                          <td>10</td>
                          <td>Ordered</td>
                        </tr>
                        <tr>
                          <td>Beef</td>
                          <td>6</td>
                          <td>Delivered</td>
                        </tr>
                        <tr>
                          <td>Milk</td>
                          <td>2</td>
                          <td>Ordered</td>
                        </tr>
                        <tr>
                          <td>Cheese</td>
                          <td>4</td>
                          <td>Delivered</td>
                        </tr>
                      </table>
                      <button class="view-full-list-btn">View Full List</button>
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