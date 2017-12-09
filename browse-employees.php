<!-- Ellen: Created filter card and functions-->
<?php
//include "session.php";
//include "redirect.php";
//include "login.php";
include "page-functions/employee-functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Browse Employees</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.blue_grey-orange.min.css">

    <link rel="stylesheet" href="css/styles.css">
    
    
    <script   src="https://code.jquery.com/jquery-1.7.2.min.js" ></script>
       
    <script src="https://code.getmdl.io/1.1.3/material.min.js"></script>
    <script type="text/javascript" src="js/comp3512-assign2.js"></script>
    
</head>

<body>

    
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
            mdl-layout--fixed-header">
              <?php include 'includes/header.inc.php'; ?>
    <?php include 'includes/left-nav.inc.php'; ?>
   
    
    <main class="mdl-layout__content mdl-color--grey-50">
        <section class="page-content">

            <div class="mdl-grid">

              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Employees</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    <ul class="demo-list-item mdl-list">
                        
                        
                         <?php  
                           /* programmatically loop though employees and display each
                              name as <li> element. */
                              echo $string;
                             
                         ?> 
       

                    </ul>
                </div>
              </div>  <!-- / mdl-cell + mdl-card -->

              
              <!-- mdl-cell + mdl-card -->
              <div class="mdl-cell mdl-cell--9-col card-lesson mdl-card  mdl-shadow--2dp"style="width:600px;">

                    <div class="mdl-card__title mdl-color--deep-purple mdl-color-text--white">
                      <h2 class="mdl-card__title-text">Employee Details</h2>
                    </div>
                    <div class="mdl-card__supporting-text">
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                          <div class="mdl-tabs__tab-bar">
                              <a href="#address-panel" class="mdl-tabs__tab is-active">Address</a>
                              <a href="#todo-panel" class="mdl-tabs__tab">To Do</a>
                              <a href="#messages-panel" class="mdl-tabs__tab">Messages</a>
                          </div>
                          
                          <div class="mdl-tabs__panel is-active" id="address-panel">
                           <?php   
                             /* display requested employee's information */
                             echo $string1;
                           ?>
                    
         
                          </div>
                          <div class="mdl-tabs__panel" id="todo-panel">
                              
                               <?php                       
                                 /* retrieve for selected employee;
                                    if none, display message to that effect */
                                    //outputEmployeeToDo();
                                    
                               ?>                                  
                            
                                <table class="mdl-data-table  mdl-shadow--2dp">
                                  <thead>
                                    <tr>
                                      <th class="mdl-data-table__cell--non-numeric">Date</th>
                                      <th class="mdl-data-table__cell--non-numeric">Status</th>
                                      <th class="mdl-data-table__cell--non-numeric">Priority</th>
                                      <th class="mdl-data-table__cell--non-numeric">Content</th>
                                    </tr>
                                  </thead>
                                  
                                  
                                  <tbody>
                                   
                                    <?php /*  display TODOs  */ 
                                        echo $string2;
                                    
                                    ?>
                            
                                  </tbody>
                                  </table>
                                  </div>
                                  
                                   
                                   <div class="mdl-tabs__panel" id="messages-panel">
                                    <table class="mdl-data-table  mdl-shadow--2dp">
                                  <thead>
                                    <tr>
                                      <th class="mdl-data-table__cell--non-numeric">Date</th>
                                      <th class="mdl-data-table__cell--non-numeric">Category</th>
                                      <th class="mdl-data-table__cell--non-numeric">From</th>
                                      <th class="mdl-data-table__cell--non-numeric">Messages</th>
                                    </tr>
                                  </thead>
                                  
                                  
                                  <tbody>
                                    <?php /*  display messages  */ 
                                        echo $string5;
                                    ?>
                            
                                  </tbody>
                                    
                                </table>
                            
                                
                               </div>
                         
                          </div>
                        </div>                         
                    </div>    
  
                 <div class="mdl-cell mdl-cell--3-col card-lesson mdl-card  mdl-shadow--2dp">
                <div class="mdl-card__title mdl-color--orange">
                  <h2 class="mdl-card__title-text">Filters</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    
                <!--<a class="mdl-button mdl-button--accent mdl-js-button mdl-js-ripple-effect"> -->   
        
        
        <!-- Filter -->
<!--         
* W3Schools.com "How To - Toggle Hide/Show." obtained from https://www.w3schools.com/howto/howto_js_toggle_hide_show.asp, n.d. [November 13,2017] 
-->
        <button onclick="switchFunction()">View/Hide Filters</button>
        <div id="filter" style="display:none;">
        <!-- cant do both-->
        <label for="filter-name">Filter by last name</label>
        <form action= "browse-employees.php" method="GET">
        <input type="text" name="last-name" placeholder="Enter last name">
        <br>
          <br>
         <label for="filter-city">Filter by city</label>
          <select name="City"><option value=""> Choose a city </option><?php echo $string4; ?></select>
          <br>
          <br>
           <input type="submit">
            </form>
        </div>        
      
              </div>  <!-- / mdl-cell + mdl-card -->   
            </div>  <!-- / mdl-grid -->    


        </section>
    </main>    
</div>    <!-- / mdl-layout --> 
          
</body>
</html>