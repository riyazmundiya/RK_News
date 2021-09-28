<?php 


$con = mysqli_connect('localhost','root','','rk_news');

function showData(){

    global $con;

    $query = " SELECT * FROM `registration` ";
    $run = mysqli_query($con , $query);
    
    if($run == TRUE)
{?>
<table border="2px" class="user">
    <td>Id</td>
    <td>Username</td>
    <td>Password</td>
    <td>Firstname</td>
    <td>Lastname</td>
    <td>Email</td>
    <td>City</td>
    <td>Country</td>
    <td>DOB</td>
    <td >Gender</td>
    <?php
    while ($data = mysqli_fetch_assoc($run))
     {
       ?>
       <tr>
        <td class="id"><?php echo $data['id'];?></td>
       <td class="username"><?php echo $data['username'];?></td>
           <td class="password"><?php echo $data['password'];?></td>
           <td class="firstname"><?php echo $data['username'];?></td>
           <td class="lastname"><?php echo $data['lastname'];?></td>
         <td class="email"><?php echo $data['email'];?></td>
        <td class="city"><?php echo $data['city'];?></td>
        <td class="country"><?php echo $data['country'];?></td>
        <td class="dob"><?php echo $data['dob'];?></td>
         <td class="gender"><?php echo $data['gender'];?></td>
            
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
    
<div class="dis"><h1>R.K News Agency Users Data</h1></div>

<div class="user_data">
 
     <?php showData(); ?>  
     
</div>

</body>
