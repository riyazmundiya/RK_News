
<?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');

$s_id = $_GET['s_id'];
$sql ="DELETE FROM `subcategory` WHERE `s_id`='$s_id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
if($run == true)
  {
 ?>
 <script>
     alert('Data Delete Succesfully');
    window.open('sc.php','_self');
    </script>
         <?php
          
  }
  else
  {
    ?>
    <script>
    alert('Please Delete News First');
   window.open('Category.php','_self');
   </script>
  <?php
  }    
?>


