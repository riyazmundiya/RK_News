
<?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');

$cat_id = $_GET['cat_id'];
$sql ="SELECT * FROM `category` WHERE `cat_id`='$cat_id'";
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

<form class="box" action="update_cat.php" method="POST">
    
    <input type="text" name="cat_name" placeholder="Category Name" value=<?php echo $data['cat_name'] ?> required>
   
    <input type="hidden" name="cat_id" value="<?php echo $data['cat_id'];?>">
   <input type="submit" name="submit" value="Submit" >
   
    </form>



  </body>
  </html>





