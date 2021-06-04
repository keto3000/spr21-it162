<?php

/*
portal-config.php

Used to store all of our it162 configuration information
*/
//prevents data from being sent early
ob_start();

//place your site keys here (keys for web-students.net posted here)
$siteKey = "6LeLxbgaAAAAABwtCJH7UbrlgwpuR_IpQWwY-4RN";
$secretKey = "6LeLxbgaAAAAAPpbW54NHuukcroN6ChxeFZni_j2";

date_default_timezone_set('America/Los_Angeles'); 

#sets default date/timezone for this website & avoid php errors
$server = 'dreamhost.com';

//this is a constant that allows a page to know its own url name.
// echo basename($_SERVER['PHP_SELF']);
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

// echo THIS_PAGE;

// die;

switch(THIS_PAGE) {

    case 'index.php':
        $title = "Web Dev Examples & Resources by Keith Scarmato";
        $logo = 'fa-home';
        $pageID = 'Client Questionnaire';
    break;

    case 'flexbox.php':
        $title = "Flexbox Research";
        $logo = 'fa-cube'; 
        $pageID = 'Flexbox Research';
    break;

    case 'galleries.php':
        $title = 'Galleries & Sliders';
        $logo = 'fa-camera-retro';
        $pageID = 'Galleries & Sliders';
    break;

    case 'map.php':
        $title = 'Google Map';
        $logo = 'fa-map-o';
        $pageID = 'Google Map to Seattle Central College';
    break;
        
    case 'calendar.php':
        $title = 'Calendar';
        $logo = 'fa-calendar';
        $pageID = 'Calendar';
    break;

    case 'youtube.php':
        $title = 'Google Youtube Video';
        $logo = 'fa-youtube-square';
        $pageID = 'Google Youtube Video';
    break;

    case 'shoppingcarts.php':
        $title = 'Shopping Carts Research';
        $logo = 'fa-shopping-basket';
        $pageID = 'Shopping Carts Research';
    break;
    
    case 'siteapp.php':
        $title = 'Responsive Site vs. Mobile App';
        $logo = 'fa-mobile';
        $pageID = 'Responsive Site vs. Mobile App';
    break;
    
    case 'webcam.php':
        $title = 'Live Web Cameras';
        $logo = 'fa-eye';
        $pageID = 'Live Web Camera';
    break;

    default:
        $title = THIS_PAGE;
        $logo = ''; //no icon by default 
        $pageID = "Welcome";
    }

?>
