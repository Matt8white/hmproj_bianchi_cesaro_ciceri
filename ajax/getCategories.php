<?php
    $q = $_GET['q'];
    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT id, brand, model, price, promotion, shortedprice, image FROM devices WHERE category = '".$q."'";
    $result = mysqli_query($con,$sql);
    $rows[] = array();
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
    mysqli_close($con);
?>
