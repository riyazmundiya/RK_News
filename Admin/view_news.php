<?php 


$con = mysqli_connect('localhost','root','','rk_news');

function showData(){

    global $con;

    $query = " SELECT * FROM `news` ";
    $run = mysqli_query($con , $query);
    
    if($run == TRUE)
{?>
<div class="news_view">
<table border="2px">
<td>No</td>
    
    <td>Sub-Category Name</td>
    <td>Title</td>
    <td>News</td>
    <td>Image</td>
    <td>Edit</td>
    <td>Delete</td>
    <?php
    while ($data = mysqli_fetch_assoc($run))
     {
       ?>
       <tr>

            <td><?php echo $data['n_id'];?></td>
            <td class="cat_name"> <?php echo ($data['subcat_name']);?></td>
         
           <td><?php echo $data['news_title'];?></td>
           <td><?php echo $data['news'];?></td>
           <td><img src="dataimg/<?php echo $data['news_img']; ?>"></td>
           <td><a href="edit_news.php?n_id=<?php echo $data['n_id'];?>"> <input type="button" id="edit" name="submit1" value="Edit"></a></td>
           <td><a href="delete_news.php?n_id=<?php echo $data['n_id'];?>"> <input type="button" name="submit1" value="Delete"></td>
            
       </tr> <?php
    }
    ?>
    </table>
    <?php
}
    else
    {
        echo "Error";
    }
}

?>

 </div>
 <div class="dis"><h1>R.K News Agency News</h1></div>
<div class="add_news">

    <form action="add_news.php" method="post" enctype="multipart/form-data">
     <input type="submit" name="category" value="Add news"> 
    
     </form>
  
</div>
</div>
<div class="select_cat">
     <form action="view_subcat1.php" method="post" >



     <select name="cat_name" class="catname_select" id="cat">
      <option disabled selected >-- Select SubCategory --</option>
      <?php
        $con = mysqli_connect('localhost','root','','rk_news');
        $records = mysqli_query($con, "SELECT subcat_name From  subcategory");  

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['subcat_name'] ."'>" .$data['subcat_name'] ."</option>";  
        }	
    ?>  
    
    </select>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(function() {
    $("#cat").change(function() {
        var id=this.value;
		window.location.href='view_news1.php?subcat_name='+id;
    });
});

</script></div>

<?php showData(); ?>





