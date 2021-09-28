<?php
error_reporting(null);
session_start();
if ($_SESSION['username']==true) {
  
}
else
{
  header('location:login.php');
}
?>
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

<!--Add News-->
<div class="news_logo">
<h1>RK News Agency</h1>
<h2>Add News Page</h2>
</div>
<form class="news" action="add_news.php" method="POST" enctype="multipart/form-data" name="news" onsubmit="return validateform()">

  

    <select name="subcat_name" class="subcat_select">
      <option disabled selected>-- Select Sub-Category --</option>
      <?php
        $con = mysqli_connect('localhost','root','','rk_news');
        $records = mysqli_query($con, "SELECT subcat_name From  subcategory");  

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['subcat_name'] ."'>" .$data['subcat_name'] ."</option>";  
        }	
    ?>  
    
    </select>
    <input type="text" name="news_title" placeholder="News-Title" >
    <textarea name="news"  cols="30" rows="10" placeholder="News"></textarea>
    <input type="file" name="news_img" placeholder="News Image">
   <input type="submit" name="submit" value="Submit" >
   
    </form>

  </body>
  </html>
  <?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');



$subcat_name = $_POST['subcat_name'];
$news_title = $_POST['news_title'];
$news = $_POST['news'];
$news_img = $_FILES['news_img'];

session_start();


if(isset($_POST['submit']))
{

  if (empty ($news))
  {
   
  }
  else
{   
  $imagename = $_FILES['news_img']['name'];
  $tempimgname = $_FILES['news_img']['tmp_name'];
  move_uploaded_file($tempimgname,"dataimg/$imagename");

  $qry = " insert into news(  subcat_name , news_title , news , news_img) values ( '$subcat_name' ,'$news_title' ,'$news' , '$imagename')";
 
  if(mysqli_query($con , $qry))
  {
  
    header("Location:news.php");
         
          
  }
  else
  {
    
  
  }
   

}
       
        
}




?>