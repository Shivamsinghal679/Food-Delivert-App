<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
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
			box-shadow: 20px 20px 50px rgb(37, 34, 41);
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
	</style>
</head>
<body>
	<div class="container">
		<form action="login.php" class="form" method="POST">
			<h2>SIGN IN</h2>
         <input type="text" class="box" name="username" value="" placeholder="Username">
		 <input type="password" class="box" name="password" value="" placeholder="Password">
		 <input type="submit" class="box"  id="sub" value="Log In">
         <br><br>
		 <p class="link">Don't Have an Account<br>
			<a  href="Registration.php" >Sign up</a> here</p>
		</form>

		<div class="side">
			<img src="login.jpg" alt="">
		</div>
	</div>
</body>
</html>