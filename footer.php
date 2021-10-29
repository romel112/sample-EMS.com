  <!-- Footer
    ================================================== -->
    <html>
      <style>
        html {
  height: 100%;
  box-sizing: border-box;
}
*,
*:before,
*:after {
  box-sizing: inherit;
}
body {
  position: relative;
  margin: 0;
  padding-bottom: 15rem;
  min-height: 100%;
}
.content {
  margin: 0 auto;
  padding-top: 64px;
  max-width: 640px;
  width: 94%;
  font-family: "Raleway",sans-serif;
  line-height: 30px;
 
}
.content h1 {
  margin-top: 0;
}
/**
 * Footer Styles
 */
.footer1 {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    padding: 1rem;
    background-color: rgb(136 27 171 / 58%);
    text-align: center;
    color: white;
    border-radius: 10px;
}

.dot {
  height: 25px;
  width: 25px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

footer, table, img {
  padding:0;
}
        </style>
    <footer class="footer1">
     
    
      <table border="0">
      
      
      
     
     
      
       
      <i class="fa fa-dot-circle-o" aria-hidden="true"></i>  <?php echo $company_name; ?>
      
      
      <i class="fa fa-dot-circle-o" aria-hidden="true"></i>  Address:<?php echo $company_address; ?>
 
      <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Tel. No.: <?php echo $company_telephone; ?>
      <i class="fa fa-dot-circle-o" aria-hidden="true"></i> Email Address: <?php echo $company_email; ?>
      <i class="fa fa-dot-circle-o" aria-hidden="true"></i>  Website: <a href="<?php echo $company_website; ?>" style="color:white; " target="_blank"><?php echo $company_website; ?>
      
     
  
      </table>
      
      
      
      
      
    </footer>
    </html>