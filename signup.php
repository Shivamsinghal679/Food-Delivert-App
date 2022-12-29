<?php
  
  $con=mysqli_connect("localhost","root","root","food");

  if(!$con)
  {
	  die("failed to connect mysql due to".mysqli_connect_error());
  }

  $username=$_POST['username'];
  $password=$_POST['password'];
  $email=$_POST['email'];

  $sql="SELECT * from `login` where username='$username' ";
  $check = mysqli_query($con,$sql);

  if(mysqli_num_rows($check)>0)
  echo "Username already exists";

  else{
  
  $sql="INSERT INTO `login` (`username`, `pass`, `email`) VALUES ('$username', '$password', '$email')";
  
  if($con->query($sql)==TRUE){
  header("Location: loginhtmlcss.php");
  exit(0);
  }
  }
  $con->close();

?>