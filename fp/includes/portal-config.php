<?php

/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo $_SERVER['PHP_SELF'];
//die;

switch(THIS_PAGE){

    case 'index.php':
        $title = "This is LaMonte's IT162 Title Page";
    break;

    case 'contact.php':
        $title = "LaMonte's IT162 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact LaMonte';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';

}

?>
