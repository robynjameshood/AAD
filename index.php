<?php
session_start();

$error = null;

if (isset($_GET['error'])) {
    $error = $_GET['error'];
}
else {
    $error = null;
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
            <?php
			    if(isset($_SESSION["username"])){
				    echo  '<a href="dashboard.php">Dashboard</a>';
                    echo  '<a href="order-report.php">Order Report</a>';
                    echo  '<a href="expiring.php">Expiring Items</a>';
                    echo  '<a href="fridge-items.php">Fridge Items</a>';
                    echo  '<a href="limited-stock.php">Limited Stock</a>';
                    echo  '<a href="health-safety.php">Health & Safety</a>';
							}   
                    if(isset($_SESSION["delivery"])){
                        echo  '<a href="deliverydashboard.php">Dashboard</a>'; 
                    }          
					?>
                    
        </nav>
        <?php
			if(isset($_SESSION["username"])){
				echo  '<div class="logout"><a href="database/logout.php"><p>Log Out</p></a></div>';
			}
			else{
                echo '<div class="deliveryLogin"><a href="delivery-login.html"><p>Delivery Login</p></a></div>';
				echo '<div class="chefLogin"><a href="chef-login.html"><p>Chef Login</p></a></div>';
			}
		?>
        
        
    </section>


    <main>
        <?php if ($error != null) { ?>
            <h2>Please log in</h2> <?php } ?>

        <div class="homeContainer">
            <section class="homeOne">
                <div class="pageInfo"><h1>Welcome to Smart Fridge</h1> <span style="font-size: 18px;"> Get your food supplies delivered straight to your fridge. Smart Fridge has two doors. Front door for kitchen staff & rear door for delivery couriers.</span>
                </div>
            </section>
            <section class="homeTwo">
                <div class="pageInfo"><h1>Delivery</h1> <span style="font-size: 18px;"> Delivery couriers will have to login to access the rear fridge door to make the delivery.</span>
                </div>
            </section>
            <section class="homeThree">
                <div class="pageInfo"><h1> Kitchen Staff</h1> <span style="font-size: 18px;">The Kithen staff will have to login to access and manage fridge items. </span>
                </div>
            </section>

        </div>

    </main>


</section>

</body>
</html>