<?php
    include_once '../assets/php/common.php';
    $s = $_GET['s'];

    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    $wherestring = "";
    $s = explode(',',$s);
    do{
    $tmp = array_pop($s);
        switch ($tmp) {
            case $lang['PROM_SWITCH_OFFERS']:
                $wherestring = $wherestring." promotion = '1' AND";
                break;
            case $lang['SPS_FILTER_ALL']:
                $wherestring = $wherestring." category = %";
                break;
            case  $lang['TBS_FILTER_TITLE']:
                $wherestring = $wherestring." category = 'Tablet'";
                break;
            case $lang['TBS_FILTER_APPLE']:
                $wherestring = $wherestring." brand = 'Apple' AND";
                break;
            case $lang['TBS_FILTER_SAMSUNG']:
                $wherestring = $wherestring." brand = 'Samsung' AND";
                break;    
            default:
            break;
        }
    }while(!empty($s));
    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT id, brand, model, price, promotion, shortedprice, image FROM devices WHERE ".$wherestring."";
    $result = mysqli_query($con,$sql);
    $array = [];
    while($row = mysqli_fetch_array($result)) {
        array_push($array, $row);
    }
    echo json_encode(array_values($array));
    mysqli_close($con);
?>
