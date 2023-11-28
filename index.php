<!DOCTYPE html>
<html>
    <head>
        <title>NoyPi Home Delicacies</title>
        <link rel="stylesheet" href="/NoyPi-Home-Delicacies/CSS.css">
        <link href='https://fonts.googleapis.com/css?family=Quando' rel='stylesheet'>
        <link rel="icon" type="image/png" href="/NoyPi-Home-Delicacies/img/logo.png">
    </head>
    <body>
        <?php
            if(!isset($_SESSION)){ 
                session_start(); 
            } 
            include("connect.php");
            include("validate.php");
        ?>
        <div class="nav" id="nav">
            <div class="navLine1">
                <div>
                    <a style="text-align: left; text-decoration: none; color: black;" href="/NoyPi-Home-Delicacies/index.php"><b>NoyPi</b> Home Delicacies</a>
                </div>
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Search" type="search" class="input">
                </div>
                <div style="flex-basis: 13vw;"></div>
                <div class="inactiveNav1" style="min-width: 10vw; text-align: right;">
                    <?php
                        if(isset($_SESSION['name'])){
                            echo "<a href=\"/NoyPi-Home-Delicacies/profile.php\" class=\"links\">" . $_SESSION['name'] . "</a>";
                        }
                        else{
                            echo "<a href=\"/NoyPi-Home-Delicacies/login.php\" class=\"links\">Account</a>";
                        }
                    ?>
                </div>
                <div class="inactiveNav1 dropdown"> 
                    <a><img src="/NoyPi-Home-Delicacies/img/defaultprofile.jpg" style="max-width: 35px; border-radius: 50%;"></a>
                    <div class="dropdown-content">
                        <?php
                            if(isset($_SESSION['name'])){
                                echo "<a href=\"profile.php\">Profile</a><br><br>";
                                echo "<a href=\"logout.php\">Logout</a>";
                            }
                            else{
                                echo "<a href=\"login.php\">Login</a><br><br>";
                                echo "<a href=\"signup.php\">Sign up</a>";
                            }
                        ?>
                    </div>
                </div>
                <div style="max-width: 100px;" class="inactiveNav1">
                    <a href="/NoyPi-Home-Delicacies/Cart.php"><img src="/NoyPi-Home-Delicacies/img/ShopCart.png" style="max-width: 30px; height: auto; display: inline; padding-right: 0;"></a>
                </div>
            </div>
            <div class="break"></div>
            <div class="linksNav">
                <a href="/NoyPi-Home-Delicacies/index.php" class="links">Home</a>
            </div>
            <div class="linksNav">
                <a href="/NoyPi-Home-Delicacies/custFeedback.php" class="links">Customer Feedback</a>
            </div>
            <div class="inactiveNav1">
                <a href="/NoyPi-Home-Delicacies/About.php" class="links">About</a>
            </div>
        </div>
        <br>
        <br>
        <div class="pageContent" id="Content">
            <div class="box">
                <br><br>
                <img src="/NoyPi-Home-Delicacies/img/Picture1.png" style="height: 290px; width: 290px; float: right; padding-top: 5px; padding-left: 15px;">
                <br>
                <h1 style="text-align: left; padding-top: 10px;">Explore Authentic Home Delicacies</h1>
                <p1 style="text-align: justify; font-size: 150%;">Pinoy Home Delicacies is a Filipino-inspired food business that specializes in offering a wide range of traditional Filipino delicacies made with authentic recipes and high-quality ingredients. We are known for our commitment to preserving and promoting the rich culinary heritage of the Philippines by providing our customers with delicious and nostalgic treats.</p1>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
            <br>
            <div class="nav2">
                <div class="activeNav">
                    <a href="index.php" class="links" style="text-shadow: black;"><b>Main Dish</b></a>
                </div>
                <div class="linksNav2">
                    <a href="Breakfast.php" class="links"><b>Breakfast</b></a>
                </div>
                <div class="linksNav2">
                    <a href="Snacks.php" class="links"><b>Snacks</b></a>   
                </div>
                <div class="linksNav2">
                    <a href="Dessert.php" class="links"><b>Desserts</b></a>
                </div>
                <div class="linksNav2">
                    <a href="Beverages.php" class="links"><b>Beverages</b></a>
                </div>
            </div>
            <br>
            <center>
                <table cellspacing="20px">
                    <tr>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD1.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD1.jpg" class="productImg1"></a>
                                <div class="desc">Crispy Pata</div>
                            </div>
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD2.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD2.jpg" class="productImg1"></a>
                                <div class="desc">Chicken Pochero</div>
                            </div>
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD3.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD3.jpg" class="productImg1"></a>
                                <div class="desc">Laing</div>
                            </div>
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD4.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD4.jpg" class="productImg1"></a>
                                <div class="desc">Sinigang na Bangus</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD5.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD5.jpg" class="productImg1"></a>
                                <div class="desc">Adobong Pusit sa Gata</div>
                            </div>
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD6.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD6.jpg" class="productImg1"></a>
                                <div class="desc">Kare-kare</div>
                            </div>
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD7.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD7.jpg" class="productImg1"></a>
                                <div class="desc">Lechong Paksiw</div>
                            </div>                    
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD8.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD8.jpg" class="productImg1"></a>
                                <div class="desc">Pork Mechado</div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD9.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD9.jpg" class="productImg1"></a>
                                <div class="desc">Sinigang na Baboy</div>
                            </div>
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD10.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD10.jpg" class="productImg1"></a>
                                <div class="desc">Ginataang Langka</div>
                            </div>
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD11.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD11.jpg" class="productImg1"></a>
                                <div class="desc">Nilagang Baka</div>
                            </div>
                        </td>
                        <td>
                            <div class="toHover">
                                <a href="/NoyPi-Home-Delicacies/main dishes/MD12.html"><img src="/NoyPi-Home-Delicacies/main dishes/MD12.jpg" class="productImg1"></a>
                                <div class="desc">Tinolang Manok</div>
                            </div>
                        </td>
                    </tr>
                </table>
            </center>
        </div>
        <footer>
            <div class="footerCont">
                <h2>Contact Us:</h2>
                <div class="contactUs">
                    <div style="display: inline;">
                        <img src="/NoyPi-Home-Delicacies/img/facebook.png" class="footicon">
                    </div>
                    <div style="display: inline;">
                        <a href="https://www.facebook.com/" class="links" style="font-size: 110%;">Facebook</a>
                    </div>
                </div>
                <br>
                <div class="contactUs">
                    <div style="display: inline;">
                        <img src="/NoyPi-Home-Delicacies/img/instagram.png" class="footicon">
                    </div>
                    <div style="display: inline;">
                        <a href="https://www.instagram.com/" class="links" style="font-size: 110%;">Instagram</a>
                    </div>
                </div>
                <br>
                <div class="contactUs">
                    <div style="display: inline;">
                        <img src="/NoyPi-Home-Delicacies/img/twitter.png" class="footicon">
                    </div>
                    <div style="display: inline;">
                        <a href="https://twitter.com/" class="links" style="font-size: 110%;">Twitter</a>
                    </div>
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d937.6688203103448!2d121.16179898049411!3d14.623075000293186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sph!4v1700639129001!5m2!1sen!2sph" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </footer>
        <script src="/NoyPi-Home-Delicacies/stickyHeader.js"></script>
    </body>
</html>