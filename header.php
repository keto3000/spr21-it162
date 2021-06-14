<?php include 'fp-config.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <meta name="robots" content="noindex,nofollow" />   
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/fp-nav.css" />
    <link rel="stylesheet" href="css/fp-styles.css" />
    <link rel="stylesheet" href="css/slider-index.css" />
    <!-- <link rel="stylesheet" href="css/sliders-services.css" /> -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/fp-form.css" />
  </head>

  <body>
<!-- START WRAPPER -->
  <main class="wrapper">
<header>
  <h1><a href="fp-index.php"><i class="logo fa <?=$logo?>"></i>Taylor Renovations</a></h1>
  <nav1>
    <ul class="topnav" id="myTopnav">
    <?=makeLinks($nav1)?>
  
  <!-- ++++++START COMMENT OUT NAV
      <li><a href="fp-index.php">Home</a></li>
      <li><a href="fp-services.php">Services</a></li>
      <li><a href="fp-about.php">About</a></li>
      <li><a href="fp-contact.php">Contact</a></li>
      <li><a href="fp-testimonials.php">Testimonials</a></li>
  END COMMENT OUT NAV +++++++-->

      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav1>
</header>

<h2 class="pageID"><?=$pageID?></h2>
<!-- END php Header here -->