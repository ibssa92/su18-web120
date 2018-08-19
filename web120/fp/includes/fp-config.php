<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){

    case 'index.php':
        $title = "Essam's Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'bio.php':
        $title = "Essam's Biography page";
        $logo = 'fa-home';
        $PageID = 'Biography';
    break;
        
    case 'videography.php':
        $title = "Essam's Videography page";
        $logo = 'fa-home';
        $PageID = 'Videography';
    break;
        
    case 'contact.php':
        $title = "Contact Essam";
        $logo = 'fa-home';
        $PageID = 'Contact Essam';
    break;

    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}



/* 
here we're creating a function to generate
links and keep the highlight on the current page

<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Sara</a></li>


*/



?>


