<!DOCTYPE html>
<html>
	<head>
		<title>Set-I Q3</title>
		<style>
		*{
		box-sizing: border-box;
		}
		.required{
		font-style: italic;
		color: red;
		}
		form div{
			padding: 12px;
			border: 1px solid black;
		}
		</style>
	</head>
	<body>
		<header>
			<h2>Please enter your name details: Keep an eye on <span class="required">(* required fields)</span></h2>
		</header>
		<?php
		$name1=$name2=$name3="";
		$err1=$err3="";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(empty($_POST["fname"])){
				$err1="First name is required";
			}
			else{
				$name1=test_input($_POST["fname"]);
			}
			$name2=$_POST["mname"];
			if(empty($_POST["lname"])){
				$err3="Last name is required";
			}
			else{
				$name3=test_input($_POST["lname"]);
			}
		}
		
		function test_input($data){
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			return $data;
		}
		?>
		<main>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
				<div>
				First Name: <input type="text" name="fname">
				<span class="required">* <?php echo "$err1";?></span>
				<br/><br/>
				Middile Name (if any): <input type="text" name="mname">
				<br/><br/>
				Last Name: <input type="text" name="lname">
				<span class="required">* <?php echo "$err3";?></span>
				<br/><br/>
				<input type="submit" value="submit">
				</div>
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
			<?php
				echo "<h3>Your Input is:</h3>";
				echo "$name1 $name2 $name3.";
			?>
		</footer>
		
	</body>
</html>