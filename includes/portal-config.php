<?php

//place URL & labels in the array here for navigation:
    $nav1['index.php'] = "Welcome";
    $nav1['big/index.php'] = "Big";
    $nav1['aia.php'] = "AIA";
    $nav1['flowchart.php'] = "Flowchart";
    $nav1['fp/index.php'] = "Final Project";
    $nav1['contact.php'] = "Contact LaMonte";
    
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE){

    case 'index.php':
        $title = "LaMonte's IT162 Title Page";
        $logo = "fa-home";
    break; 

    case 'big.php':
        $title = "LaMonte's IT162 Big Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Big assignment by LaMonte';
    break;

    case 'aia.php':
        $title = "LaMonte's IT162 AIA Page";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#00f"';
        $PageID = 'AIA page by LaMonte';
    break;

    case 'flowchart.php':
        $title = "LaMonte's IT162 Flowchart Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Flowchart by LaMonte';
    break;


    case 'final_project.php':
        $title = "LaMonte's IT162 Final Project Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Final Project by LaMonte';
    break;

    case 'contact.php':
        $title = "LaMonte's IT162 Contact Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact LaMonte';
    break;

    case 'contact.php':
        $title = "LaMonte's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact LaMonte';
    break;




    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
}
/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}


?>