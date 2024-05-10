<!DOCTYPE hmtl>
<html>
	<head>
		<title>Set-II Q4</title>
		<style>
		*{
			box-sizing: border-box;
		}
		header{
			margin-top: 150px;
			font-family: calibri;
			text-align: center;
		}
		.container{
			text-align: center;
			padding: 35px;
			border: 1px solid black;
			font: 18px calibri;
			margin: 0px 100px 0px 100px;
			border-radius: 12px;
		}
		input[type="submit"]{
			padding: 8px;
			width: 500px;
			border-radius: 15px;
			border: 1px solid white;
		}
		</style>
	</head>
	<body>
		<header>
			<h1>Login Page</h1>
		</header>
		<?php
		$name=$pass="";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(empty($_POST["user_name"])){
				$name="Empty user name!";
				//return;
			}
			else{
				$name=$_POST["user_name"];
				$n=strlen($_POST["code"]); $data=test_input($_POST["code"]);
				if($n>=6 && $data!=""){
					$pass=$_POST["code"];
				}
				else{
					$pass="Invalid password!";
				}
			}
		}
		
		function test_input($data){
			$data=strpos($data,"*");
			return $data;
		}
		?>
		<main>
			<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
				<div class="container">
					Username : <input type="text" name="user_name">
					&nbsp;&nbsp;&nbsp;&nbsp;
					Pass-code : <input type="password" name="code">
					<br/><br/>
					<input  type="submit" value="Login">
				</div>
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
		<?php
			echo "<h3>Your input:</h3>";
			echo "User name: ".$name."<br/>";
			echo "Pass-code: ".$pass."<br/>";
		?>
		</footer>
	</body>
</html>