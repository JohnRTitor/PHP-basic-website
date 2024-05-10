<!DOCTYPE html>
<html>
	<head>
		<title>Checking Whether a Year is Leap Year or not</title>
		<style>
			*{
				box-sizing: border-box;
			}
			input[type='number']{
				width: 50px;
			}
		</style>
	</head>
	<body>
		<header>
			<h2>Please Enter Your Name and Date of Birth</h2>
		</header>
		
		<main>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
				Name: <input type="text" placeholder="Enter your name" name="name">
				<br/><br/>
				Date of Birth:	<input type="number" placeholder="dd" name="date">
								<input type="number" placeholder="mm" name="month">
								<input type="number" placeholder="yyyy" name="year">
				<br/><br/>
				<input type="submit" value="Submit">
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$name=$_POST["name"];
			$d=$_POST["date"];
			$m=$_POST["month"];
			$y=$_POST["year"];
			if(!empty($d)&&!empty($m)&&!empty($y)){
				if($y%400===0 || $y%4===0 && $y%100!=0){
					echo "$name your year of birth is a leap year.";
				}
				else{
					echo "$name your year of birth is not a leap year.";
				}
			}
		}
		?>
		</footer>
	</body>
</html>