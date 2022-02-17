<?php
if(isset($_POST['submit_password']) && $_POST['key'] && $_POST['reset'] )
{ 
  $email=$_POST['key'];
  $pass=$_POST['password'];
    $link = mysqli_connect('localhost','root','');
  mysqli_select_db(  $link , 'projetweb');
  $select=mysqli_query( $link,"update users set password='$pass' where email='$email'");
  header('refresh:1;url=login.php');
}
?>