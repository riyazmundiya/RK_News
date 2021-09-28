
<?php


$con = mysqli_connect('localhost','root','','rk_news');


$cat_id = $_POST['cat_id'];
$cat_name = $_POST['cat_name'];


  
  $qry = " UPDATE `category` SET `cat_name`='$cat_name' WHERE cat_id = $cat_id;";

  $run = mysqli_query($con,$qry);
  if($run == true)
  {
 ?>
 <script>
     alert('Data Upadte Succesfully');
    window.open('Category.php?cat_id=<?php echo $cat_id;?>','_self');
    </script>
         <?php
          
  }
   
        





?>