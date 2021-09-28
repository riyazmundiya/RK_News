
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
<h1>RK News Agency</h1>
<h2>Add Category Page</h2>
</div>
<form class="box" action="add_cat.php" method="POST" name="category" onsubmit="return validateform()">
    
    <input type="text" name="cat_name" placeholder="Category Name" >
   
   <input type="submit" name="submit" value="Submit" >
   
    </form>

  </body>
  </html>
  <?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');



$cat_name = $_POST['cat_name'];





if(isset($_POST['submit']))
{

  if (empty ($cat_name))
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
  
  $qry = " insert into category( cat_name ) values ('$cat_name' )";
 
  if(mysqli_query($con , $qry))
  {
  
    header("Location:Category.php");
         
          
  }
  else
  {

  }
   

}
       
        
}




?>