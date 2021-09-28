
<?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');

$id = $_GET['id'];
$sql ="SELECT * FROM `livenews` WHERE `id`='$id'";
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

<form class="box" action="update_live.php" method="POST">
    
    <input type="text" name="news_name" placeholder="News Name" value=<?php echo $data['news_name'] ?> required>
    <input type="text" name="youtube_code" placeholder="Live-News Code" value=<?php echo $data['youtube_code'] ?> required>
   
    <input type="hidden" name="id" value="<?php echo $data['id'];?>">
   <input type="submit" name="submit" value="Submit" >
   
    </form>



  </body>
  </html>





