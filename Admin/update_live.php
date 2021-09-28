
<?php


$con = mysqli_connect('localhost','root','','rk_news');


$id = $_POST['id'];
$news_name = $_POST['news_name'];
$youtube_code = $_POST['youtube_code'];




  
  $qry = " UPDATE `livenews` SET `news_name`='$news_name' ,`youtube_code`='$youtube_code' WHERE id = $id;";

  $run = mysqli_query($con,$qry);
  if($run == true)
  {
 ?>
 <script>
     alert('Live-News Upadte Succesfully');
    window.open('livenews.php?id=<?php echo $id;?>','_self');
    </script>
         <?php
          
  }
   
        





?>