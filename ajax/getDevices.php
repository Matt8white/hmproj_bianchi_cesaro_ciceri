<?php
    include_once '../assets/php/common.php';

    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    $wherestring = "";
    $brand = explode(',',$_POST['brand']);
    $pricerange = explode(',',$_POST['price']);
    $os = explode(',',$_POST['os']);
    
    $arr = $brand; $brand = "";
    foreach ($arr as &$str){
        if($str != "")
            $brand = $brand."brand = ".$str." OR ";
    }
    $brand = substr($brand, 0, -3);
    
    $arr = $os; $os = "";
    foreach ($arr as &$str){
        if($str != "")
            $os = $os."os = ".$str." OR ";
    }
    $os = substr($os, 0, -3);
    
    $arr = $pricerange; $pricerange = "";
    foreach ($arr as &$str){
        if($str != "")
            $pricerange = $pricerange.$str." OR ";
    }
    $pricerange = substr($pricerange, 0, -3);
    
    
    if($_POST['extra'] != "")
        $wherestring = "promotion = '1' AND ";
    if($brand != "")
        $wherestring = $wherestring."(".$brand.") AND ";
    if($os != "")
        $wherestring = $wherestring."(".$os.") AND ";
    if($pricerange != "")
        $wherestring = $wherestring."(".$pricerange.") AND ";
    
    if($_POST['cat']=="'Tutti'" || $_POST['cat'] == "'All'")
        $wherestring = $wherestring." 1 = 1";
    else  
        $wherestring = $wherestring." category = ".$_POST['cat'];

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
