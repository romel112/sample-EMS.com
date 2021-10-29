<head>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
  
<?php 
 
    include('header2.php');
    include('session.php');
    
 
 
 
    $status=$_GET['status'];
    $se_name=$_GET['se_name'];
    $sub_event_id=$_GET['sub_event_id'];
    
    
    
    
 
  if($status=="activated")
  {
 
    $conn->query("update sub_event set status='deactivated' where subevent_id='$sub_event_id'");?>
    
    
                <body>
                  <p>
                <script> swal("Sub-Event:<?php echo $se_name; ?> ", "deactivated successfully", "success" ).then( function() { window.location = "home.php";});</script>
  </body>
  </p>
                


<?php }else{
    
$conn->query("update sub_event set status='activated' where subevent_id='$sub_event_id'");

$cont_query = $conn->query("SELECT * FROM contestants WHERE subevent_id='$sub_event_id'") or die(mysql_error());
if($cont_query->rowCount()>0)
{
    ?>
               

<body>
                  <p>
                <script> swal("Sub-Event: <?php echo $se_name; ?> ", " Activated successfully!", "success" ).then( function() {
                   window.location = "sub_event_details_edit.php?sub_event_id=<?php echo $sub_event_id; ?>&se_name=<?php echo $se_name; ?>";});</script>
  </body>
  </p>

  <?php
    
}
else
{
  ?>
                

<body>
                  <p>
                <script> swal("Sub-Event: <?php echo $se_name; ?>", " Activated Successfully", "success" ).then( function() {
                  window.location = "sub_event_details.php?sub_event_id=<?php echo $sub_event_id; ?>&se_name=<?php echo $se_name; ?>";});</script>
  </body>
  </p>


  <?php  } }?>