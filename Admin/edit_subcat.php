
<?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');

$s_id = $_GET['s_id'];
$sql ="SELECT * FROM `subcategory` WHERE `s_id`='$s_id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);


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

<!--Add Category-->
<div class="cat_logo">
<h1>RK News Agency</h1>
<h2>Add Category Page</h2>
</div>
<form class="box" action="update_subcat.php" method="POST">


    <input type="text" name="subcat_name" placeholder="Sub-Category Name" required>
    <input type="hidden" name="s_id" value="<?php echo $data['s_id'];?>">
    
  
   <input type="submit" name="submit" value="Submit" >
   
    </form>

  </body>
  </html>