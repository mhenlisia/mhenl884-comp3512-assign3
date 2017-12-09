

<?php

try {
include '../includes/book-config.inc.php';
//$db = new AnalyticsGateway($connection);
//$db = new BooksGateway($connection);
$db = new AnalyticsGateway($connection);
$result = $db->runDifferentSelect($db);
$string = "";
    foreach ($result as $row){
       $string .= createList($row);
}



header('content-type:application/json');

$serv="";
//$arr = json_ecode($string, true);
$sql = "Select distinct VisitID, CountryName, bv.CountryCode from BookVisits AS bv JOIN Countries on Countries.CountryCode = bv.CountryCode group by  bv.CountryCode LIMIT 15";
$countries = $db->runDifferentSelect($sql);
foreach ($countries as $row) {
        $serv .= createSubcategories($row);
    }
    
//if(!is_null($countries)){
    echo json_encode($string);
//$inside = "inside";
//}else{
//    echo "{'error'}";
//}
} catch (PDOException $e) {
    die($e->getMessage());
}


?>