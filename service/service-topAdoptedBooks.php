<?php
include  'includes/book-config.inc.php';
//require __DIR__ . "/AnalyticsGateway.class.php";
include "lib/AnalyticsGateway.class.php";
//include "lib/Test.php";
try {
    //echo "hello";
    $db = new AnalyticsGateway($connection);
    $pdo = new PDO(DBCONNECTION, DBUSER, DBPASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $sql="select distinct COUNT(a.AdoptionID), ab.BookID, Quantity, ISBN10, Title, CoverImage From AdoptionBooks AS ab JOIN Books AS b ON (ab.BookID= b.BookID) JOIN Adoptions AS a ON (a.AdoptionID=ab.AdoptionID) GROUP BY a.AdoptionID ORDER BY COUNT(a.AdoptionID) DESC LIMIT 10";
        $book = $pdo->prepare($sql);
        $book->execute();
        $result = $book->fetch(PDO::FETCH_ASSOC);
        $servresult1 = json_encode($result);
    
} catch (PDOException $e) {
    die($e->getMessage());
}

?>