<?php
    $q = $_POST['id'];
    $t = $_POST['type'];
    $langs = $_POST['lang'];
    $sql = '';
    
    
    $sqlsv = "SELECT 'sl' AS type, id, name, image FROM slservices WHERE id in (SELECT idslservice FROM dvslrelations WHERE iddevice = ".$q.")";
    $sqlas = "SELECT 'as' AS type, id, name_".$langs." AS 'name', 'as' AS image FROM assistance WHERE id in (SELECT idass FROM assdvrelation WHERE iddevice = ".$q.")";
    $sqldevsv = "SELECT id, CONCAT_WS(' ',brand, model) as 'name', image FROM devices WHERE id in (SELECT iddevice FROM dvslrelations WHERE idslservice = ".$q.")";
    $sqldevas = "SELECT id, CONCAT_WS(' ',brand, model) as 'name', image FROM devices WHERE id in (SELECT iddevice FROM assdvrelation WHERE idass = ".$q.")";
    
    
    if($t=='dev')
        $sql = $sqlsv.' UNION '.$sqlas;
    if($t=='sl')
        $sql = $sqldevsv;
    if($t=='as')
        $sql = $sqldevas;

    $con = mysqli_connect('localhost','hyper','hyper123','TimHypProj');
    $con -> query("SET NAMES 'utf8'");
    if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
    }
    
    mysqli_select_db($con,"TimHypProj");
    $result = mysqli_query($con,$sql);
    $arr = array();
    while($row = mysqli_fetch_array($result)) {
        array_push($arr, $row);
    }
    echo json_encode($arr);
    mysqli_close($con);
?>
