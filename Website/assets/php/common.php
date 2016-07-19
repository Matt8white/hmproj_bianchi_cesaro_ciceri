<?php
    session_start();
    header('Cache-control: private'); // IE 6 FIX

//Set language
    if(isSet($_GET['lang'])) {
        $langg = $_GET['lang'];

    // register the session and set the cookie
        $_SESSION['lang'] = $langg;

        setcookie('lang', $langg, time() + (3600 * 24 * 30));
    }
    else if(isSet($_SESSION['lang'])) {
        $langg = $_SESSION['lang'];
    }
    else if(isSet($_COOKIE['lang'])) {
        $langg = $_COOKIE['lang'];
    }
    else {
        $langg = 'en';
    }

    switch ($langg) {
        case 'en':
        $lang_file = 'lang.en.php';
        break;

        case 'it':
        $lang_file = 'lang.ita.php';
        break;

        default:
        $lang_file = 'lang.ita.php';

    }

    include_once './assets/languages/'.$lang_file;

?>
