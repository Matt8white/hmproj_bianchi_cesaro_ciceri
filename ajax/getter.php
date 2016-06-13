<?php
    $q = intval($_GET['q']);

    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"TimHypProj");
    $sql="SELECT brand, model FROM devices WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        echo json_encode($row);
    }
    mysqli_close($con);
?>
