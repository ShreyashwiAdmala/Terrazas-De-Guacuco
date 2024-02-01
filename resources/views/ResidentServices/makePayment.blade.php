<!DOCTYPE html>
<html>

<head>
  <title>Make Payment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>

  <nav class="nav-bar">
    <div class="project-title-name"><a href="/">Terrazas de Guacuco</a></div>
    <div class="nav-bar-pages">
      <ul>
      <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/resident/services">Services</a></li>
                    <li><a href="http://vxl6814.uta.cloud/">Blog</a></li>
                    <li><a href="/contactus">Contact Us</a></li>
                    <li><a href="/feedback">Feedback</a></li>
                    <li><a href="/login">Logout</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <h2>Make Payment</h2>
  </div>

  <div class="makepayment-container3">
    <i class="fa fa-paypal" style="font-size:30px"></i>
    <i class="fa fa-cc-paypal" style="font-size:30px"></i>
    <i class="fa fa-cc-mastercard" style="font-size:30px"></i>
    <i class="fa fa-cc-visa" style="font-size:30px"></i>
    <i class="fa fa-credit-card" style="font-size:30px"></i>
    <i class="fa fa-google-wallet" style="font-size:30px"></i>
  </div>

  <div class="makepayment-container4">
    <form class="login-form" name="loginForm" method="post" action="services.html"
      onsubmit="return loginFormValidation()">
      <label>Enter name on card <label class="mandatory-field"></label><br />
        <input type="text" name="emailId" id="emailId" placeholder="Zayn Malik" /><br />
        <label>Enter card number<label class="mandatory-field"></label><br />
          <input type="password" name="password" id="password" placeholder="1234 5678 1234 1234" /><br />

          <label>Expiry date<label class="mandatory-field"></label>
            <label>Enter CVV<label class="mandatory-field"></label><br />
              <input type="password" name="password" id="password" maxlength="4" size="4" placeholder="05/24" />

              <input type="password" name="password" id="password" maxlength="4" size="4" placeholder="***" /><br />

              <label><button type="submit" value="Login" name="submit" id="submit">Confirm Payment</button></label>
    </form>
  </div>
  <div class="footer">
    <p class="w3-padding w3-xxlarge w3-text-white"><i class="fa fa-instagram">&nbsp;&nbsp;</i><i
        class="fa fa-facebook">&nbsp;&nbsp;</i><i class="fa fa-twitter"></i></p>
    <ul>
    <li><a href="/">HOME &nbsp; | &nbsp;</a></li>
                <li><a href="/about">ABOUT &nbsp; | &nbsp;</a></li>
                <li><a href="http://vxl6814.uta.cloud/">BLOG &nbsp; | &nbsp;</a></li>
                <li><a href="/contactus">CONTACT &nbsp; | &nbsp;</a></li>
                <li><a href="/maps">LOCATIONS</a></li>
    </ul>
    <p> Terrazas de Guacuco @ 2023. All rights reserved</p>
  </div>
</body>

</html>