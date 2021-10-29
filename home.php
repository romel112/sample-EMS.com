<!DOCTYPE html>
<html lang="en">
<title>HOME</title>
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
 
                <li  class="active">
                <a href="home.php" ><strong><img src="https://img.icons8.com/external-inipagistudio-mixed-inipagistudio/40/000000/external-list-grocery-shop-inipagistudio-mixed-inipagistudio.png"/>LIST OF EVENTS</a></strong>
              </li>
 
              <li >
                <a href="score_sheets.php"><img src="https://img.icons8.com/color/40/000000/moleskine.png"/>Score Sheets</a>
              </li>
              
            
               <li>
                  <a href="rev_main_event.php"><img src="https://img.icons8.com/external-itim2101-lineal-color-itim2101/40/000000/external-review-copywriting-itim2101-lineal-color-itim2101.png"/>Data Reviews</a>
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


         


<!-- Subhead
================================================== -->
<header>
  
    <h1>Event List</h1>
    
  
</header>


 <div class="container">

 
      <div class="span12">


                <br />
                <div class="col-md-12">
                    <ul class="breadcrumb">
                    
                        <li><a href="selection.php">User Selection</a> / </li>
                    
                        <li>List of Events</li>
                        
                         
                        
                    </ul>
                </div>
                


        <!-- Download
        ================================================== -->
        <section id="download-bootstrap">
          <div class="page-header">
 
 
 
<table style="width: 100% !important;" align="center">
 
                            <tr>
                                               
                            <td>
                            
                           
                            
                            <div id="addMEcollapse" class="panel-collapse collapse">   
                                    
                                 <form method="POST">
                                 
                                
                                 
                                <table align="center" class="table table-bordered" id="example" style="background-color:#0000ff40;">
                                    
                                    <thead>
                                    <th>
                                    <h4><strong style="color:white;">ADD EVENT</strong>
                                    <a data-toggle="collapse" class="btn btn-default pull-right" href="#addMEcollapse" title="Click to add Main Event"><i class="icon-remove"></i> CANCEL</a>
                                    </h4>
                                    </th>
                                    </thead>
                           
                                <tr>
                                <td>
                              
                                 
                                 <strongstyle="color:white;"> Event Name:</strong><br />
                                 <input type="text" name="main_event" class="form-control btn-block" style="text-indent: 5px !important; height: 30px !important;" placeholder="Event Name" required="true"/>
                                 <br />
                                 
                                 <strong style="color:white;">School Year:</strong><br />
 
                                  <input name="sy" class="form-control btn-block" style="text-indent: 5px !important; height: 30px !important;" type="text" placeholder="yyyy-yyyy" required="true"/>
                                  <br /> 
                          
                                  <strong style="color:white;">Date Start:</strong><br />
                                  <input type="date" name="date_start" class="form-control btn-block" style="height: 30px !important;" required="true"/>
                                  <br />
                                  
                                  <strong style="color:white;">Date End:</strong><br />
                                  <input type="date" name="date_end" class="form-control btn-block" style="height: 30px !important;" required="true"/>
                                  <br />
                  
                                  <strong style="color:white;">Venue:</strong><br />
                                  <textarea name="place" class="form-control btn-block" style="text-indent: 10px !important;" placeholder="Event Venue" required="true" rows="2"></textarea>
                                  <br />
                           
                                 
                                 
                                 <button title="Clear form" type="reset" class="btn btn-default pull-right"><i class="icon-ban-circle"></i> <strong>RESET</strong></button>
                                 <button title="Click to save" name="create" type="submit" class="btn btn-primary pull-right"><i class="icon-ok"></i> <strong>SAVE</strong></button> 
                                  
                                
             
                                  </td>
                                  </tr>
                                  </table>
                                  </form>
                                  </div>
                     
                            <a style="margin-bottom: 10px !important;" data-toggle="collapse" class="btn btn-info pull-right" href="#addMEcollapse" title="Click to add Main Event"><i class="icon icon-plus"></i> <strong>EVENT</strong></a> 
                          
                            </td>
                            </tr>
                            
                            
                            
                            
            
<?php   
$sy_query = $conn->query("select DISTINCT sy FROM main_event where organizer_id='$session_id'") or die(mysql_error());
while ($sy_row = $sy_query->fetch()) 
{
            
$sy=$sy_row['sy'];
 
$MEctrQuery = $conn->query("select * FROM main_event where sy='$sy'") or die(mysql_error());
$MECtr = $MEctrQuery->rowCount();  ?>

    
 
<tr>

<td>
                      <style>
                        .abuton{
                          background-color:hsl(227deg 92% 43%);
                          border-radius:10px;
                          font-size:20px;
                          font-weight:bold;
                          text-decoration:none;
                          color:white;
                        }
                        .abuton:hover{
                          background-color:#0000ff36;
                        }
                        
                        </style>
                        
                        <button 
                        type="button" 
                        class="abuton"
                        data-toggle="collapse" 
                        aria-expanded=false
                        href="#MainEvents<?php echo $sy; ?>" 
                        style="text-align: left; text-indent: 7px; width:40%;  padding:15px !important; " 
                        class="btn btn-warning">
                        <i class="icon icon-folder-close"></i><?php echo $sy; ?> 
                        <span  class="badge pull-right" style="margin-right: 7px !important;"><strong>
                          <?php if($MECtr>0 AND $MECtr<2){echo $MECtr." Event";} 
                          elseif($MECtr>1){ echo $MECtr." Events";}else{ echo "0 Event";} ; ?></strong> </span> </button>

                
                        <div class="panel-collapse collapse" id="MainEvents<?php echo $sy; ?>"> 
                        
                        <br />
                        
                        <table align="right" style="width: 97% !important; " id="example">
 
       
                        <?php
                        
                        $myME_ctr=0;
                          
                        $event_query = $conn->query("select * from main_event where organizer_id='$session_id' AND sy='$sy'") or die(mysql_error());
                        while ($event_row = $event_query->fetch()) 
                       
                        {
                        
                        
                        
                        $myME_ctr++;
                         
                        $main_event_id=$event_row['mainevent_id'];
                        
                        
                        $SEctrQuery = $conn->query("select * FROM sub_event where mainevent_id='$main_event_id'") or die(mysql_error());
                        $SECtr = $SEctrQuery->rowCount();

                        ?>  
                        
                        <tr>
                        <td colspan="3">
                                   
                        <!-- view events feature -->
                                  
                        <?php
                        if($event_row['status']=="deactivated") { ?>
                                    
                        <button  type="button" style="text-align: left !important; text-indent:10px !important; width:30%; padding: 15px !important;"
                         data-toggle="collapse" 
                         title="Complete Event name: <?php echo $event_row['event_name']; ?>. 
                         This Main Event is deactivated" 
                         href="#collapse2<?php echo $main_event_id; ?>"><?php echo $myME_ctr.". ".substr($event_row['event_name'], 0, 22); ?>
                         <span class="badge badge-default pull-right btn-lg" style="margin-right: 7px !important;">
                         <?php if($SECtr>0 AND $SECtr<2){echo $SECtr." Sub-Event";} elseif($SECtr>1){ echo $SECtr." Sub-Events";}
                         else{ echo "0 Sub-Event";} ; ?></span></button>
                        
                        <?php } else { ?>
                        
                        <button title="Complete Event name: <?php echo $event_row['event_name']; ?>" 
                        style="text-align: left !important; text-indent:10px !important; width:30%; padding: 15px !important;" 
                        data-toggle="collapse" 
                        class="btn btn-info  btn-block" 
                        href="#collapse2<?php echo $main_event_id; ?>">
                        <?php echo $myME_ctr.". ".substr($event_row['event_name'], 0, 22); ?>
                        <span class="badge badge-warning pull-right" style="margin-right: 7px !important;"><strong>
                          <?php if($SECtr>0 AND $SECtr<2){echo $SECtr." Sub-Event";} 
                          elseif($SECtr>1){ echo $SECtr." Sub-Events";}else{ echo "0 Sub-Event";} ; ?></strong></span></button>
                        
                        <?php }?>
 
                        </td>
                        
    
                        
                        </tr>
                        
           
           
           
                        <tr>
                        
                        <td colspan="3">
     
                                    <!-- start of List of sub-events -->
                                                
                                    
                                     
                                    <div id="collapse2<?php echo $main_event_id; ?>" class="panel-collapse collapse"> 
                 
                                    <table align="right" style="width: 100% !important;  color:white !important;" id="example">
                                    
                                    
                                    <tr>
                                    
                                    <td colspan="3">
                                   
    <div id="myGroup<?php echo $main_event_id; ?>" >
    
    <?php if($event_row['status']=="deactivated") { ?>
    
    
    
    <?php } else { ?>
    
    <a class="btn btn-info" data-toggle="collapse" data-target="#listSubEvents<?php echo $main_event_id; ?>" data-parent="#myGroup<?php echo $main_event_id; ?>" style="padding:5px;" ><i class="icon-list"></i>List of Sub-Event</a>
      
    <?php }?>
 
    <?php if($event_row['status']=="activated") { ?>
    
    <a style="padding:5px;"  data-toggle="collapse" data-target="#ActivateDeactivate<?php echo $main_event_id; ?>" data-parent="#myGroup<?php echo $main_event_id; ?>" class="btn btn-warning" title="Click to deactivate <?php echo $event_row['event_name']; ?>. Current Status is: Activated" data-toggle="collapse" data-target="#keys" data-parent="#myGroup<?php echo $main_event_id; ?>"><i class="icon icon-eye-open"></i>Deactivate</a>
 
    <?php }else{ if($event_row['status']=="deactivated"){ ?>
    
    <a style="padding:5px;"  data-toggle="collapse" data-target="#ActivateDeactivate<?php echo $main_event_id; ?>" data-parent="#myGroup<?php echo $main_event_id; ?>" class="btn btn-danger" title="Click to activate <?php echo $event_row['event_name']; ?>. Current Status is: Deactivated" data-toggle="collapse" data-target="#keys" data-parent="#myGroup<?php echo $main_event_id; ?>"><i class="icon icon-eye-close"></i>Activate</a>
    
    <?php }} ?>
                        
    <?php if($event_row['status']=="deactivated") { ?>
    
    
    
    <?php } else { ?>
    
    <a  style="padding:5px;"  class="btn btn-primary" data-toggle="collapse" data-target="#addSubEvents<?php echo $main_event_id; ?>" data-parent="#myGroup<?php echo $main_event_id; ?>"><i class="icon-plus"></i>Add Sub-Event</a>
    <a style="padding:5px;"  class="btn btn-success" data-toggle="collapse" data-target="#editEvent<?php echo $main_event_id; ?>" data-parent="#myGroup<?php echo $main_event_id; ?>"><i class="icon-pencil"></i>Edit Event</a>
    <a style="padding:5px;"  class="btn btn-danger" data-toggle="collapse" data-target="#deleteEvent<?php echo $main_event_id; ?>" data-parent="#myGroup<?php echo $main_event_id; ?>"><i class="icon-remove"></i>Delete Event</a>
    <a style="padding:5px;"  target="_blank" class="btn btn-default" title="Click to print data of Main Event: <?php echo $event_row['event_name']; ?>" href="print_all_results.php?main_event_id=<?php echo $main_event_id; ?>" data-toggle="collapse" data-target="#edit" data-parent="#myGroup<?php echo $main_event_id; ?>"><i class="icon-print"></i>Print Event</a>
          
    <?php }?>
    
    <br />
                                
        <div style="border: 0px !important;" class="accordion-group">
                
                <div class="collapse indent" id="listSubEvents<?php echo $main_event_id; ?>">
                                    
                                    <h4>List of Sub-Events</h4>
                                    <table align="center" class="table table-bordered" style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;" id="example">
                                    
                                    <thead>
                                    <th><strong>Sub-Event Title</strong></th>
                                    <th><center><strong>Status</strong></center></th>
                                    <th><center><strong>Actions</strong></center></th>
                                    </thead>
                            
                                    <?php
                                    $se_ctr=0;
                                    $sub_event_query = $conn->query("select * from sub_event where mainevent_id='$main_event_id'") or die(mysql_error());
                                    while ($sub_event_row = $sub_event_query->fetch()) 
                                    { 
                                    $se_ctr++;
                                    $sub_event_id=$sub_event_row['subevent_id'];   ?>
                                         
                                    <tr>
                            
                                    <td>
                                    <strong><?php echo $se_ctr.". ".$sub_event_row['event_name']; ?></strong>
                                    
                                    <div id="editMEcollapse<?php echo $sub_event_row['subevent_id']; ?>" class="panel-collapse collapse">
                                    
                                    <div class="pull-right">
                                    <table class="table table-bordered" style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;">
                                    
                                    <tr>
                                    <td><h4>Edit Sub-Event Title</h4></td>
                                    </tr>
                                    <tr>
                                    <td>
                                    
                                    <form method="POST">
                                    <input type="hidden" name="sub_event_id" value="<?php echo $sub_event_row['subevent_id']; ?>" />
                                    <input type="hidden" name="se_name" value="<?php echo $sub_event_row['event_name']; ?>" />
                                    <input name="se_new_name" type="text" placeholder="Enter Sub-Event Title" value="<?php echo $sub_event_row['event_name']; ?>" />
                                    <br />
                                    <button style="margin-right: 5px !important;" name="edit_se" class="btn btn-success pull-right"><i class="icon-ok"></i> <strong>UPDATE</strong></button>
                                    </form>
                                    
                                    </td>
                                    </tr>
                                    </table>
                                    
                                    </div>
                                    
                                    </div>
                                    
                                    <?php 

                                    if(isset($_POST['edit_se']))
                                    {
                                        
                                        $se_name=$_POST['se_name'];
                                        $sub_event_id=$_POST['sub_event_id'];
                                        $se_new_name=$_POST['se_new_name'];
                                       
                                      
                                       /* contestants */
                                       
                                        $conn->query("update sub_event set event_name='$se_new_name' where subevent_id='$sub_event_id'");
                                       
                                      
                                     ?>
                                     
                            
                                      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                                                  <script>
                                                  
                                                  swal.fire({
                                                                icon: "success", 
                                                                title: "Sub-Event title: <?php echo $se_name." was changed to: ".$se_new_name; ?>",
                                                                text: "successfully!",
                                                                showConfirmButton: false,
                                                                timer: 4000
                                                  }).then( function() { window.location = "home.php";});</script> 
                                    
                                    <?php  
                                     
                                     
                                    } ?>
                                    
                                    <br />
                                    
                                    <div id="deleteMEcollapse<?php echo $sub_event_row['subevent_id']; ?>" class="panel-collapse collapse">
                                    
                                    <div class="pull-right">
                                    
                                    <table class="table table-bordered" style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;">
                                    
                                    <tr>
                                    <td><h4>Delete Sub-Event</h4></td>
                                    </tr>
                                    <tr>
                                    <td>
                                    
                                    <?php 
                                    $place_query = $conn->query("select * from sub_results where subevent_id='$sub_event_id'") or die(mysql_error());
                                    if($place_query->rowCount()==0)
                                    { ?>
                                    
                                    <form method="POST">
                                    
                                    <input type="hidden" name="sub_event_id" value="<?php echo $sub_event_row['subevent_id']; ?>" />
                                    <input type="hidden" name="se_name" value="<?php echo $sub_event_row['event_name']; ?>" />
                  
                                    <input id="myInput" name="entered_pass" type="password" placeholder="Enter Organizer's Password" />
                                    <br />
                                    <p><input style="padding-top: 0px !important; margin-top: 0px !important;" type="checkbox" onclick="myFunctionDSE()"/> <strong>Show Password</strong></p>
                                    
                                    
                                    <script>
                                    function myFunctionDSE() {
                                        var x = document.getElementById("myInput");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                    </script>

                                   
                                    <br />
                                    <button style="margin-right: 5px !important;" name="deleteSubEvent" class="btn btn-danger pull-right"><i class="icon-ok"></i> <strong>DELETE</strong></button>
                                    </form>
                                    
                                    <?php } else { ?>
                                    <div style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;">
                                    <h3>Cannot delete Sub-Event. There are saved data for this Sub-Event.</h3>
                                    </div>
                                    
                                    <?php } ?>
                                    
                                    
                                    </td>
                                    </tr>
                                    </table>
                                    
                                    </div>
                                    
                                    </div>
                                    
                                    
                                    <?php
                                    
                                    if(isset($_POST['deleteSubEvent']))
                                    {
                                    
                                    $sub_event_id=$_POST['sub_event_id'];
                                    $entered_pass=$_POST['entered_pass'];
                                    $se_name=$_POST['se_name'];
                  
                                    if($check_pass==$entered_pass)
                                    {
                                   
                                            $conn->query("delete from sub_event where subevent_id='$sub_event_id'"); 
                                            
                                            $conn->query("delete from contestants where subevent_id='$sub_event_id'"); 
                                            
                                            $conn->query("delete from criteria where subevent_id='$sub_event_id'"); 
                                             
                                            $conn->query("delete from judges where subevent_id='$sub_event_id'"); 
                               
                                        ?>
                                 
                                            
                                        
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                                                  <script>
                                                  
                                                  swal.fire({
                                                                icon: "success", 
                                                                title: "Sub-Event: <?php echo $se_name; ?> ",
                                                                text: "and its related data deleted successfully. . .",
                                                                showConfirmButton: false,
                                                                timer: 4000
                                                  }).then( function() { window.location = "home.php";});</script> 
                                            
                                        
                                         
                                           <?php } else { ?>
                                            
                                        
                                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
                                                  <script>
                                                  
                                                  swal.fire({
                                                                icon: "error", 
                                                                title: "Bad Password!",
                                                                text: "Try Again",
                                                                showConfirmButton: false,
                                                                timer: 3000
                                                  }).then( function() { window.location = "home.php";});</script> 
                                            
                                                
                                           <?php } }  ?>
   
   
                                    </td>
                                     
                                    <?php
                                    if($sub_event_row['status']=="activated")
                                    { ?>
                                         
                                    <td width="10"><center><strong><i style="color: white;">Active</i></strong></center></td>
                                        
                                    <td width="500">
                                    <center>
                                    
                                    <a style="margin: 5px;" title="Click to Deactivate <?php echo $sub_event_row['event_name'];?>. Current Status: Active" target="_blank" onclick="javascript: setTimeout(window.close, 10);" href="sub_event_stat_update.php?status=<?php echo $sub_event_row['status']; ?>&se_name=<?php echo $sub_event_row['event_name']; ?>&sub_event_id=<?php echo $sub_event_row['subevent_id']; ?>" class="btn btn-danger"><i class="icon icon-off"></i>Deactivate</a>
                                          
                                    <a style="margin: 5px;" title="Click to view <?php echo $sub_event_row['event_name'];?> Data and Settings" href="sub_event_details_edit.php?sub_event_id=<?php echo $sub_event_row['subevent_id']; ?>&se_name=<?php echo $sub_event_row['event_name']; ?>" class="btn btn-primary"><i class="icon icon-cog"></i>Profile</a>
                                    
                                    
                                    <a style="margin: 5px;" title="Click to edit <?php echo $sub_event_row['event_name'];?>'s Title" data-toggle="collapse" data-target="#editMEcollapse<?php echo $sub_event_row['subevent_id']; ?>" class="btn btn-success"><i class="icon icon-pencil"></i>Rename</a>
                                    
                                 
                            
                                    <a style="margin: 5px;"data-toggle="collapse" data-target="#deleteMEcollapse<?php echo $sub_event_row['subevent_id']; ?>" title="Click to delete <?php echo $sub_event_row['event_name'];?>." class="btn btn-danger"><i class="icon icon-trash"></i>Delete</a>
                                     
                                    </center>
                                    </td>
                                         
                                    <?php }else{  ?>
                                             
                                    <td width="10"><center><strong><i>Inactive</i></strong></center></td>  
                                        
                                    <td width="175">
                                    <center>
                                    <a title="Click to Activate <?php echo $sub_event_row['event_name'];?>. Current Status: Deactive" onclick="javascript: setTimeout(window.close, 10);" href="sub_event_stat_update.php?status=<?php echo $sub_event_row['status']; ?>&se_name=<?php echo $sub_event_row['event_name']; ?>&sub_event_id=<?php echo $sub_event_row['subevent_id'];?>" class="btn btn-success"><i class="icon icon-off"></i>Activate Event</a>
                                    
                                    
                                    </center>
                                    </td>
                                         
                                    <?php } ?>
                                        
                                    </tr>
                                        
                                    <?php } if($se_ctr>0){ ?>
                          
                                     
                                    <?php } else{ ?>
                                    
                                    <tr>
                                    <td colspan="3">
                                    <div style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;">
                                    <h3>
                                    No data to display. Add Sub-Event <a href="#" data-toggle="collapse" data-target="#addSubEvents<?php echo $main_event_id; ?>" data-parent="#myGroup<?php echo $main_event_id; ?>"> here &raquo;</a>
                                    </h3>
                                    </div>
                                    </td>
                                    </tr>   
                                            
                                    <?php }?>
                                    </table>
                
                
                </div>
                
                <div class="collapse" id="ActivateDeactivate<?php echo $main_event_id; ?>">
                
                <?php if($event_row['status']=="activated") { ?>
                <h4>Deactivate Event <i><?php echo $event_row['event_name']; ?></i>?</h4>
                <?php }else{ if($event_row['status']=="deactivated"){ ?>
                <h4>Activate Event <i><?php echo $event_row['event_name']; ?></i>?</h4>
                <?php }} ?>
    
                
                    <table align="center" class="table table-bordered" style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;" id="example">
                    <tr>
                    <td>
                    
                      <form method="POST">
      
                      <input name="status" type="hidden" value="<?php echo $event_row['status']; ?>" />
                      <input name="main_event_id" type="hidden" value="<?php echo $main_event_id; ?>" />
                      <input name="ma_name" type="hidden" value="<?php echo $event_row['event_name']; ?>" />
                       
                       
                       
                       <?php 
                       if($event_row['status']=="activated")
                       { ?>
                       
                       
                        <div class="modal-body">
                        <strong>Confirmation Password</strong>:<br />
                        <input placeholder="Enter Organizer's Password" name="check_pass" class="form-control btn-block" style="text-indent: 7px !important; height: 30px !important;" type="password" required="true"/> 
                        </div>
                                    
                        
                        <button  class="btn btn-danger pull-right" name="activation" ><i class="icon icon-eye-close"></i> <strong>DEACTIVATE</strong></button> 
                        
                  
                       
                       <?php
                       }
                       else
                       { 
                         if($event_row['status']=="deactivated")
                         {
                        ?>
                        
                        <div class="modal-body">
                        <strong>Confirmation Password</strong>:<br />
                        <input placeholder="Enter Organizer's Password" name="check_pass" class="form-control btn-block" style="text-indent: 7px !important; height: 30px !important;" type="password" required="true"/> 
                        </div>
                        
                        
                        <button  class="btn btn-success pull-right" name="activation" ><i class="icon icon-eye-open"></i> <strong>ACTIVATE</strong></button> 
                        
                              
                               
                        <?php }  } ?>
                                  
                        </form>
                        
                    </td>
                    </tr>
                    </table>
                    
                </div>
                
                <div class="collapse indent" id="addSubEvents<?php echo $main_event_id; ?>">
                
                                      <!-- ADD Sub-Events -->
                                      
                                      <h4>Add Sub-Events</h4>
                                      <table align="center" class="table table-bordered" style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;" id="example">
                                      <tr>
                                      <td>
                                      
                                      <form method="POST">
                                      
                                      <input name="main_event_id" type="hidden" value="<?php echo $main_event_id; ?>" />
               
                                 
                                      <strong>Sub-Event Title</strong>:<br />
                                      <input placeholder="Enter Sub-Event title" name="sub_event_name" class="form-control btn-block" style="text-indent: 7px !important; height: 30px !important;" type="text" required="true"/> 
                                      <br />
                                     
                                   
                                      <strong>Date</strong>:<br />
                                      <input name="event_date" class="form-control btn-block" style="height: 30px !important;" type="date" required="true"/> 
                                      <br />
                                      
                                      <strong>Time</strong>:<br />
                                      <input placeholder="hh:mm" name="event_time" class="form-control btn-block" style="text-indent: 7px !important; height: 30px !important;" type="text" required="true"/>
                                      <br />
                                      
                                      <strong>Venue</strong>:<br />
                                      <textarea placeholder="Enter Sub-Event Venue" rows="2" name="event_place" class="form-control btn-block" style="text-indent: 7px !important;" required="true"></textarea>
                                      <br />
                                      
                                      
                                      
                                        <button type="reset" class="btn btn-default pull-right"><i class="icon-ban-circle"></i> <strong>RESET</strong></button>
                                        <button name="add_event" class="btn btn-primary pull-right" onClick="generateReport()"><i class="icon-ok" ></i> <strong>SAVE</strong></button>
                                      
                                      </form>
                                      
                                      </td>
                                      </tr>
                                      </table>
                                      
                                      <!-- End of ADD Sub-Events -->
                                      
                </div>
        
                <div class="collapse indent" id="editEvent<?php echo $main_event_id; ?>">
                
                                     <!-- start of edit of main events -->
                                     
                                      <h4>Edit Event Details</h4>
                                      <table align="center" class="table table-bordered" style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;" id="example">
                                      <tr>
                                      <td>
                                      
                                      <form method="POST">
      
      
                                      <?php   
                                          $edit_event_query = $conn->query("select * from main_event where organizer_id='$session_id' and mainevent_id='$main_event_id'") or die(mysql_error());
                                		while ($edit_event_row = $edit_event_query->fetch()) 
                                        {
                                            $edit_mainevent_id=$edit_event_row['mainevent_id'];
                                           
                                             
                                            ?>  
                                      
                                      
                                        <input name="main_event_id" type="hidden" value="<?php echo $edit_mainevent_id; ?>" />
                                      
                                        <strong>Event Name:</strong><br /> 
                                        <input type="text" name="main_event" class="form-control btn-block" style="text-indent: 7px !important; height: 30px !important;" placeholder="Event Name" required="true" value="<?php echo $edit_event_row['event_name']; ?>" />
                                        <br /> 
                                        
                                        <strong>Date Start:</strong><br /> 
                                        <input type="date" name="date_start" class="form-control btn-block" style="height: 30px !important;" required="true" value="<?php echo $edit_event_row['date_start']; ?>"/>
                                        <br /> 
                                        
                                        <strong>Date End:</strong><br /> 
                                        <input type="date" name="date_end" class="form-control btn-block" style="height: 30px !important;" required="true" value="<?php echo $edit_event_row['date_end']; ?>"/>
                                        <br /> 
                                        
                                        <strong>Venue:</strong><br /> 
                                        <textarea placeholder="Enter Sub-Event Venue" rows="2" name="place" class="form-control btn-block" style="text-indent: 7px !important;" required="true"><?php echo $edit_event_row['place']; ?></textarea>
                                 
                                     
                                      
                                      <?php } ?>
                               
                                      
                                        <button name="edit_event" class="btn btn-success pull-right"><i class="icon-ok"></i> <strong>UPDATE</strong></button>
                                      
                                      
                                      </form>
                                      
                                      </td>
                                      </tr>
                                      </table>
       
                  
                                    <!-- end of edit of main events -->
                </div>
        
                <div class="collapse" id="deleteEvent<?php echo $main_event_id; ?>">
                    
                    <h4>Delete Event <i><?php echo $event_row['event_name']; ?></i>?</h4>
                    
                    
                    <?php 
                    $place_query = $conn->query("select * from sub_results where mainevent_id='$main_event_id'") or die(mysql_error());
                    if($place_query->rowCount()==0)
                    { ?>
                                    
                     <table align="center" class="table table-bordered" style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;" id="example">
                    <tr>
                    <td>
                    
                      <form method="POST">
      
                 
                      <input name="main_event_id" type="hidden" value="<?php echo $main_event_id; ?>" />
                      <input name="ma_name" type="hidden" value="<?php echo $event_row['event_name']; ?>" />
 
                        <div class="modal-body">
                        <strong>Confirmation Password</strong>:<br />
                        <input placeholder="Enter Organizer's Password" name="entered_pass" class="form-control btn-block" style="text-indent: 7px !important; height: 30px !important;" type="password" required="true"/> 
                        </div>
                        
                       
                        <button  class="btn btn-danger pull-right" name="deleteEvent" ><i class="icon-trash"></i> <strong>DELETE</strong></button> 
                        
                              
                               
                       
                                  
                        </form>
                        
                        </td>
                        </tr>
                        </table>
                                    
                                    <?php } else { ?>
                                    <div style="width: 100% !important; background-color:rgb(23 99 255 / 33%) !important; color:white !important; padding: 9px; border-radius:10px;  border: 1px solid #2f00ff;">
                                    <h3>Cannot delete event. There are saved data for this event.</h3>
                                    </div>
                                    
                                    <?php } ?>
                 
                </div>
                
        </div>
        
    </div>
                                    </td>
                         
  
                                    </tr>
                            
                                    </table>
 
                                    </div>
                                          
                                    
                                     
                                    <!-- End of List of sub-events -->
                             
   
                        </td>
                        </tr>
                        
                        <?php  } ?>
      
                        </table>
                                 
                        </div>
 
 </td>
 </tr>
 
 
  <?php  }  ?>
 
  </table>
 
 
 


<?php 

if(isset($_POST['create']))
{
 
   $event_name=$_POST['main_event']; 
   $date_start=$_POST['date_start']; 
   $date_end=$_POST['date_end']; 
   $event_place=$_POST['place']; 
   $event_sy=$_POST['sy']; 
 
 
 $org_query = $conn->query("select * from main_event where organizer_id='$session_id'") or die(mysql_error());
		$num_row = $org_query->rowcount();
		      if( $num_row > 0 ) 
              {
                  $conn->query("insert into main_event(event_name,status,organizer_id,date_start,date_end,place,sy)
                  values('$event_name','deactivated','$session_id','$date_start','$date_end','$event_place','$event_sy')");
              }
              else
              {
                  $conn->query("insert into main_event(event_name,status,organizer_id,date_start,date_end,place,sy)
                  values('$event_name','activated','$session_id','$date_start','$date_end','$event_place','$event_sy')");
 
              } 
            

 
 ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "success", 
                          title: "Event <?php echo $event_name; ?>",
                          text: "successfully added...",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { window.location = "home.php";});</script>
<?php } ?>




<?php 

if(isset($_POST['add_event']))
{
 
   $main_event_id=$_POST['main_event_id']; 
   $sub_event_name=$_POST['sub_event_name'];  
   $event_date=$_POST['event_date']; 
   $event_time=$_POST['event_time']; 
   $event_place=$_POST['event_place']; 
  
  $conn->query("insert into sub_event(mainevent_id,event_name,status,eventdate,eventtime,place,organizer_id)
  values('$main_event_id','$sub_event_name','deactivated','$event_date','$event_time','$event_place','$session_id')");

 ?>
 

           	
            
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "success", 
                          title: "Sub-Event <?php echo $sub_event_name; ?>",
                          text: " Created successfully!",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { window.location = "home.php";});

function generateReport()
{
    window.location.href = '#MainEvents<?php echo $sy; ?>';
}

 </script>

 <?php } ?>
 
 

<?php 

if(isset($_POST['activation']))
{
 
   $status=$_POST['status']; 
   $main_event_id=$_POST['main_event_id'];  
   $check_pass2=$_POST['check_pass']; 
   $ma_name=$_POST['ma_name']; 
   
   if($check_pass==$check_pass2)
   { 
   
  if($status=="activated")
  {
 
    $conn->query("update main_event set status='deactivated' where mainevent_id='$main_event_id'");
    $conn->query("update sub_event set status='deactivated' where mainevent_id='$main_event_id'");
     ?>
 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "success", 
                          title: " Event <?php echo $ma_name; ?> ",
                          text: "Deactivated successfully!",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { window.location = "home.php";});</script> 


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "success", 
                          title: "Event <?php echo $ma_name; ?>",
                          text: " Deactivated successfully!",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { window.location = "home.php";});</script> 
  <?php
  
  }
  else
  {
    
     $conn->query("update main_event set status='activated' where mainevent_id='$main_event_id'");
     
  ?>
 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "success", 
                          title: "Event activated <?php echo $ma_name; ?>",
                          text: "successfully!",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { window.location = "home.php";});</script> 
  <?php }
   }
   else
   {
    
    ?>
 

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "error", 
                          title: "Confirmation",
                          text: "did not match. Try again.",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { window.location = "home.php";});</script> 
  <?php
    
   } } ?>




<?php 

if(isset($_POST['edit_event']))
{
 
   $main_event_id=$_POST['main_event_id']; 
   $event_name=$_POST['main_event']; 
   $date_start=$_POST['date_start']; 
   $date_end=$_POST['date_end']; 
   $event_place=$_POST['place'];
  
 $conn->query("update main_event set event_name='$event_name',date_start='$date_start',date_end='$date_end',place='$event_place' where mainevent_id='$main_event_id'");
  ?>
 <script>			                                      
 window.location = 'home.php';
 alert('Event <?php echo $event_name; ?> updated successfully!');						
 </script>
  <?php } ?>
  
  
  
<?php

if(isset($_POST['deleteEvent']))
{
    
    $main_event_id=$_POST['main_event_id'];
   
    $entered_pass=$_POST['entered_pass'];
    $ma_name=$_POST['ma_name'];
 
    if($entered_pass==$check_pass)
    {
         $delquery = $conn->query("select * from sub_event where mainevent_id='$main_event_id'") or die(mysql_error());
		while ($del_row = $delquery->fetch()) 
        {
            
            $sub_event_id=$del_row['subevent_id'];
  
            $conn->query("delete * from contestants where subevent_id='$sub_event_id'"); 
             
            $conn->query("delete from criteria where subevent_id='$sub_event_id'"); 
             
            $conn->query("delete from judges where subevent_id='$sub_event_id'"); 
            
            $conn->query("delete from sub_results where subevent_id='$sub_event_id'");  
             
        } 
 
            $conn->query("delete from sub_event where mainevent_id='$main_event_id'");
            
            $conn->query("delete from main_event where mainevent_id='$main_event_id'"); 
       
        ?>
 
            

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "success", 
                          title: "Event: <?php echo $ma_name; ?> and.",
                          text: " Its Sub-Events and related data deleted successfully. ",
                          showConfirmButton: false,
                          timer: 5000
            }).then( function() { window.location = "home.php";});</script> 
 
   <?php  } else { ?>
    

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "error", 
                          title: "Confirmation did not match.",
                          text: "Try again.",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { window.location = "home.php";});</script> 
    
        
   <?php } }  ?>
  
   
 
 
 
   </div>
 
  </section>

 
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


