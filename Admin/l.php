<html>
<head>

</head>
<script>function validateform(){  
    var username=document.myform.username.value;  
    var password=document.myform.password.value;  
      
    if (username==null || username==""){  
      alert("Name can't be blank");  
      return false;  
    }else if(password==null || password=="" ){  
      alert("Password can't be blank");  
      return false;  
      }  
      
    } </script>
<body>
    <form class="login" action="login.php" method="post"  name="myform" onsubmit="return validateform()">
    <div class="l_rk">
    <h3 class="logo">R.K News Agency Admin Login From</h3>
    
    <img src="dataimg/login.png" alt="">
    <div class="l">
    <input type="text" name="username" placeholder="UserName" >
   <input type="password" name="password" placeholder="Password" >
   <input type="submit" name="submit" value="Submit" >
   </div>   
</div>
    </form>
</body>  
</html>
    
<?php
$con = mysqli_connect('localhost','root','','rk_news');
session_start();

if (isset($_POST['submit']))
 {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query=mysqli_query($con,"select * from admin_login where username='$username' AND password='$password'");

    if ($query)
    if (mysqli_num_rows($query)>0)
     {
      $_SESSION['username']=$username; 
       header('location:index.php');
    } 
    else
    {
        echo "<script> alert('Invalid Details Please Cheack')</script>";
    }
    
}


?>