<?php 


$con = mysqli_connect('localhost','root','','rk_news');

function showData(){

    global $con;

    $query = " SELECT * FROM `feedback_form` ";
    $run = mysqli_query($con , $query);
    
    if($run == TRUE)
{?>
<table border="2px" class="feedback">
    <td>Id</td>
    <td>Username</td>
    <td>FeedBack</td>
    <?php
    while ($data = mysqli_fetch_assoc($run))
     {
       ?>
       <tr>
        <td class="id"><?php echo $data['id'];?></td>
       <td class="username"><?php echo $data['username'];?></td>
         <td class="feedback"><?php echo $data['feedback'];?></td>
            
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
    
<div class="dis"><h1>R.K News Agency User FeedBack</h1></div>

<div class="feedback">
 
     <?php showData(); ?>  
     
</div>

</body>
