<?php 


$con = mysqli_connect('localhost','root','','rk_news');

function showData(){

    global $con;

      
$cat_name = $_GET['cat_name'];

$query = " SELECT * FROM `subcategory` where cat_name = '$cat_name' ";
$run = mysqli_query($con , $query);
$row = mysqli_num_rows($run);

if(!$row)
 {
    ?><div class="norecord"><?php
    echo "No record found";?></div><?php
}
 else{?>
<table border="2px" class="subcat">
<td>No</td>
    <td>Category Name</td>
    <td>Sub-Category Name</td>
    <td>Edit</td>
    <td>Delete</td>
    <?php
    while ($data = mysqli_fetch_assoc($run))
     {
       ?>
       <tr>

            <td><?php echo $data['s_id'];?></td>
            <td><?php echo $data['cat_name'];?></td>
           <td><?php echo $data['subcat_name'];?></td>
           <td><a href="edit_subcat.php?s_id=<?php echo $data['s_id'];?>"> <input type="button" value="Edit"></a></td>
           <td><a href="delete_subcat.php?s_id=<?php echo $data['s_id'];?>"> <input type="button" name="submit1" value="Delete"></td>
            
       </tr> <?php
    }
    ?>
    </table>
    <?php
}
    
}

?>
<link rel="stylesheet" href="css/style.css">
<?php 
  include ('head.php');
  ?>
  <div class="dis_sub"><h1>R.K News Agency Sub-Category</h1></div>
  <div class="subcat">
  
      <form action="add_subcat.php" method="post" enctype="multipart/form-data">
       <input type="submit" name="subcategory" value="Add Sub-Category"> 
       </form>
      
       <div class="select_cat">
       <form action="view_subcat1.php" method="post" >
  
  
  
       <select name="cat_name" class="catname_select" id="cat">
        <option disabled selected >-- Select Category --</option>
        <?php
          $con = mysqli_connect('localhost','root','','rk_news');
          $records = mysqli_query($con, "SELECT cat_name From  category");  
  
          while($data = mysqli_fetch_array($records))
          {
              echo "<option value='". $data['cat_name'] ."'>" .$data['cat_name'] ."</option>";  
          }	
      ?>  
      
      </select>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
  
  $(function() {
      $("#cat").change(function() {
          var id=this.value;
          window.location.href='view_subcat1.php?cat_name='+id;
      });
  });
  
  </script></div>
       <?php showData(); ?>  

</body>



