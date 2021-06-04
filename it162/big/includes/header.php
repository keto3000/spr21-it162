<?php include 'big-config.php'?>
<!doctype html>
<html lang="en">
<head>
<title><?=$title?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="robots" content="noindex,nofollow" />
<meta charset="utf-8">
<link rel="stylesheet" href="css/nav.css" />
<link rel="stylesheet" href="css/big.css" />
<link rel="stylesheet" href="css/form.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<script src="https://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
<script src="js/script.js"></script>
   
</head>

<body>
    <!-- START Wrapper -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa <?=$logo?>"></i> Keith Scarmato's Web Dev Examples</a></h1>
  <nav id="cssmenu">
  <ul>
     <li><a href="../index.php"><span><i class="fa fa-fw fa-globe
     "></i> it162 Portal</span></a></li>
     <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> BIG</span></a></li>
     <li><a href="flexbox.php"><span><i class="fa fa-fw fa-cube"></i> Flexbox</span></a></li>
     <li><a href="galleries.php"><span><i class="fa fa-wa fa-camera-retro"></i> Galleries & Sliders</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
        <ul>
            <li><a href="map.php"><span><i class="fa fa-fw fa-map-o"></i> Google Map</span></a></li>
            <li><a href="calendar.php"><span><i class="fa fa-fw fa-calendar"></i> Google Calendar</span></a></li>
           <li><a href="youtube.php"><span><i class="fa fa-fw fa-youtube-square"></i> Google YouTube Video</span></a></li>
        </ul>
     </li>
     <li><a href="shoppingcarts.php"><span><i class="fa fa-wa fa-shopping-basket"></i> Shopping Carts</span></a></li>
     <li><a href="siteapp.php"><span><i class="fa fa-wa fa-mobile"></i> Site vs App</span></a></li>
     <li><a href="webcam.php"><span><i class="fa fa-fw fa-eye"></i> Web Cam</span></a></li>
  </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>
<h2 class="pageID"><?=$pageID?></h2>
 <!-- HEADER ENDS HERE -->