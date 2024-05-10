<!DOCTYPE html>
<html>
	<head>
		<title>Login  Page</title>
		<style>
			*{
			box-sizing: border-box;
			}
			header{
			background-color: green;
			text-align: center;
			padding: 7px;
			color: white;
			border-radius: 5px;
			}
			main{
			margin-top: 12px;
			padding: 12px;
			text-align: center;
			}
			input[type="submit"]{
			margin-top: 12px;
			padding: 7px;
			width: 500px;
			border-radius: 7px;
			border: 1px solid black;
			}
		</style>
	</head>
	<body>
	<?php
		$name="";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name=$_POST["user_name"];
			if(empty($name)){
				$name = "User name is empty!";
			}
			else if($name=="Admin"){
				$name=strrev($name);
				$name="Welcome user $name to our website.";
			}
			else{
				$name="Invalid user!";
			}
		}
		?>
		<header>
			<h1>Welcome to User Login Page</h1>
			<div>Please enter a valid user name for login</div>
		</header>
		<br/>
		<main>
			<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
				User Name: <input type="text" placeholder="Enter your user name" name="user_name">
				Pass-code: <input type="password" name="pass-code"><br/>
				<input type="submit" value="Login">
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
			<?php
			//global $name;
			echo $name."<br/>";
			?>
		</footer>
		
	</body>
</html>