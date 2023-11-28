<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/NoyPi-Home-Delicacies/CSS.css">
    <link href='https://fonts.googleapis.com/css?family=Quando' rel='stylesheet'>
    <link rel="icon" type="image/png" href="/NoyPi-Home-Delicacies/img/logo.png">
    <style>
      body{
        font-family: 'Quando';
        font-size: 17px;
        padding: 0px;
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
        background-color: skyblue;
        padding: 5px 20px 15px 20px;
        border: 1px solid black;
        border-radius: 3px;
        margin-bottom: 10vh;
        margin-left: 13vw;
        margin-right: 13vw;
      }

      input[type=text] {
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
        background-color: white;
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
        background-color: white;
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
    </style>
  </head>
  <body>
    <div class="nav" id="nav">
      <div>
          <a style="text-align: left; text-decoration: none; color: black;" href="/NoyPi-Home-Delicacies/index.php"><b>NoyPi</b> Home Delicacies</a>
      </div>
      <div style="margin-left: auto;" class="inactiveNav1">
          <a href="index.php" class="links">Home</a>
      </div>
      <div class="inactiveNav1">
          <a href="About.php" class="links">About</a>
      </div>
      <div class="inactiveNav1">
          <a href="/NoyPi-Home-Delicacies/login.php" class="links">Account</a>
      </div
      <div style="max-width: 100px;" class="inactiveNav1">
          <a href="Cart.php"><img src="/NoyPi-Home-Delicacies/img/ShopCart.png" style="max-width: 25px; height: auto; display: inline; padding-right: 0;"></a>
      </div>
    </div>
    <br>
    <center>
      <h2 style="margin-bottom: 5px;">Order Checkout Form</h2>
      <p>Hello! Please fill-up the form below</p>
    </center>
    <div class="row">
      <div class="col-75">
        <div class="container">
          <form action="/action_page.php" method="$_POST">
            <div class="row">
              <div class="col-50">
                <h3>Billing Address</h3>
                <label for="fname"><i class="fa fa-user"></i>Full Name</label>
                <input type="text" id="fname" name="firstname">
                <label for="text"><i class="fa fa-envelope"></i>Contact Number</label>
                <input type="text" id="contact" name="contact">
                <label for="adr"><i class="fa fa-address-card-o"></i>Address</label>
                <input type="text" id="adr" name="address">
                <label for="city"><i class="fa fa-institution"></i> City</label>
                <input type="text" id="city" name="city">

                <div class="row">
                  <div class="col-50">
                    <label for="state">Barangay</label>
                    <input type="text" id="brgy" name="Barangay">
                  </div>
                  <div class="col-50">
                    <label for="zip">Zip Code</label>
                    <input type="text" id="zip" name="zip">
                  </div>
                </div>
              </div>

              <div class="col-50">
                <h3>Payment Methods</h3>
                <div class="icon-container" style="text-align: center;">
                  <img style="margin-right: 10px;" src="/NoyPi-Home-Delicacies/checkout/gcash.png">
                  <img style="margin-right: 10px;" src="/NoyPi-Home-Delicacies/checkout/maya.png">
                  <img style="margin-right: 10px;" src="/NoyPi-Home-Delicacies/checkout/grab.png">
                  <img style="margin-right: 10px; height: auto; width: 150px;" src="/NoyPi-Home-Delicacies/checkout/visa.png"><br>
                  <img style="margin-right: 10px;" src="/NoyPi-Home-Delicacies/checkout/bank.png">
                </div>
                <label for="cname">Name on Card</label>
                <input type="text" id="cname" name="cardname">
                <label for="ccnum">Credit card number</label>
                <input type="text" id="ccnum" name="cardnumber">
                <label for="expmonth">Exp Month</label>
                <input type="text" id="expmonth" name="expmonth">
                <div class="row">
                  <div class="col-50">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear">
                  </div>
                  <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv">
                  </div>
                </div>
              </div>
            </div>
            <label>
              <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
            </label>
            <input type="submit" value="Continue to checkout" class="btn">
          </form>
        </div>
      </div>
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
