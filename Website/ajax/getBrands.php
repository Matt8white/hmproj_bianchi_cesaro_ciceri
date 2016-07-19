<?php
    $q = $_POST['cat'];
    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }


    if($_POST['cat']=="Tutti" || $_POST['cat'] == "All")
        $q = "1 = 1";
    else
        $q = "category = '".$q."'";


    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT DISTINCT brand FROM devices WHERE ".$q;
    $result = mysqli_query($con,$sql);
    $rows = array();
    while($row = mysqli_fetch_assoc($result)) {
        array_push($rows, $row);
    }
    echo json_encode($rows);
    mysqli_close($con);
?>
