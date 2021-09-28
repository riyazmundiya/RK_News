
<?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');

$n_id = $_GET['n_id'];
$sql ="DELETE FROM `news` WHERE `n_id`='$n_id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
if($run == true)
  {
 ?>
 <script>
     alert('Data Delete Succesfully');
    window.open('news.php','_self');
    </script>
         <?php
          
  }
  else
  {
      
  }    
?>


