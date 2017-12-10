<?php
//include 'includes/book-config.inc.php';
try {
    //$db = new AnalyticsGateway($connection);
    //$result = $db-> limitBy(30);

    //output country list
    include 'service/service-topCountries.php';
    $countryArray = json_decode($countries, true);
    foreach ($countryArray as $c) {
        outputCountries($c);
    }
    
    //country stats
    //total visits and number of countries
    $string2 = "";
    $string3 = "";
    $sql2 = "SELECT COUNT( * ) AS  `visits`, COUNT( DISTINCT  `CountryCode` ) AS  `uniqueCountries` FROM BookVisits WHERE  `DateViewed` >  '06/01/2017' AND  `DateViewed` <  '06/31/2017'";
    $result2 = $db->runDifferentSelect($sql2);
    foreach($result2 as $row){
        $string2 .= $row['visits'];
        $string3 .= $row['uniqueCountries'];
    }
    
    //total todos
    $string4 = "";
    $sql3 = "SELECT COUNT( * ) AS  `todocount` FROM EmployeeToDo WHERE  `DateBy` >  '2017-06-01*' AND  `DateBy` <  '2017-06-31*'";
    $result3 = $db->runDifferentSelect($sql3);
    foreach($result3 as $row){
        $string4 .= $row['todocount'];
    }
    
    //total messages
    $string5 = "";
    $sql4 = "SELECT COUNT( * ) AS  `messagescount` FROM EmployeeMessages WHERE  `MessageDate` >  '2017-06-01*' AND  `MessageDate` <  '2017-06-31*'";
    $result4 = $db->runDifferentSelect($sql4);
    foreach($result4 as $row){
        $string5 .= $row['messagescount'];
    }
    
    //Adopted books
    
    $string6 = "";
    $sql5 = "select distinct COUNT(a.AdoptionID), ab.BookID, Quantity, ISBN10, Title, CoverImage From AdoptionBooks AS ab JOIN Books AS b ON (ab.BookID= b.BookID) JOIN Adoptions AS a ON (a.AdoptionID=ab.AdoptionID) GROUP BY a.AdoptionID ORDER BY COUNT(a.AdoptionID) DESC LIMIT 10";
     $result5 = $db->runDifferentSelect($sql5);
    foreach($result5 as $row){
        $string6 .= outputThumbnail($row);
        $string6 .= outputTitle($row);
        $string6 .= outputQuantity($row);
    }
    //thumbnail
    //title
    
    //sum of quantity
   
}
catch (Exception $e){
        die($e -> getMessage());
}

function outputCountries($array) {
    return '<option value="'.$array[2].'">'.$array[1].'</option>';
    
}

function outputThumbnail($rows){
   return  "<tr><th class='mdl-data-table__cell--non-numeric'><img src ='/book-images/small/" . $rows['ISBN10']. ".jpg'></th>";
}
function outputTitle($rows){
    return "<th class='mdl-data-table__cell--non-numeric'><h4>".$rows['Title']."</h4></th>";
}
function outputQuantity($rows){
    return "<th class='mdl-data-table__cell--non-numeric'><h4>".$rows['Quantity']."</h4></th></tr>";
}


?>