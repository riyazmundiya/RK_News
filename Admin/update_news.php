
<?php


$con = mysqli_connect('localhost','root','','rk_news');


$n_id = $_POST['n_id'];
$news_title = $_POST['news_title'];
$news = $_POST['news'];
$news_img = $_FILES['news_img'];

$imagename = $_FILES['news_img']['name'];
$tempimgname = $_FILES['news_img']['tmp_name'];
move_uploaded_file($tempimgname,"dataimg/$imagename");

  
  $qry = " UPDATE `news` SET `news_title`='$news_title' , `news`='$news' ,news_img = '$imagename' WHERE n_id = $n_id;";

  $run = mysqli_query($con,$qry);
  if($run == true)
  {
 ?>
 
 <script>
     alert('Data Upadte Succesfully');
    window.open('news.php?n_id=<?php echo $n_id;?>','_self');
    </script>
         <?php
          
  }
  else
  {
    echo "error";
  }
   
?>