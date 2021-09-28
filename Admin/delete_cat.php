
<?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');

$cat_id = $_GET['cat_id'];
$sql ="DELETE FROM `category` WHERE `cat_id`='$cat_id'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);
if($run == true)
  {
 ?>
 <script>
     alert('Data Delete Succesfully');
    window.open('Category.php','_self');
    </script>
         <?php
          
  }
  else
  {
    ?>
    <script>
    alert('Please Delete Subcategory First');
   window.open('Category.php','_self');
   </script>
  <?php
  }    
?>


