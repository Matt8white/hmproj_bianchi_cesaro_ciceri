<?php
    $q = intval($_POST['devid']);
    $lang = $_POST['lang'];

    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT * FROM devices WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        echo json_encode($row);
    }
    mysqli_close($con);
?>
