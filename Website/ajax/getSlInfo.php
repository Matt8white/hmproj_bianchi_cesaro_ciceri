<?php
	header("Access-Control-Allow-Origin: *");
    $q = intval($_POST['svid']);
    $lang = $_POST['lang'];

    $con = mysqli_connect('localhost','hmproj2','fovpopikke55','my_hmproj2');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT * FROM slservices WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);

    while($row = mysqli_fetch_array($result)) {
        echo json_encode($row);
    }
    mysqli_close($con);
?>
