<?php
    include_once '../assets/php/common.php';
    $q = $_POST['cat'];
    $langs = $_POST['lang'];

    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    
    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT category, subcategory, id, name_".$langs." FROM assistance WHERE category = '".$q."'";
    $result = mysqli_query($con,$sql);
    $arr = array();
    while($row = mysqli_fetch_array($result)) {
        array_push($arr, $row);
    }
    echo json_encode($arr);
    mysqli_close($con);
?>
