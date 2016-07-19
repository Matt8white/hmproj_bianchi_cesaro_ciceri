<?php
 	header("Access-Control-Allow-Origin: *");
    include_once '../assets/php/common.php';

    $con = mysqli_connect('localhost','hmproj2','fovpopikke55','my_hmproj2');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    $wherestring = "";
    $brand = explode(',',$_POST['brand']);
    $pricerange = $_POST['price'];
    
    $arr = $brand; $brand = "";
    foreach ($arr as &$str){
        if($str != "")
            $brand = $brand."brand = ".$str." OR ";
    }
    $brand = substr($brand, 0, -3);
    
    
    if($_POST['extra'] != "")
        $wherestring = "promotion = '1' AND ";
    if($brand != "")
        $wherestring = $wherestring."(".$brand.") AND ";
    if($pricerange != "")
        $wherestring = $wherestring."(price".$pricerange.") AND ";
    
    if($_POST['cat']=="'Tutti'" || $_POST['cat'] == "'All'")
        $wherestring = $wherestring." 1 = 1";
    else  
        $wherestring = $wherestring." category = ".$_POST['cat'];
        
    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT id, brand, model, price, promotion, shortedprice, image FROM devices WHERE ".$wherestring."";
    $result = mysqli_query($con,$sql);
    $array = array();
    while($row = mysqli_fetch_array($result)) {
        array_push($array, $row);
    }
    echo json_encode(array_values($array));
    mysqli_close($con);
?>
