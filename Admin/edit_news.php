
<?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');

$n_id = $_GET['n_id'];
$sql ="SELECT * FROM `news` WHERE `n_id`='$n_id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);


?>
<!DOCTYPE html>
<html>
<head>
    
    <title>R.K News Agency Project</title>
    <link rel="stylesheet" href="css/style.css" >
    <script src="validation.js"></script>


    
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
<form class="box" name="news" action="update_news.php" method="POST" enctype="multipart/form-data" onsubmit="return validateform()">


    <input type="text" name="news_title" value="<?php echo $data['news_title'] ?>""  >
    <textarea name="news"  cols="55" rows="3" ></textarea>
    <input type="file" name="news_img"  values="<?php echo $data['news_img'] ?>">
    <input type="hidden" name="n_id" value="<?php echo $data['n_id'];?>">
    
  
   <input type="submit" name="submit" value="Submit" >
   
    </form>

  </body>
  </html>