<?php
    $q = $_POST['cat'];
    $lang = $_POST['lang'];
    $slid = "";
    
    switch($q){
        case "Health & Wellness":
            $slid = 12;
            break;
        case "TV & Entertainment":
            $slid = 13;
            break;
        case "Home & Family":
            $slid = 14;
            break;
        case "Personal Services":
            $slid = 15;
            break;
                
        default:
        $slid = 0;
            break;
    
    }

    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    
    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT name, image, desc_".$lang." AS 'desc' FROM slservices WHERE category = '".$q."' AND id !=".$slid." UNION SELECT CONCAT_WS(' ',brand, model) as 'name', image,desc_".$lang." AS 'desc' FROM devices WHERE id in (SELECT iddevice FROM dvslrelations WHERE idslservice = ".$slid.")";
    $result = mysqli_query($con,$sql);
    
    while($row = mysqli_fetch_array($result)) {
        echo json_encode($row);
    }
    
    mysqli_close($con);
?>
