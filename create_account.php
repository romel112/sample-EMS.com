<!DOCTYPE html>
<html lang="en">
 <title>Register</title>
<style>
    body {
        color: #fff;
        font: 87.5%/1.5em 'Open Sans', sans-serif;
        background:url(img/login_bg.jpg)no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;}
      
        .h1 {
          font-weight: 600;
          font-family: 'Titillium Web', sans-serif;
          position: relative;  
          font-size: 36px;
          padding: 15px 15px 15px 15%;
          color: #355681;
          font-weight:bold;
          box-shadow: 
            inset 0 0 0 1px rgba(53,86,129, 0.4), 
            inset 0 0 5px rgba(53,86,129, 0.5),
            inset -285px 0 35px white;
          border-radius: 0 30px 0 30px;
          background: #fff url(img/login_header.jpg) no-repeat center left;
          margin-top: 0px;
        }
    </style>

    <?php 
    include('header.php');
    ?>

  <body>
    <!-- Navbar
    ================================================== -->
    <header>
  
    <h1 class="h1">Account Registration</h1>
    
  </div>
</header>
<br>
<br>
    <div class="container">

  <div class="col-lg-3">
 
  </div>
  
  <div class="col-lg-6">
 <div class="panel panel-primary">
            <div class="panel-heading" style="background-color:#000598;">
              <h3 class="panel-title" >Event Organizer Registration Form</h3>
            </div>
            <div class="panel-body" style="background-color:#3f00ff47;">
            
   <form method="POST">
   
   
        
       
        
    <table align="center"  style="color:#001fff;">
    <tr><td colspan="5"><strong>Basic Information</strong><hr /></td></tr>
    <tr>
    <td>
    Firstname:
    <input type="text" name="fname" class="form-control" placeholder="Firstname" aria-describedby="basic-addon1" required autofocus>
 </td>
    <td>&nbsp;</td>
    <td>
    Middlename:
    <input type="text" name="mname" class="form-control" placeholder="Middlename" aria-describedby="basic-addon1" required autofocus>
 </td>
    <td>&nbsp;</td>
    <td>
    Lastname:
    <input type="text" name="lname" class="form-control" placeholder="Lastname" aria-describedby="basic-addon1" required autofocus>
 </td>
    </tr>
    
    
     <tr><td colspan="5">&nbsp;</td></tr>
     <tr><td colspan="5"><strong>Account Security</strong><hr /></td></tr>
     <tr>
    <td>
    Username:
    <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="basic-addon1" required autofocus>
 </td>
    <td>&nbsp;</td>
    <td>
    Password:
    <input id="password" type="password" name="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" required="true" autofocus="true" />
 </td>
    <td>&nbsp;</td>
    <td>
    Re-type Password:
    <input id="confirm_password" type="password" name="password2" class="form-control" placeholder="Re-type Password" aria-describedby="basic-addon1" required="true" autofocus="true" />
 </td>
    </tr>
    
    <tr>
    <td colspan="4">&nbsp;</td>
    <td><span id='message'></span></td>
    </tr>
    
    
    </table>
 <br />
       <div class="btn-group pull-right">
  <a href="index.php" type="button" class="btn btn-default" style="background-color:#7499b9b3; color: #000598">Cancel</a>
  <button name="register" type="submit" class="btn btn-primary" style="background-color:#000598;">Register</button>
   </form>
</div>
 

            </div>
          </div>
  </div>
  <div class="col-lg-3">
 
  </div>
 
          </div>
          
      
   


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="javascript/jquery1102.min.js"></script>
    
    
    
     <script>
 
    $('#password, #confirm_password').on('keyup', function () {
      if ($('#password').val() == $('#confirm_password').val()) {
        $('#message').html('Matching').css('color', 'green');
      } else 
        $('#message').html('Not Matching').css('color', 'red');
    });
    
    </script>

 <!-- Footer
    ================================================== -->
    <footer class="footer" style="position: fixed; bottom:0; width: 100%;  background-color: rgb(23 56 255 / 33%); color:white">
      <div class="container">
      
        <font size="4" class="pull-left"><strong>Event Management System &middot; 2021 &COPY; </strong></font> <br />
        
      </div>
    </footer>

  </body>
</html>


<?php 

if(isset($_POST['register']))
{
 
   $fname=$_POST['fname']; 
   $mname=$_POST['mname'];  
   $lname=$_POST['lname'];  
   
   $username=$_POST['username'];  
   $password=$_POST['password'];  
   $password2=$_POST['password2'];  
  
 if($password==$password2)
 {
  $conn->query("insert into organizer(fname,mname,lname,username,password,access,status)values('$fname','$mname','$lname','$username','$password','Organizer','offline')");

 ?>

                               <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "success", 
                          title: "Organizer <?php echo $fname." ".$mname." ".$lname; ?> ",
                          text: "registered successfully!",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { 	window.location = "index.php"});</script> 
<?php  
 }
 else
 {
  ?>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
            <script>
            
            swal.fire({
                          icon: "error", 
                          title: "Organizer <?php echo $fname." ".$mname." ".$lname; ?> ",
                          text: "registration cannot be done. Password and Re-typed password did not match.",
                          showConfirmButton: false,
                          timer: 2000
            }).then( function() { 	window.location = "create_account.php"});</script> 
<?php  
 }
 
} ?>

 
