
<?php


$con = mysqli_connect('localhost','root','','rk_news');


$s_id = $_POST['s_id'];
$subcat_name = $_POST['subcat_name'];


  
  $qry = " UPDATE `subcategory` SET  `subcat_name`='$subcat_name' WHERE s_id = $s_id;";

  $run = mysqli_query($con,$qry);
  if($run == true)
  {
 ?>
 <script>
     alert('Sub-Category Upadte Succesfully');
    window.open('sc.php?s_id=<?php echo $s_id;?>','_self');
    </script>
         <?php
          
  }
   
        





?>
        