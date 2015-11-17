<?php 
  
  $name = $_POST['name'];  
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  $about = $_POST['about'];
  $mailtext = $_POST['mailtext'];
  $bikeSore = $_POST['bikestore'];
  
  $to = "info@bikeincostarica.com";
  $subject = "Admin - Our Site! Comment from " . $name . "";

  $message = "UK Message from: " . $name . "\n
  Phone: " . $phone . "\n
  Email: " . $email . "\n
  City: " . $city . "\n
  UK Bike store:" . $bikeSore . "/n
  Know about us: " . $about . "\n
  Message: \n" . $mailtext . ""; 

  $result = mail($to,$subject,$message);

  if($result){
    echo '<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/resize.css">
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
    
    <title>BICR</title>
  </head>
  <body>
  <div class="menu">
        <div class="menu-wrapper">
          <a href="index.html#first" class="mobile-menu">TOUR</a>
          <a href="gallery.html" class="mobile-menu">PICTURES</a>
          <a href="index.html#prices" class="mobile-menu">BENEFITS PRICES REGISTRATION</a>
          <a href="moreinfo.html" class="mobile-menu">MORE INFORMATION</a>
        </div>
    </div>
    <header>
      <a href="index.html" class="down-arrow"><img class="home-btn" src="img/home.png" width="50px"></a>
      <nav class=".menu-desk">
        <a href="index.html#first" class="down-arrow">TOUR</a>
        <a href="gallery.html">PICTURES</a>
        <a href="index.html#prices" class="down-arrow">BENEFITS-PRICES-REGISTRATION</a>
        <a href="moreinfo.html" class="down-arrow">MOREINFORMATION</a>
      </nav>
      <div class="menu-icon"></div>
    </header>
    <section class="mail-section">
      <h1 class="title">Mail Sent!</h1>
      <a href="index.html" class="sub-title">Go to main page ></a>
    </section>
  </body>
</html>';
  } else {
    echo '<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,300" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/resize.css">
    
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/main.js"></script>
    
    <title>BICR</title>
  </head>
  <body>
  <div class="menu">
        <div class="menu-wrapper">
          <a href="index.html#first" class="mobile-menu">TOUR</a>
          <a href="gallery.html" class="mobile-menu">PICTURES</a>
          <a href="index.html#prices" class="mobile-menu">BENEFITS PRICES REGISTRATION</a>
          <a href="moreinfo.html" class="mobile-menu">MORE INFORMATION</a>
        </div>
    </div>
    <header>
      <a href="index.html" class="down-arrow"><img class="home-btn" src="img/home.png" width="50px"></a>
      <nav class=".menu-desk">
        <a href="index.html#first" class="down-arrow">TOUR</a>
        <a href="gallery.html">PICTURES</a>
        <a href="index.html#prices" class="down-arrow">BENEFITS-PRICES-REGISTRATION</a>
        <a href="moreinfo.html" class="down-arrow">MOREINFORMATION</a>
      </nav>
      <div class="menu-icon"></div>
    </header>
    <section class="mail-section">
      <h1 class="title">There is some problem.</h1>
      <a href="moreinfo.html.html" class="sub-title">Try again?</a>
    </section>
  </body>
</html>';
  }

?>