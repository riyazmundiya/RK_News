<?php 


$con = mysqli_connect('localhost','root','','rk_news');

function showData(){

    global $con;

    $query = " SELECT * FROM `contact` ";
    $run = mysqli_query($con , $query);
    
    if($run == TRUE)
{?>
<table border="2px" class="user_contact">
    <td>Id</td>
    <td>Username</td>
    <td>Email</td>
    <td>Message</td>
    <?php
    while ($data = mysqli_fetch_assoc($run))
     {
       ?>
       <tr>
        <td class="id"><?php echo $data['id'];?></td>
       <td class="username"><?php echo $data['username'];?></td>
       <td class="email"><?php echo $data['email'];?></td>
         <td class="message"><?php echo $data['message'];?></td>
            
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
    
<div class="dis"><h1>R.K News Agency User Contact Data</h1></div>

<div class="user_data">
 
     <?php showData(); ?>  
     
</div>

</body>
