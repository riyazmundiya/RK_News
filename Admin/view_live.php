

<?php 


$con = mysqli_connect('localhost','root','','rk_news');

function showData(){

    global $con;

    $query = " SELECT * FROM `livenews` ";
    $run = mysqli_query($con , $query);
    
    if($run == TRUE)
{?>
<table border="2px" class="cat">
    <td class="live">No</td>
    <td class="live">Category Name</td>
    <td class="live">Live-News</td>
    <td class="live"> Edit</td>
    <td class="live">Delete</td>
        <?php
    while ($data = mysqli_fetch_assoc($run))
     {
       ?>
       <tr>
       <td class="live"><?php echo $data['id'];?></td>
           <td class="live"> <?php echo ($data['news_name']);?></a></td>
           <td class="live"><iframe width="200" height="215"
autoplay src="https://www.youtube.com/embed/<?php echo $data['youtube_code'];?>">
</iframe></div></td>
           <td class="live"><a href="edit_live.php?id=<?php echo $data['id'];?>"> <input type="button"   name="submit1" value="Edit"></a></td>
           <td class="live"><a href="delete_live.php?id=<?php echo $data['id'];?>"> <input type="button" name="submit1" value="Delete"></td>
            
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
    
<div class="dis"><h1>R.K News Agency Live-News</h1></div>

<div class="cat">

    <form action="add_live.php" method="post" enctype="multipart/form-data">
     <input type="submit" name="live" value="Add Live-News"> 
     </form>
     
    
    <?php showData(); ?> 
    
</body>
