
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
<div class="live">
<h1>RK News Agency</h1>
<h2>Add Live-News Page</h2>
</div></div>
<form class="box" action="add_live.php" method="POST" name="category" onsubmit="return validateform()">
    
    <input type="text" name="news_name" placeholder="News-Channel Name" >
    <img src="dataimg/Untitled-3.png" alt="">
    https://www.youtube.com/embed/<input type="text" name="youtube_code" placeholder="News-Channel Code" >
    
   
   <input type="submit" name="submit" value="Submit" >
   
    </form>

  </body>
  </html>
  <?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');



$news_name = $_POST['news_name'];
$youtube_code = $_POST['youtube_code'];





if(isset($_POST['submit']))
{

  if (empty ($news_name))
  {
    ?>
    <script>
     alert('Please Enter Category ');
    window.open('add_cat.php');
    </script>
  <?php
  }
  else
{   
  
  $qry = " insert into livenews( news_name,youtube_code ) values ('$news_name','$youtube_code' )";
 
  if(mysqli_query($con , $qry))
  {
  
    header("Location:livenews.php");
         
          
  }
  else
  {

  }
   

}
       
        
}




?>