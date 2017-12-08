<?php

include 'includes/book-config.inc.php';
header('content-type:application/json');
$db = new AnalyticsGateway($connection);
//$arr = json_ecode($string, true);
$sql = "Select distinct VisitID, CountryName, BookVisits.CountryCode from BookVisits JOIN Countries on Countries.CountryCode = BookVisits.CountryCode group by  BookVisits.CountryCode LIMIT 15";
//$db = "Select distinct VisitID, CountryName from BookVisits JOIN Countries on Countries.CountryCode = BookVisits.CountryCode group by  BookVisits.CountryCode";
$countries = $db->runDifferentSelect($sql);
var_dump($countries);
foreach ($countries as $row){
        $string .= outputCountries($row);
    }
     //print_r($arr);        
    //echo $arr[0]["CountryName"];
    
    //$obj = json_encode($string);
  //print_r($obj);      // Dump all data of the Object
  //echo $obj[0]->CountryName;
}else{
    echo "{'error'}";
}


echo json_encode($countries, JSON_FORCE_OBJECT);

?>



// /*<?php
// include 'includes/book-config.inc.php';


// header('Content-Type: application/json charset=utf-8');
//  $string = "";
//     $sql = "Select distinct VisitID, CountryName from BookVisits JOIN Countries on Countries.CountryCode = BookVisits.CountryCode group by  BookVisits.CountryCode";
//     // $sql = "Select distinct  VisitID, CountryName from BookVisits INNER JOIN Countries on Countries.CountryCode = BookVisits.CountryCode";
//     $result = $db->runDifferentSelect($sql);
//     var_dump($result);
//     foreach ($result as $row){
//         $string .= outputCountries($row);
//     }

// echo json_encode($countries, JSON_FORCE_OBJECT);


// ?>*/