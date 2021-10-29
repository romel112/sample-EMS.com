<!DOCTYPE html>
<html lang="en">
<title>Login</title>
<style>

body {
  color: #fff;
  font: 87.5%/1.5em 'Open Sans', sans-serif;
	background:url(img/login_bg.jpg)no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;}
     /** headings **/

  .h1 {
	font-weight: 600;
	font-family: 'Titillium Web', sans-serif;
	position: relative;  
	font-size: 36px;
	padding: 15px 15px 15px 15%;
	color: #355681;
	box-shadow: 
		inset 0 0 0 1px rgba(53,86,129, 0.4), 
		inset 0 0 5px rgba(53,86,129, 0.5),
		inset -285px 0 35px white;
	border-radius: 0 30px 0 30px;
	background: #fff url(img/login_header.jpg) no-repeat center left;
   margin-top: 0px;
}

.glow-on-hover {
    width: 220px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
</style>
  
  <?php
  session_start(); 
   include('dbcon.php'); 
     include('header2.php');
  ?>

  <body>
    
    
    <!-- Navbar
    ================================================== -->
   
<header>
  
    <h1 class="h1">Event Management System
    <button type="button"  class=" btn btn-primary pull-right"  href="#" data-toggle="modal" data-target="#about-modal" class="brand"> <font size="2"style="color: white; float:right;">ABOUT <strong>EMS</strong></font></button>
    </h1>
  </div>
</header>
 
<br>
<br>
<style>
    .backgroundfororganizer{
    background-color: rgb(23 99 255 / 19%);   
    margin-bottom: 20px;
    border-radius: 4px;
    border: 1px solid #2f00ff;
    color: white;
}
    </style>


    <div class="container" >
    
      
      
    <!-- About EJS Modal -->
    <div class="backgroundfororganizer modal fade" id="about-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" >
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login">About Event Management System</h4>
                    </div>
                    
                    
                    <table align="center"  class="backgroundfororganizer" style="width:70%; margin:80px">
                    
                    <tr >
                    <td colspan="2" align="center"> <img src="logon.png" width="50" height="50"  /></td>                    
                    </tr>
                    
                    <tr>
                    <td>&nbsp;</td>
                    </tr>
                    
                    <tr colspan="2">
                    <td > Developer:</td>
                    <td><strong> Romel T Cabrera.</strong> </td>
                    </tr>
      
                    
                    <tr>
                    <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                    <td >Email:</td>
                    <td><strong> Rmlcbrr@gmail.com</strong></td>
                    </tr>
                    
                    <tr>
                    <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                    <td >Mobile Number:</td>
                    <td><strong> 09675613074</strong></td>
                    </tr>
                    
                    <tr>
                    <td>&nbsp;</td>
                    </tr>
                    
                    <tr>
                    <td >Website:</td>
                    <td><a href="#" target="_blank"><strong> EMS.com</strong></a></td>
                    </tr>
        
                    </table>
                    
           
                    <br />
                    <p style="padding:12px;">To provide accurate, secure, and transform to a modern way of tabulation for the benefits of the organization and client. All rights reserved 2021 &COPY;</p>

                        <hr />
                        <p class="text-center text-muted"><button class="btn btn-default" data-dismiss="modal" aria-hidden="true"><strong>Close</strong></button></p>

                    </div>
               
            </div>
        </div>
        <!-- END About EJS Modal -->
       <style>
         table, thead,th {
           background-color: rgb(23 99 255 / 47%);
           padding: 20px;
           font-size: 18px;
            border-radius:15px;
            border: 1px solid #2f00ff;

         }
       </style> 
        
              
   <form method="POST" action="#" >
 <br />  
 <table cellpadding="30" cellspacing="0" border="0" align="center">
 <thead>
 <th align="left" style=" text-indent: 7px; color: white; border-radius: 30px 30px 0 0; "><h4><img src="logon.png" width="25" height="25" /> &nbsp;ORGANIZER LOGIN</h4></th>
 </thead>
 
 <tr style=" border-radius: 0 0 30px 30px !important;">
 
 <td>
 
 
  <h4 style="color:white;"><i class="icon-user"></i>  USERNAME:</h4>
  <input style="font-size: large; height: 35px !important; text-indent: 7px !important;" class="form-control btn-block" type="text" name="username" placeholder="Username" required="true" autofocus="true" />
 
 <h4 style="color:white;"><i class="icon-lock"></i>  PASSWORD:</h4>
  <input style="font-size: large; height: 35px !important; text-indent: 7px !important;" class="form-control btn-block" type="password"  name="password" placeholder="Password" required="true" autofocus="true" />
        
   <?php
	if (isset( $_POST['username']) &&  isset($_POST['password']))
		{
      $username = $_POST['username'];
	  	$password = $_POST['password'];
      $query = $conn->query("SELECT * FROM organizer WHERE username='$username' AND password='$password'");
			$row = $query->fetch();
			$num_row = $query->rowcount();
			
			if ($num_row > 0)	{			
				$_SESSION['useraccess']="Organizer";
        $_SESSION['id']=$row['organizer_id'];
        
        ?>	<script>window.location = 'selection.php';</script><?php
					
				}
			else
				{?>
					
          <div class="alert alert-danger" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            
           <p> Invalid Username and</p> Password Combination
          </div>
			<?php	}
		}
  ?>
 
 
  
  <div class="reminder">
  <button class="glow-on-hover" type="submit"   title="Log In" name="login" value="Login"> <strong>LOGIN</strong></button>
  <br/>
    <br/>  
  <p style="color:white;">Not a member? <a href="create_account.php"><strong style="color: black; background-color:#00ffd0b5; padding:5px; border-radius:6px;">Register</strong></a></p>
    
  </div>
  
 </td>
 </tr>
 
 
 </table>
 
 

   </form>

 
    
            </div>
 
   


    <!-- Footer
    ================================================== -->
    <footer class="footer" style="position: fixed; bottom:0; width: 100%;  background-color: rgb(23 56 255 / 33%); color:white">
      <div class="container">
      
        <font size="4" class="pull-left"><strong>Event Management System &middot; 2021 &COPY; </strong></font> <br />
        
      </div>
    </footer>


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
