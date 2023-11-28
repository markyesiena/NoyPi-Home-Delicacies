<!DOCTYPE html>
<html>
    <head>
        <title>Your Cart</title>
        <link rel="stylesheet" href="/NoyPi-Home-Delicacies/CSS.css">
        <link href='https://fonts.googleapis.com/css?family=Quando' rel='stylesheet'>
        <link rel="icon" type="image/png" href="/NoyPi-Home-Delicacies/img/logo.png">
        <style>
            h1{
                padding-top: 3vh;
            }
            h2{

                display: inline;
            }
            .box{
                padding-left: 3vw;
                padding-bottom: 3vh;
                margin-bottom: 10vh;
                margin-left: 13vw;
                margin-right: 13vw;
            }
            td{
                vertical-align: top;
            }
            .prodName{
                margin: 0;
                padding-right: 28vw;
            }
            .pnmButtons{
                border: solid black 2px;
                width: 30px;
            }
        </style>
    </head>
    <body>
        <div class="nav" id="nav">
            <div>
                <a style="text-align: left; text-decoration: none; color: black;" href="/NoyPi-Home-Delicacies/index.php"><b>NoyPi</b> Home Delicacies</a>
            </div>
            <div style="margin-left: auto;" class="linksNav">
                <a href="index.php" class="links">Home</a>
            </div>
            <div class="inactiveNav1">
                <a href="About.php" class="links">About</a>
            </div>
            <div class="inactiveNav1">
                <a href="/NoyPi-Home-Delicacies/login.php" class="links">Account</a>
            </div
            <div style="max-width: 100px;" class="inactiveNav1">
                <a href="Cart.php"><img src="/NoyPi-Home-Delicacies/img/ShopCart.png" style="max-width: 25px; height: auto; display: inline; padding-right: 0; width: 30px;"></a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="pageContent" id="Content">
            <div class="box">
            <h1>Your Cart</h1>
            <table>
                <tr>
                    <td><img src="/NoyPi-Home-Delicacies/main dishes/MD1.jpg" class="toHover" style="border: 3px solid #fff; border-radius: 10px; width: fit-content; margin-right: 20px; max-width: 150px; "></td>
                    <td><h2 class="prodName">Crispy Pata</h2></td>
                    <td>
                        <center>
                            <p1>Php 450</p1>
                            <br>
                            <button onclick="minus1()" class="pnmButtons">-</button>
                            <p1 id="checkout1">1</p1>
                            <button onclick="add1()" class="pnmButtons">+</button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td><img src="/NoyPi-Home-Delicacies/snacks/S2.jpg" class="toHover" style="border: 3px solid #fff; border-radius: 10px; width: fit-content; margin-right: 20px; max-width: 150px; "></td>
                    <td><h2 class="prodName">Dynamite</h2></td>
                    <td>
                        <center>
                            <p1>Php 65</p1>
                            <br>
                            <button onclick="minus2()" class="pnmButtons">-</button>
                            <p1 id="checkout2">1</p1>
                            <button onclick="add2()" class="pnmButtons">+</button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td><img src="/NoyPi-Home-Delicacies/dessert/D7.jpg" class="toHover" style="border: 3px solid #fff; border-radius: 10px; width: fit-content; margin-right: 20px; max-width: 150px; "></td>
                    <td><h2 class="prodName">Leche Flan</h2></td>
                    <td>
                        <center>
                            <p1>Php 130</p1>
                            <br>
                            <button onclick="minus3()" class="pnmButtons">-</button>
                            <p1 id="checkout3">1</p1>
                            <button onclick="add3()" class="pnmButtons">+</button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td><img src="/NoyPi-Home-Delicacies/beverages/B8.jpg" class="toHover" style="border: 3px solid #fff; border-radius: 10px; width: fit-content; margin-right: 20px; max-width: 150px; "></td>
                    <td><h2 class="prodName">Calamansi Juice</h2></td>
                    <td>
                        <center>
                            <p1>Php 45</p1>
                            <br>
                            <button onclick="minus4()" class="pnmButtons">-</button>
                            <p1 id="checkout4">1</p1>
                            <button onclick="add4()" class="pnmButtons">+</button>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="display: inline; text-align: center;">
                        <h2>Total: </h2><h2 id="totalQuant">4</h2>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td style="display: inline; text-align: center;">
                        <h2>Php </h2><h2 id="totalPrice">690</h2>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <div style="margin-left: 28.5vw; margin-top: 24px; background-color: white; border-radius: 30px; max-width: fit-content; padding: 12px;">
                            <button onclick="total()">Calculate Total</button>
                        </div>
                    </td>
                    <td>
                        <div style="margin-top: 20px; background-color: white; border-radius: 30px; max-width: fit-content; padding: 12px;">
                            <a href="Checkout.php" class="links">CHECKOUT</a>
                        </div>
                    </td>
                </tr>
            </table>
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
        </footer>
        <script src="/NoyPi-Home-Delicacies/addToCart.js"></script>
        <script src="/NoyPi-Home-Delicacies/stickyHeader.js"></script>
    </body>
</html>