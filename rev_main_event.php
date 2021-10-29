 

<!DOCTYPE html>
<html lang="en">
<title>Data Review</title>
<head>
  <link rel="stylesheet" href="buttoncss.css">
  <link rel="stylesheet" href="violetview.css">
</head>
  
  <?php 
  include('header2.php');
    include('session.php');
 
  ?>
  
  <body>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="brand" href="#"><img src="uploads/<?php echo $company_logo; ?>" width="80" height="80" />&nbsp; <font size="3">Event Management System</font></a> 
 
          <div class="nav-collapse collapse">
            <ul class="nav">

            <li>
                <a href="selection.php"><img src="https://img.icons8.com/office/40/000000/select-user.png"/>User Selection</a>
              </li>
 
                <li>
                <a href="home.php"><img src="https://img.icons8.com/external-inipagistudio-mixed-inipagistudio/40/000000/external-list-grocery-shop-inipagistudio-mixed-inipagistudio.png"/>LIST OF EVENTS</a>
              </li>
 
              <li>
                <a href="score_sheets.php"><img src="https://img.icons8.com/color/40/000000/moleskine.png"/>Score Sheets</a>
              </li>
              
            
               <li  class="active">
                  <a href="rev_main_event.php"> <strong><img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/40/000000/external-review-copywriting-itim2101-lineal-color-itim2101.png"/>Data Reviews</a></strong>
              </li>
 
 
              
              
              
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">My Account <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
 
              
              <li>
                  <a target="_blank" href="edit_organizer.php">Settings</a>
              </li>
 
              <li>
                <a href="logout.php">Logout <?php echo $name; ?></a>
              </li>
              
              
                    </ul>
                    </li>
          
            </ul>
          </div>
        </div>
      </div>
    </div>


<header>
  
    <h1>Data Reviews</h1>
    
  
</header>
    
    <div class="container">
    
    <br />
                <div class="col-md-12">
                    <ul class="breadcrumb">
                    
                        <li><a href="selection.php">User Selection</a> / </li>
                    
                        <li><a href="home.php">List of Events</a> / </li>
                        
                        <li><i><strong>Main Event</strong></i> List</li>
                        
                    </ul>
                </div>
                
    <div class="col-lg-1">
   </div>
    <div class="col-lg-10">
    
    <form method="POST" target="_self" action="review_search.php">
    
     <input style="font-size: small; height: 45px !important; text-indent: 7px !important; border-radius:15px;" class="form-control pull-right" name="txtsearch" placeholder="Enter a keyword and search..." />  
     <br />
     <br>
     <br>
      <button class="btn btn-info pull-right" style="width: 150px !important;"><i class="icon-search"></i> <strong>SEARCH</strong></button> 
     
      </form>
   </div>
   <div class="col-lg-1">
   </div>
 
   <div class="col-lg-3">
   </div>
   <div class="col-lg-6">
 <div class="panel panel-primary " style="background-color:#001fff59; color: white;  padding:4em; border-radius:15px; top: margin 30px;">
            <div class="panel-heading">
              <h2 class="panel-title">Select Main Event</h2>
            </div>
  
     <div class="panel-body">
  <form method="POST" action="rev_sub_event.php">
  <table class="table table-dark">
  <thead>
  <th></th>
   <th><h3>Event Name </h3></th>
    <th colspan="2"><center><h3>Action</h3></center></th>
  </thead>
  
  
  <tbody>
   <?php    
   	$mainevent_query = $conn->query("SELECT * FROM main_event") or die(mysql_error());
    while ($mainevent_row = $mainevent_query->fetch()) 
        { ?>
  <tr>
  <td width="10" align="center"><input type="radio" name="main_event_id" value="<?php echo $mainevent_row['mainevent_id']; ?>" required="true" /></td>
  <td><h4> <?php echo $mainevent_row['event_name']; ?><h4></td>

  
  <td width="200"> 
  <a target="_blank" title="click to print event result" href="print_all_results.php?main_event_id=<?php echo $mainevent_row['mainevent_id']; ?>" class="btn btn-info">Print Result</a>
  </td>
  
  </tr>
  <?php } ?>
  <tr>
  <td colspan="4">
  <?php if($mainevent_query->rowCount()>0){ ?>
    <button class="btn btn-info pull-right" style="width: 200px !important;"><strong>NEXT</strong> <i class="icon-chevron-right"></i></button></td>
  
  <?php }else{ ?>
    <div class="alert alert-warning">
    
    <h3>NO EVENTS TO DISPLAY... PLEASE ADD AN EVENT <a href="home.php">HERE &raquo;</a></h3>
    
    </div>
  <?php } ?>
   
  </tr>
  </tbody>
  </table>
 </form>
</div>
 
          </div>
          
        
  </div>
  
 <div class="col-lg-3">
   </div>
 
 
          </div>
 

     
    
   <?php include('footer.php'); ?>
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>
    <script src="assets/js/bootstrap-affix.js"></script>
    <script src="assets/js/holder/holder.js"></script>
    <script src="assets/js/google-code-prettify/prettify.js"></script>
    <script src="assets/js/application.js"></script>
    
  </body>
</html>
