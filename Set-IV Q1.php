<!DOCTYPE html>
<html>
	<head>
		<title>Fibonacci Series</title>
	</head>
	<body>
		<header>
			<h2>Enter "n" upto which you want to generate the fibonacci series</h2>
		</header>
		<main>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
				Enter the value of "n": <input type="number" name="num">
				<br/><br/>
				<input type="submit" value="Submit">
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$n=$_POST["num"];
			if(!empty($n)){
				$fibo=array(0,1);
				for($i=2;$i<$n;$i++){
					$next=$fibo[$i-1]+$fibo[$i-2];
					array_push($fibo,$next);
				}
				echo "Fibonacci series: ";
				for($i=0;$i<$n;$i++){
				echo "$fibo[$i] &nbsp;&nbsp;";
				}
			}
		}
		?>
		</footer>
	</body>
</html>