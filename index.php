<?php
    if (!isset($_REQUEST['url']))
        include_once('home.php');
    else { 
        $file = $_REQUEST['url'].'.php';
        
        if(is_file($file))
            include_once($file);
        else 
           include_once('404.php');
    }
