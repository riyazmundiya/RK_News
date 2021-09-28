<?php 


$con = mysqli_connect('localhost','root','','rk_news');

function showData(){

    global $con;

    $query = " SELECT * FROM `category` ";
    $run = mysqli_query($con , $query);
    
    if($run == TRUE)
{?>
<table border="2px" class="cat">
    <td>No</td>
    <td>Category Name</td>
    <td>Edit</td>
    <td>Delete</td>
        <?php
    while ($data = mysqli_fetch_assoc($run))
     {
       ?>
       <tr>
       <td class="cat_id"><?php echo $data['cat_id'];?></td>
           <td class="cat_name"> <?php echo ($data['cat_name']);?></a></td>
           <td class="edit_button"><a href="edit_cat.php?cat_id=<?php echo $data['cat_id'];?>"> <input type="button"   name="submit1" value="Edit"></a></td>
           <td class="delete_button"><a href="delete_cat.php?cat_id=<?php echo $data['cat_id'];?>"> <input type="button" name="submit1" value="Delete"></td>
            
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
<body>
    
<div class="dis"><h1>R.K News Agency Category</h1></div>

<div class="cat">

    <form action="add_cat.php" method="post" enctype="multipart/form-data">
     <input type="submit" name="category" value="Add Category"> 
     </form>
     
    
    <?php showData(); ?> 
    
</body>
