<?php

if(isset($_GET['type'])){
    switch ($_GET['type']) {
        case 1 :
            echo file_get_contents('catalogs_output/1.php');
            break;
        case 2 :
            echo file_get_contents('catalogs_output/2.php');
            break;
        case 3 :
            echo file_get_contents('catalogs_output/3.php');
            break;
        case 4 :
            echo file_get_contents('catalogs_output/4.php');
            break;
    }

}