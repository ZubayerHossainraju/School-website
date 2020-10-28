<?php

session_start();


$con=mysqli_connect('localhost','root');

if($con){
  echo "connection successful";
}else
{
  echo "no connection";
}

mysqli_select_db($con,'sessionpractical');

$name=$_POST['user'];
$pass=$_POST['password'];

$name=htmlspecialchars($name);
$pass=htmlspecialchars($pass);
$name=strip_tags($name);
$pass=strip_tags($pass);

 $q="select * from signin where name='$name' && password='$pass'  ";

  $result= mysqli_query($con,$q);

  $num=mysqli_num_rows($result);

  if($num==1){

    $_SESSION['username']=$name;
    header('location:result_publish.php');
    
  }else{
   
    #header('location:for_login.php');
    header('location:invalid.php');
  }




?>