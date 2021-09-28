
<?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');

$id = $_GET['id'];
$sql ="DELETE FROM `livenews` WHERE `id`='$id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
if($run == true)
  {
 ?>
 <script>
     alert('Live-News Delete Succesfully');
    window.open('livenews.php','_self');
    </script>
         <?php
          
  }
  else
  {
      
  }    
?>


