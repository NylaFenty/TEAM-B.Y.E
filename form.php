<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Goddess of the Cosmos</title>
    <link rel="shortcut icon" href="img/favicon1.png" type="image/icon"> <link rel="icon" href="img/favicon1.png" type="image/icon">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='https://fonts.googleapis.com/css?family=Grand+Hotel|Skranji|Chelsea+Market|Lora:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsive.css">
    
    
    <!--JavaScript for fonts-->
    
    <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Grand+Hotel::latin', 'Skranji::latin', 'Chelsea+Market::latin', 'Lora:400,700:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  </head>
  
  
  <body>
<header class="fix-header">
      <a href="index.html" id="logo">
        <h1 class="title"> <h1 class="cross">Goddess of the Cosmos</h1>
          <a>
         <img src="img/favicon1.png" alt="logo" class="logo-2">
            <h2>Pure. Organic. Skin and Hair Creations.</h2>
       
        
        
        <img src="img/flowerrborder.png" alt="Downtown" class="header-photo"  style="background: url(city222.png) repeat-x; height: 40px, width: 1000px, align: center;" > 

      </a>
      
      <nav class="main-nav">
        <ul style="list-style-type: none;">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="info.html">Find Us</a></li>
          <li><a href="contact.html" class="selected">Contact</a></li>
          <li><a href="review.html">Reviews</a></li>
         
        </ul>
 
      </nav>
    </header>
   

    

    <div id="wrapper">

<form id="form" class="topBefore" action="form.php">
   <div class="thank-you">
     <h3>Thank you! Your form is being processed. We will get back to you as soon as possible.</h3>
      <h3><a href="index.html" class="back-to-home">Back to Home</a></h3>
  </div>
</form>
      
       <script>
            function ShowMessage() {
                var result = confirm("Your message has been sent! We will try to get back to you as soon as possible!");
                if (result) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
      
    </div>
    <div id="footer">
      <footer class="fix-4">
         <nav class="foot-nav">
        <ul style="list-style-type: none;">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="products.html">Products</a></li>
          <li><a href="info.html">Find Us</a></li>
          <li><a href="contact.html" class="selected">Contact</a></li>
          <li><a href="review.html">Reviews</a></li>
       
        </ul>
      </nav>
        <div class="contactfooter">
       <p><br>
        
        <span class="info">8820 Trinity Rd. Suite 103 Cordova, TN 38018 | 
    <a id="telephone" href="tel:1-901-497-8344">1.901.497.8344</a> | <a id="facebook" href="https://www.facebook.com/GoddessoftheCosmos">Facebook</a> | 
    <a id="email" href="mailto:amalgamationmemphis@gmail.com">Email</a> 
      </span>
          

  </p>
     
        </div>

        <p><a class="back-to-top" href="#logo">Back to Top</a></p>
        <p>&copy;  2017 Goddess of the Cosmos | Last Update: 3.5.17</p>
      </footer> 
                                                                        </div> 
                                                                          </div> 
                                                                              </div> 
  </body>
</html>


<?php

if(isset($_POST['submit'])){

$to = "nylawilliamson@ymail.com"; // this is your Email address

$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];

$email = $_POST['email'];

$subject = "Form submission";

$message = $first_name . " " . $last_name . " at " . $email . " wrote the following:" . "\n\n" . $_POST['message'];

mail($to,$subject,$message);

}

?>