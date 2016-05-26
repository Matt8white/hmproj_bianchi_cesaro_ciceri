<?php
    session_start();
    include_once 'common.php';

//Send a string to JavaScript
    $strToJs = $_GET['strToJs'];
    switch ($strToJs) {
        case 'loginHeader':
            echo $lang["LOG_HEAD"];
            break;
        case 'loginDesc':
            echo $lang['LOG_DESC'];
            break;
        case 'registerHeader':
            echo $lang['REG_HEAD'];
            break;
        case 'registerDesc':
            echo $lang['REG_DESC'];
            break;

//To be implemented

            
    }
?>