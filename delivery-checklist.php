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
                <a href="deliverydashboard.php">Dashboard</a>
                
            </nav>
            <div class="logout"><a href="database/logout.php"><p>Log Out</p></a></div>
        </section>
            
        </header>

        <main>
            <div class="categories">
               
                <!--manage supplier div-->
                <div class="category" style="cursor:pointer; height: auto; background-color: transparent;">
                  <p align="center">Checklist</p>
                    <table class="report-table">
                        <form action="database/update-fridge-items.php?name=eggs" method="post">
                        <tr>
                          <th>item</th>
                          <th>Quantity</th>
                          <th>Status</th>
                        </tr>
                        <tr>
                          <td>Eggs</td>
                          <td><select name="quantity" id="d-status">
                                  <option value=1>1</option>
                                  <option value=2>2</option>
                                  <option value=3>3</option>
                                  <option value=4>4</option>
                                  <option value=5>5</option>
                                  <option value=6>6</option>
                              </select></td>
                          <td>
                            <label for="d-status"></label>
                            <select name="status" id="d-status">
                                <option value="delivered">Delivered</option>
                                <option value="not-delivered">Not Delivered</option>
                            </select>
                            <td><button class="alertButtons">Submit</button></td>
                          </form></td>

                        </tr>
                        <tr>
                          <td>Beef</td>
                          <td><select name="quantity" id="d-status">
                                  <option value=1>1</option>
                                  <option value=2>2</option>
                                  <option value=3>3</option>
                                  <option value=4>4</option>
                                  <option value=5>5</option>
                                  <option value=6>6</option>
                              </select></td>
                          <td><form action="">
                            <label for="d-status"></label>
                            <select name="d-status" id="d-status">
                                <option value="delivered">Delivered</option>
                                <option value="not-delivered">Not Delivered</option>
                               </select>
                          </form></td>
                          <td><button class="alertButtons">Submit</button></td>
                        </tr>
                        <tr>
                          <td>Milk</td>
                          <td><select name="quantity" id="d-status">
                                  <option value=1>1</option>
                                  <option value=2>2</option>
                                  <option value=3>3</option>
                                  <option value=4>4</option>
                                  <option value=5>5</option>
                                  <option value=6>6</option>
                              </select></td>
                          <td><form action="">
                            <label for="d-status"></label>
                            <select name="d-status" id="d-status">
                                <option value="delivered">Delivered</option>
                                <option value="not-delivered">Not Delivered</option>
                               </select>
                          </form></td>
                          <td><button class="alertButtons">Submit</button></td>
                        </tr>
                        <tr>
                          <td>Celery</td>
                          <td><select name="quantity" id="d-status">
                                  <option value=1>1</option>
                                  <option value=2>2</option>
                                  <option value=3>3</option>
                                  <option value=4>4</option>
                                  <option value=5>5</option>
                                  <option value=6>6</option>
                              </select></td>
                          <td><form action="">
                            <label for="d-status"></label>
                            <select name="d-status" id="d-status">
                                <option value="delivered">Delivered</option>
                                <option value="not-delivered">Not Delivered</option>
                               </select>
                          </form></td>
                          <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Salmon</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Strawberry Jam</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Pasta</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Butter</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Baked Beans</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Cheese</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Brocolli</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Ham</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        <td>Turkey</td>
                        <td><select name="quantity" id="d-status">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                            </select></td>
                        <td><form action="">
                                <label for="d-status"></label>
                                <select name="d-status" id="d-status">
                                    <option value="delivered">Delivered</option>
                                    <option value="not-delivered">Not Delivered</option>
                                </select>
                            </form></td>
                        <td><button class="alertButtons">Submit</button></td>
                        </tr>

                        </tr>
                      </table>
                      <button class="submit-btn">Submit Checklist</button>
                </div>
            </div>

        </main>
            
        
    </section>
    
</body>
</html>









