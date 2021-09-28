
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
<form class="box" action="add_subcat.php" method="POST" name="subcat" onsubmit="return validateform()">

    <select name="cat_name" class="cat_select" required>
      <option disabled selected >-- Select Category --</option>
      <?php
        $con = mysqli_connect('localhost','root','','rk_news');
        $records = mysqli_query($con, "SELECT cat_name From  category");  

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['cat_name'] ."'>" .$data['cat_name'] ."</option>";  
        }	
    ?>  
    
    </select></div>
    <input type="text" name="subcat_name" placeholder="Sub-Category Name">
  
   <input type="submit" name="submit" value="Submit" >
   
    </form>

  </body>
  </html>
  <?php
error_reporting(0);

$con = mysqli_connect('localhost','root','','rk_news');


$cat_name = $_POST['cat_name'];
$subcat_name = $_POST['subcat_name'];





if(isset($_POST['submit']))
{

  if (empty ($subcat_name))
  {
    ?>
    <script>
     alert('Please Enter Sub Category ');
    window.open('add_subcat.php');
    </script>
  <?php
  }
  else
{   
 
  $qry = " insert into subcategory( cat_name , subcat_name ) values ('$cat_name' , '$subcat_name' )";
 
  if(mysqli_query($con , $qry))
  {
  
    header("Location:sc.php");
         
          
  }
  else
  {
    
  
  }
   

}
       
        
}




?>