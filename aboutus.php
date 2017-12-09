<?php
include "session.php";

?>

<!DOCTYPE html>
<html>
<!--Browse	
// Universities,	Browse	Books,	Browse	Employees,	and	About	with	links	to	the	appropriate	pages.	
// It	might	be	nice	to	make	the	cards	include	an	image.	

<!-- <head>
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-orange.min.css">
  <!-- Material Design icon font -->
 <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head> --> 
<html>


<head>
  <!-- test test -->
  
   <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    
    
    
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-orange.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="index-design.css">
    
    <script src="https://code.jquery.com/jquery-1.7.2.min.js" ></script>
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
  
  
  
  
  
  <!-- -->
  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.min.js"></script>
  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.2/material.blue-orange.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" type="text/css" href="index-design.css">
  <link rel="stylesheet" href="../css/styles2.css">

</head>

<body>
  
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
            
    <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
    <main class="mdl-layout__content mdl-color--grey-50">
     <section class="page-content">
  <!-- 	Megans Card Card -->
  <div class="mdl-card mdl-shadow--2dp demo-card-square" >
    <div class="mdl-card__title mdl-card--expand">
     
    </div>
    <div class="mdl-card__supporting-text">
      <h3>Responsible for:</h3>
      <p>Program Design, Single Book, Login, Logout, Browse Universities, and Browse Employees</p>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect">
          Megan Henlisia
        </a>
    </div>
  </div>
  <!-- Browse Books Card -->
  <div class="mdl-card mdl-shadow--2dp demo-card-square">
    <div class="mdl-card__title mdl-card__accent mdl-card--expand">
      
    </div>
    <div class="mdl-card__supporting-text">
     <h3>Responsible for:</h3>
      <p> Navigation, Single Book, Browse Employees, and Documentation</p>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          Ellen Vuong
        </a>
    </div>
  </div>
  <!-- Browse Books Card -->
  <div class="mdl-card mdl-shadow--2dp demo-card-square">
    <div class="mdl-card__title mdl-card__accent mdl-card--expand">
      
    </div>
    <div class="mdl-card__supporting-text">
     <h3>Responsible for:</h3>
      <p>Simple Search, Single Book, Login, and Browse Universities</p>
    </div>
    <div class="mdl-card__actions mdl-card--border">
      <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          Ma Angenica
        </a>
    </div>
  </div>
  
 <?php  
//   //add query string
//   //header("location: login.php?insertname=aboutuspage.php")
//   //"aboutus.php?insertname=browse-employees"
  
//   if(!isset($_SESSION['username'])){
//     header("Location: login.php?insertname=aboutus.php");
//   }
  
// ?>  
        
                <table>
                  <tr>
                    <th>Type of Resource</th>
                    <th>Link</th> 
                  </tr>
                  <tr>
                    <td>GitHub</td>
                    <td><a href="https://github.com/mhenlisia/mhenl884-comp3512-assign3"target="_blank"> Click Here</a></td>
                  </tr>
                  <tr>
                    <td>Image: About</td>
                    <td><a href="http://www.free-icons-download.net/images/about-us-icon-61272.png"target="_blank"> Click Here</a></td>
                  </tr>
                  <tr>
                    <td>Image: Employee</td>
                    <td><a href="https://www.google.ca/search?tbm=isch&q=employee+drawing&spell=1&sa=X&ved=0ahUKEwjFp66ArYXXAhVP12MKHUmIBnoQvwUIgwEoAA&biw=1152&bih=645&dpr=1.88#imgrc=dzLAst4HcIsYDM:"target="_blank">Click Here</a></td>
                  </tr>
                  <tr>
                    <td>Image: Books</td>
                    <td><a href="https://www.google.ca/search?biw=1152&bih=645&tbm=isch&sa=1&q=books+drawing&oq=books+drawing&gs_l=psy-ab.3..0l10.2567.3542.0.3686.7.7.0.0.0.0.134.747.3j4.7.0....0...1.1.64.psy-ab..0.7.744....0.u_Q3kF0OrU8#imgrc=eNToib0zSdRluM"target="_blank">Click Here</a></td>
                  </tr>
                   <tr>
                    <td>Image: University</td>
                    <td><a href="https://thumbs.dreamstime.com/z/university-building-25199555.jpg"target="_blank">Click Here</a></td>
                  </tr>
                   <tr>
                    <td>MDL: Cards</td>
                    <td><a href="https://codepen.io/arnaudin/pen/RPvjwz"target="_blank">Click Here</a></td>
                  </tr>
                  <tr>
                    <td>W3schools</td>
                    <td><a href="https://www.w3schools.com/"target="_blank">Click Here</a></td>
                  </tr>
                </table>
 
  </section>
  </main>
  </div>    <!-- / mdl-layout --> 
  </body>

</html>