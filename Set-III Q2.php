<!DOCTYPE html>
<html>
	<head>
		<title>Login Credentials</title>
		<style>
		*{
			box-sizing: border-box;
		}
		header{
			font-style: italic;
			text-align: center;
			padding: 12px;
			margin-top: 50px;
		}
		form{
			text-align: center;
			font-style: italic;
			border: 2px solid black;
			margin: 50px 150px 0px 150px;
			padding: 30px;
			border-radius: 10px;
		}
		input[type='submit']{
			width: 250px;
			padding: 7px;
			border: 0px solid white;
			border-radius: 15px;
		}
		</style>
	</head>
	<body>
		<?php
		$credentials=array("admin"=>"admin@123","myadmin"=>"myadmin@456","okadmin"=>"okadmin@789");
		print_r($credentials);
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$username=$_POST['uname'];
			$code=$_POST['password'];
			echo $username;
			echo "<br/>".$code;
			if(array_key_exists($username,$credentials) && $credentials[$username]==$code){
				$message="Welcome $username!";
			}
			else
				$message="Missing login credentials: Invalid username or password!";
		}
		?>
		<header>
			<h2>Login Page</h2>
		</header>
		<main>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
				<p>
				User Name: <input type="text" name="uname">
				<br/><br/>
				Pass-code: <input type="password" name="password">
				<br/><br/>
				<input type="submit" value="Login">
				</p>
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
		<?php
		//global $message;
		echo $message;
		?>
		</footer>
	</body>
</html>