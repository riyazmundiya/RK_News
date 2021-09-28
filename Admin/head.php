
<?php
error_reporting(null);
session_start();
if ($_SESSION['username']==true) {
  
}
else
{
  header('location:login.php');
}
?>

    <div class="sidenav">
    <a href="index.php">Home</a>
    <a href="Category.php">Category</a>
    <a href="sc.php">Sub-Category</a>
    <a href="news.php">News</a>
    <a href="livenews.php">Live-News</a>
    <a href="user.php">Users</a>
    <a href="feedback.php">Feedback</a>
    <a href="contact.php">Contact</a>
    <a href="logout.php">Logout</a>
</div>