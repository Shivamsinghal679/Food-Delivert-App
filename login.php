<?php
  
  $con=mysqli_connect("localhost","root","root","food");

  

  if(!$con)
  {
	  die("failed to connect mysql due to".mysqli_connect_error());
  }

  $username=$_POST['username'];
  $password=$_POST['password'];

  $sql= "SELECT * FROM `login` WHERE `username` = '$username' AND `pass` = '$password' ";
  $result = mysqli_query($con,$sql);
  $count = mysqli_num_rows($result);

  
  if ($count > 0) {
   
    header("Location: Index.php");
    exit(0);
  }
  else
  echo "Wrong Credentials";

?>