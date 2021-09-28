<?php
error_reporting(null);
session_start();
if ($_SESSION['username']==true) {
  
}
else
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>R.K News Agency Project</title>
    <link rel="stylesheet" href="css/style.css" >
   
    
</head>
<body>
    <!--Header-->
  <?php 
  include ('head.php');
  ?>

<!--Content-->
<?php
   include('content.php');
   ?>






  </body>
  </html>