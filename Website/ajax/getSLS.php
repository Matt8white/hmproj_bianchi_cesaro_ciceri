<?php
 	header("Access-Control-Allow-Origin: *");
	include '/membri/hmproj2/assets/languages/lang.ita.php';
    $q = $_POST['cat'];
    $langs = $_POST['lang'];
    $slid = "";
    
    $actualcat = array_search($q , $lang);
    if($actualcat){
      include '/membri/hmproj2/assets/languages/lang.en.php';
      $q = urldecode($lang[$actualcat]);
    }
    
    $q = urldecode($q);
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

    $con = mysqli_connect('localhost','hmproj2','fovpopikke55','my_hmproj2');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    
    mysqli_select_db($con,"TimHypProj");
    $sql = "SELECT 'sv' AS type, id, name, image, desc_".$langs." AS 'desc' FROM slservices WHERE category = '".$q."' AND id !=".$slid." UNION SELECT 'dev' AS type, id, CONCAT_WS(' ',brand, model) as 'name', image,desc_".$langs." AS 'desc' FROM devices WHERE id in (SELECT iddevice FROM dvslrelations WHERE idslservice = ".$slid.")";
    $result = mysqli_query($con,$sql);
    $arr = array();
    while($row = mysqli_fetch_array($result)) {
        array_push($arr, $row);
    }
    echo json_encode($arr);
    mysqli_close($con);
?>
