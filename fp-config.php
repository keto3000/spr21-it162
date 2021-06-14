<?php

/*
fp-config.php

Used to store my it162-FP configuration info
*/
//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch(THIS_PAGE) {

case 'fp-index.php':
    $title = "Taylor Renovations";
    $logo = 'fa-home';
    $pageID = 'Welcome!';
break;

case 'fp-services.php':
    $title = 'Taylor Renovations';
    $logo = 'fa-wrench';
    $pageID = 'Services';
break;

case 'fp-about.php':
    $title = 'Taylor Renovations';
    $logo = 'fa-universal-access';
    $pageID = 'About';
break;

case 'fp-contact.php':
    $title = 'Taylor Renovations';
    $logo = "fa-paper-plane-o";
    $pageID = 'Contact Us For A <br> FREE Consultation';
break;

case 'fp-testimonials.php':
    $title = 'Taylor Renovations';
    $logo = 'fa-comments';
    $pageID = 'Testimonials';
break;

default:
    $title = THIS_PAGE;
    $logo = ''; //no icon by default 
    $pageID = 'Welcome';
}


$nav1['fp-index.php'] = "HOME";
$nav1['fp-services.php'] = "SERVICES";
$nav1['fp-about.php'] = "ABOUT";
$nav1['fp-contact.php'] = "CONTACT";
$nav1['fp-testimonials.php'] = "TESTIMONIALS";


/*
here we're creating a function to genenrate links and keep the highlight on the current page

  <li><a href="fp-index.php">HOME!</a></li>
  <li><a href="fp-services.php">SERVICES</a></li>
  <li><a href="fp-about.php">ABOUT</a></li>
  <li><a href="fp-contact.php">CONTACT</a></li>
  <li><a href="fp-testimonials.php">TESTIMONIALS</a></li>
*/

function makeLinks($nav1)
{
$myReturn = '';
foreach($nav1 as $url => $text){
    if($url ==THIS_PAGE){
        $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>";
    }else{
        $myReturn .= "<li><a href=\"$url\">$text</a></li>"; 
    }    
}

return $myReturn;
}

?>
