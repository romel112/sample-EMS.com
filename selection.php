<!DOCTYPE html>
<html lang="en">
<title>Selection</title>
<head>
  <link rel="stylesheet" href="buttoncss.css">
  <link rel="stylesheet" href="violetview.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
</head>

  
  <?php 
  include('header2.php');
    include('session.php');

   
?>


   
  

 

  <body>
 
<!-- Navbar
    ================================================== -->
    <div class="navbar navbar-light bg-light navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
               <a class="brand" href="#"><img src="uploads/<?php echo $company_logo; ?>" width="80" height="80" />&nbsp; <font size="3">Event Management System</font></a>
          <div class="nav-collapse collapse" id="logout">
            <ul class="nav" >

             <li>
             <a 
                class="logo" 
                title="Click to logout user" 
                href="logout.php"><img src="img/logoutblue.png"   
                onMouseOver="this.src='img/logoutred.png'" 
                onMouseOut="this.src='img/logoutblue.png'" 
                width="50" 
                height="50"
                />
                
                
                        
                
                Organizer: <?php echo $name; ?>
                </a>
              </li>
 
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    
<header>
  
    <h1>User Selection Panel</h1>
    
  
</header>
 
 <div class="container">
 
<br>
 
 <div id="myGroup">

    
     
             <button  class="effect effect-1" data-toggle="collapse" data-target="#organizer" data-parent="#myGroup"  ><strong> ORGANIZER</strong></button>
   
             <button class="effect effect-1" data-toggle="collapse" data-target="#judge" data-parent="#myGroup"> <strong>JUDGE</strong></button>  
                                            
         
           
            <div style="border: 0px;" class="accordion-group">
 
                <br /> 
 
              <div class="collapse indent" id="organizer">
              
             
  <div class="input-group">
  
  <style>
    .backgroundfororganizer{
    background-color: rgb(23 99 255 / 19%);   
    padding: 8px 35px 8px 14px;
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid #2f00ff;
    color: white;
}
    </style>
                <div  class="backgroundfororganizer">
                
 <form method="POST">
    <input type="hidden" name="sender_id" value="<?php echo $session_id; ?>"  />
     <input type="hidden" name="recipient_id" value="<?php echo $contact_id ?>"  />
     <input class="form-control" name="check_pass" type="hidden" value="<?php echo $check_pass; ?>" />
      
      <h4>Organizer's Password</h4>
            <br />
       <input id="myInputOP" style="font-size: large; height: 45px !important;" class="form-control btn-block" name="user_password" type="password" placeholder="Enter Organizer's Password" />
       <p><input style="padding-top: 0px !important; margin-top: 0px !important;" type="checkbox" onclick="myFunctionOP()"/> <strong>Show Password</strong></p>
                                    
                                    
                                    <script>
                                    function myFunctionOP() {
                                        var x = document.getElementById("myInputOP");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                    </script>
       <div class="pull-right">
         <button class="btn btn-default" type="reset"><i class="icon-ban-circle"></i> <strong>CLEAR</strong></button>&nbsp;
         <button name="org_panel" class="btn btn-primary" title="Click to proceed to Event Organizer Panel"><i class="icon-ok"></i> <strong>LOGIN</strong></button>
     </div> 
         </form>
    <br />
    </div>
    </div> 

 
               </div>
             
             
             
             
             
              <div class="collapse indent" id="judge" class="backgroundfororganizer">
             
                  <?php 
    $ame_query = $conn->query("SELECT * FROM main_event WHERE organizer_id = '$session_id' AND status='activated'");
    
            if($ame_query->rowCount()<=0)
            { ?>
             
               <div class="backgroundfororganizer"><h3><strong>NO ACTIVE EVENT</strong></h3></div>
            <?php }
            else
            {
                $ase_query = $conn->query("SELECT * FROM sub_event WHERE organizer_id = '$session_id' AND status='activated'");
                if($ase_query->rowCount()<=0)
            { ?>
            
                <div class="alert alert-warning"><h3><strong>NO ACTIVE SUB-EVENT</strong></h3></div>
           <?php }
            else
            {
                
            ?>
 
      
       <div class="input-group" >
       <div class="backgroundfororganizer">
      <form method="POST" action="#" >
            <h4>Judge's Code</h4>
            <br />
          <input id="myInputJC" style="font-size: large; height: 45px !important;" class="form-control btn-block" name="judge_code" type="password" placeholder="Enter Judge's Code" />
            <p><input style="padding-top: 0px !important; margin-top: 0px !important;" type="checkbox" onclick="myFunctionJC()"/> <strong>Show Code</strong></p>
                                    
                                    
                                    <script>
                                    function myFunctionJC() {
                                        var x = document.getElementById("myInputJC");
                                        if (x.type === "password") {
                                            x.type = "text";
                                        } else {
                                            x.type = "password";
                                        }
                                    }
                                    </script>
       
       <div class="pull-right">
         <button class="btn btn-default" type="reset"><i class="icon-ban-circle"></i> <strong>CLEAR</strong></button>&nbsp;
         <button name="get_code" class="btn btn-primary" title="Click to proceed to Judging Panel"><i class="icon-ok"></i> <strong>LOGIN</strong></button>
     </div>
 
 
 </form>
        <br />
           </div>   
           
           
    </div> 
    
            
                
            <?php } } ?>
                
              </div>
              
              
           
           
     
            </div>
            
            
</div>

 
 
</div>
 
          
          
 <?php 

if(isset($_POST['org_panel']))
{
    
    $check_pass=$_POST['check_pass'];
    $user_password=$_POST['user_password'];
    
  if($check_pass==$user_password) 
  {
   ?>
           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "success", 
                          title: " Welcome! ",
                          text: "",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { window.location = "home.php";});</script> 
<?php   
  }
  else
  {
    ?>
                
                    <script>swal(" Incorrect Password", "Please try Again", "error");</script>   
<?php  
  } } // asdasdasdasdas

  if(isset($_POST['get_code']))
  {
  
        $judge_code=$_POST['judge_code'];

	    $query = $conn->query("SELECT * FROM judges WHERE code='$judge_code'");
			$row = $query->fetch();
			$num_row = $query->rowcount();
            
            
            
            
		if( $num_row > 0 ) { 
		  
          
$judge_ctr=$row['judge_ctr'];
$subevent_id=$row['subevent_id'];

?>

            <script>
            swal(" Enjoy", "Scorring", "success").then( function() { window.location.href = "judge_panel.php?judge_ctr=<?php echo $judge_ctr; ?>&subevent_id=<?php echo $subevent_id; ?>";});
            </script>
<?php }
else
{ ?>

<body>
   <p> <script>swal(" Incorrect Code", "Please Contact the Organizer", "error");</script> </p>

</body> 
<?php }
  }
  ?>  

  
  <?php include('footer.php'); ?>
 
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
