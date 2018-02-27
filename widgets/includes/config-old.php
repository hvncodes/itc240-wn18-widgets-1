<?php
/*
config.php

put configuration information here

*/

define('DEBUG',TRUE); #we want to see all errors

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

$nav1['index.php'] = "HOME";
$nav1['template.php'] = "TEMPLATE";
$nav1['compound-form.php'] = "COMPOUND FORM";
$nav1['contact.php'] = "CONTACT";
$nav1['daily.php'] = "DAILY";

//defaults for header.php
$banner = 'WIDGETS';
$slogan = 'Our Widgets are better!';

//get day, don't know if this should be here as in daily.php
if($_GET['day'])
{//data in querystring, use it!
    $day = $_GET['day'];
}else{//use current date
    $day = date('l');
}

switch(THIS_PAGE){
    
    case 'template.php':
        $title = 'Example Template Page';
    break;
        
    case 'compound-form.php':
        $title = 'Compound Form';
    break;
        
    case 'contact.php':
        $title = 'Contact Us';
    break;
        
    case 'daily.php':
        $title = 'Daily: ' . $day . '\'s Special';
    break;
        
    default:
        $title = THIS_PAGE;
}

//other include files referenced here
include 'credentials.php';

function myerror($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
       echo "Error in file: <b>" . $myFile . "</b> on line: <b>" . $myLine . "</b><br />";
       echo "Error Message: <b>" . $errorMsg . "</b><br />";
       die();
    }else{
		echo "I'm sorry, we have encountered an error.  Would you like to buy some socks?";
		die();
    }
}

function coffee_links($nav1){
    
    foreach($nav1 as $url => $text){
        //echo '<li><a href="' . $url . '">' . $text . '</a></li>';
        
        if(THIS_PAGE == $url)
        {//current page - add highlight
            echo '
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            ';
        }else{//no highlight
            echo '
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="' . $url . '">' . $text . '</a>
            </li>
            ';
        }
    }
}//end coffee_links()

/*
<li class="nav-item active px-lg-4">
  <a class="nav-link text-uppercase text-expanded" href="index.html">Home
    <span class="sr-only">(current)</span>
  </a>
</li>
<li class="nav-item px-lg-4">
  <a class="nav-link text-uppercase text-expanded" href="template.php">Template</a>
</li>
<li class="nav-item px-lg-4">
  <a class="nav-link text-uppercase text-expanded" href="compound-form.php">Compound Form</a>
</li>
<li class="nav-item px-lg-4">
  <a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
</li>

*/























?>