<!DOCTYPE html>
<html>
	<head>
		<title>GCD of Two Numbers</title>
	</head>
	<body>
		<header>
			<h2>Enter any two numbers:</h2>
		</header>
		<main>
			<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
				Enter no.1 : <input type="number" name="num1" style="width: 50px;">
				<br/><br/>
				Enter no.2 : <input type="number" name="num2" style="width: 50px;">
				<br/><br/>
				<input type="submit" value="Submit">
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
			<?php
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$x=$_POST['num1'];
				$y=$_POST['num2'];
				$gcd=1;
				for($i=2;$i<=$x||$i<=$y;$i++){
					if($x%$i==0&&$y%$i==0){
						$gcd=$i;
						break;
					}
				}
				echo "GCD of $x and $y is: $gcd.";
			}
			?>
		</footer>
	</body>
</html>