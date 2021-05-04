<?php

/*
portal-config.php

Used to store all of our it162 configuration information
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

    case 'index.php':
        $title = 'Keith Scarmato: IT162 Portal Website';
        $logo = ' fa-globe';
        $pageID = 'Welcome';
    break;

    case 'big/index.php':
        $title = 'Keith Scarmato: Web Developer Resources & Examples';
        $logo = 'fa-institution';
        $pageID = 'My BIG project website!';
    break;

    case 'aia.php':
        $title = 'Keith Scarmato: Final Project AIA';
        $logo = 'fa-universal-access';
        $pageID = 'AIA (Audience, Issues and Approach)';
    break;

    case 'flowchart.php':
        $title = 'Keith Scarmato: Flowcharts & Layouts';
        $logo = 'fa-object-group';
        $pageID = 'Final Project Flowchart & Layouts';
    break;

    case 'fp/index.php':
        $title = 'Keith Scarmato: My Final Project website';
        $logo = 'fa-home';
        $pageID = 'Template';
    break;

    case 'contactme.php':
        $title = 'Keith Scarmato: IT162 Contact Page';
        $logo = "fa-paper-plane-o";
        $pageID = 'Contact Keith';
    break;

    default:
        $title = THIS_PAGE;
        $logo = ''; //no icon by default 
        $pageID = 'Welcome';
    }


$nav1[index.php] = 'Home';
$nav1[big/index.php] = 'BIG';
$nav1[aia.php] = 'AIA';
$nav1[flowchart.php] = 'Flowchart';
$nav1[fp/index.php] = 'Final Project';
$nav1[contactme.php] = 'Contact';


/*
here we're creating a function to genenrate links and keep the highlight on the current page

      <li><a href="index.php" class="selected">Home</a></li>
      <li><a href="big/index.php">BIG</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Keith</a></li>

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
