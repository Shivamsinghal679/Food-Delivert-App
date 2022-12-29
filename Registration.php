<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.container{
			display: flex;
            height: 500px;
            width: 800px;
			margin: auto;
			border: 1px solid black;
			margin-top: 50px;
			box-shadow: 20px 20px 50px rgb(18, 1, 41);
		}
		.form{
			display: flex;
			flex-direction: column;
			width: 50%;
			align-items: center;
			background-color: whitesmoke;
		}
		.form h2{
			font-size: 3rem;
			font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
			margin:40px;
		}

		.box{
			padding: 12px;
			margin: 8px;
			border: 1px solid black;
			outline: none;
			border-radius: 20px;
			font-size: 18px;
			box-sizing: border-box;
		}
		.side{
			display: flex;
			width: 50%;
		}
		.side img{
			width: 399px;
		}
		#sub{
		  margin:5px;
		  padding: 8px;
		  font-size: 15px;
		  border-radius: 5px;
		  background-color: rgb(28, 167, 231);
		}

		.link {
			text-align: center;
			font-family: fantasy;
		}
		#message{
			font-size: 15px;
		}
	</style>

<!-- INSERT INTO `login` (`username`, `password`, `email`, `datetime`) VALUES ('Modi_ji', 'JaiBharat', 'mitron@gmail.com', '2021-11-10 18:52:03.000000'); -->
	

</head>
<body>
	<div class="container">
		<form action="signup.php" class="form" method="POST" onsubmit="return check()">
			<h2>SIGN UP</h2>
	     <input type="email" class="box" id="email" name="email" value="" placeholder="Email">
		 <span id="messageemail"></span>

         <input type="text" class="box" id="username" name="username" value="" placeholder="Username">

		 <input type="password" class="box" id="password" name="password" value="" placeholder="Password">
		 <span id="messagepassword"></span>

		 <input type="submit" class="box" id="sub" name="submit" value="Sign Up">
         <br><br>
         
		 <p class="link">Already Have an Account<br>
			<a  href="loginhtmlcss.php" target="_blank">Sign In</a> here</p>
		</form>

		<div class="side">
			<img src="login.jpg" alt="">
		</div>
	</div>

	<script>
		function check()
		{
		 var email = document.getElementById("email").value;
		 var username = document.getElementById("username").value;
		 var password =document.getElementById("password").value;
	
		 var corEmail = /^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/;
		 if(!corEmail.test(email))
		 {
			 document.getElementById("messageemail").innerText="**Enter Valid Email Address";
		 return false;
		}
	    
		if(password.length<8)
		{
			document.getElementById("messagepassword").innerText="**Password must be of 8 characters";
			return false;
		}
		}
		</script>
</body>
</html>