<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="buttoncss.css">
  <link rel="stylesheet" href="violetview.css">
</head>
  
  
  <?php 
    include('header2.php');
    include('session.php');
    
 $mainevent_id=$_POST['main_event_id'];

    
   	$mainevent_query = $conn->query("SELECT * FROM main_event where mainevent_id='$mainevent_id'") or die(mysql_error());
    while ($mainevent_row = $mainevent_query->fetch()) 
        {
            
            $m_event_name=$mainevent_row['event_name'];
        } 
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
                    <ul class="breadcrumb" >
                    
                        <li><a href="selection.php">User Selection</a> / </li>
                    
                        <li><a href="home.php">List of Events</a> / </li>
                        
                        <li><a href="rev_main_event.php">Main Event List</strong></i></a> / </li>
                        
                        <li>Main Event <i><strong><?php echo $m_event_name; ?></strong></i> - Event List</li>
                        
                    </ul>
                </div>
                
                
    <br />
    <div class="col-lg-1">
   </div>
    <div class="col-lg-10">
    
    <form method="POST" target="_self" action="review_search.php">
    
     <input style="font-size: small; height: 40px !important; text-indent: 7px !important; border-radius:15px;" class="form-control pull-right" name="txtsearch" placeholder="Enter a keyword and search..." />  
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
 <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title" style="color:white"><?php echo $m_event_name; ?> Event List</h3>
            </div>
  
     <div class="panel-body">
  
 <table class="table table-bordered" style="background-color:rgb(23 56 255 / 33%)">
  <thead>
  
   <th><h3 style="color:white">Sub-Event</h3></th>
  <th><h3 style="color:white">Actions</h3></th>
  </thead>
  
  
  <tbody>
   <?php    
   	$subevent_query = $conn->query("SELECT * FROM sub_event where mainevent_id='$mainevent_id'") or die(mysql_error());
    while ($subevent_row = $subevent_query->fetch()) 
        { ?>
  <tr>
  
  <td style="color:white"><h4><?php echo $subevent_row['event_name']; ?></h4></td>
  <td width="300">
  <a title="click to view event details" target="_blank"  href="review_result.php?mainevent_id=<?php echo $mainevent_id; ?>&sub_event_id=<?php echo $subevent_row['subevent_id']; ?>" class="btn btn-primary">Event Details</a>
  <a target="_blank" title="click to print event result" href="review_se_result.php?mainevent_id=<?php echo $mainevent_id; ?>&sub_event_id=<?php echo $subevent_row['subevent_id']; ?>" class="btn btn-info">Print Event Result</a> 
  </td>
  
  </tr>
  <?php } ?>
 
  </tbody>
  </table>
 
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
