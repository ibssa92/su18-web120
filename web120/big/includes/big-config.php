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
        $title = "Ibssa's WEB120 Title Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'flexbox.php':
        $title = "Ibssa's WEB120 Flexbox Research";
        $logo = '';
        $PageID = 'Flexbox Research';
    break;
        
    case 'siteapp.php':
        $title = "Ibssa's WEB120 Responsive vs Mobile App Research";
        $logo = '';
        $PageID = 'Responsive Research';
    break;
        
    case 'map.php':
        $title = "Ibssa's WEB120 Google Map";
        $logo = '';
        $PageID = 'Google Map';
    break;
    
    case 'calendar.php':
        $title = "Ibssa's WEB120 Google Calendar";
        $logo = '';
        $PageID = 'Google Calendar';
    break;
        
    case 'youtube.php':
        $title = "Ibssa's WEB120 WordPress Intro Video";
        $logo = '';
        $PageID = 'WordPress Intro Video';
    break;
        
    case 'webcam.php':
        $title = "Ibssa's WEB120 Two Examples of Web Cams";
        $logo = '';
        $PageID = 'Two examples of web cams';
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


