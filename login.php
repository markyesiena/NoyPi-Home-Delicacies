<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/NoyPi-Home-Delicacies/CSS.css">
    <link href='https://fonts.googleapis.com/css?family=Quando' rel='stylesheet'>
    <link rel="icon" type="image/png" href="/Final%20Project%20WebDev111/img/logo.png">
    <style>

      body{
        font-family: 'Quando';
        font-size: 17px;
        padding: 0px;
        margin: 0;
      }

      * {
        box-sizing: border-box;
      }

      .row {
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
        margin: 0 -16px;
      }

      .col-25 {
        -ms-flex: 25%; /* IE10 */
        flex: 25%;
      }

      .col-50 {
        -ms-flex: 50%; /* IE10 */
        flex: 50%;
      }

      .col-75 {
        -ms-flex: 75%; /* IE10 */
        flex: 75%;
      }

      .col-25,
      .col-50,
      .col-75 {
        padding: 0 16px;
      }

      .container {
        background-color: white;
        padding: 5px 20px 15px 20px;
        border: none;
        border-radius: 10px;
        margin-bottom: 10vh;
        margin-left: 13vw;
        margin-right: 13vw;
        padding-inline: 50px;
        width: 30vw;
        padding-top: 50px;
        padding-bottom: 100px;
      }

      input[type=text] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid black;
        border-radius: 3px;
      }
      input[type=password] {
        width: 100%;
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid black;
        border-radius: 3px;
      }
      label {
        margin-bottom: 10px;
        display: block;
      }

      .icon-container {
        margin-bottom: 20px;
        padding: 7px 0;
        height: auto;
      }
      .btn {
        background-color: skyblue;
        color: black;
        padding: 12px;
        margin: 10px 0;
        border: none;
        width: 100%;
        border-radius: 3px;
        cursor: pointer;
        font-size: 17px;
      }
      .btn:hover {
        background-color: skyblue;
      }
      a {
        color: #2196F3;
      }

      hr {
        border: 1px solid lightgrey;
      }

      span.price {
        float: right;
        color: grey;
      }

      /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
      @media (max-width: 800px) {
        .row {
          flex-direction: column-reverse;
        }
        .col-25 {
          margin-bottom: 20px;
        }
      }
      .whenSticky{
        padding-top: 10vh;
      }
    </style>
  </head>
  <body>
    <?php include("validate.php"); ?>
  <div class="nav" id="nav">
            <div class="navLine1">
                <div>
                    <a style="text-align: left; text-decoration: none; color: black;" href="/NoyPi-Home-Delicacies/index.php"><b>NoyPi</b> Home Delicacies</a>
                </div>
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Search" type="search" class="input">
                </div>
                <div style="flex-basis: 25vw;"></div>
                <div class="inactiveNav1">
                    <a href="/NoyPi-Home-Delicacies/login.php" class="links">Account</a>
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
    <div class="pageContent" id="Content"></div>
    <center>
      <div class="logbox">
        <div class="container">
          <form action="validate.php" method="post">
                <h2 style="margin-bottom: 10px; text-align: center;">User Login</h2>
                <br>
                <label for="uname"><i class="fa fa-user"></i>Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password"><i class="fa fa-institution"></i> Password</label>
                <input type="password" id="password" name="password" required>
                <?php
                  if($_SESSION['tries'] > 0){
                    if($_SESSION['wrongpass'] == 1){
                      echo "<h2>\"Invalid username or password!\"</h2>";
                    }
                  }
                ?>
              <input type="checkbox" checked="checked" name="rememberme"> Remember me
            </label>
            <button type="submit" value="Login" class="btn">Login</button>
          </form>
    </center>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <div class="footerCont">
            <h1 style="max-width: 30vw;">SUBSCRIBE TO OUR NEWSLETTER</h1>
            <input type="email" placeholder="Email" id="email" class="inputField">
            <button type="submit"><img src="/NoyPi-Home-Delicacies/img/arrow.png" class="toHover" style="height: auto; width: 30px;"></button>
        </div>
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
        <div class="footerCont" style="width: 35vw;">
            <h2>Download Our App</h2>
            <p1>Download Available on Android and iOS!</p1>
            <br><br>
            <a href="https://play.google.com/store/apps?hl=en&gl=US"><img src="/NoyPi-Home-Delicacies/img/GooglePlay.png" class="appImg"></a>
            <a href="https://www.apple.com/ph/app-store/"><img src="/NoyPi-Home-Delicacies/img/AppleAppStore.png" class="appImg"></a>
        </div>
    </footer>
        <script src="/NoyPi-Home-Delicacies/stickyHeader.js"></script>
    </body>
</html>
