<!DOCTYPE html>
<html>
	<head>
		<title>Set-I Q4</title>
		<style>
		</style>
	</head>
	<body>
		<header>
			<h2>Enter your text :</h2>
		</header>
		<?php
		$str="";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if(empty($_POST["string"])){
				$str="No input!";
			}
			else{
				$str=test_input($_POST["string"]);
			}
		}
		
		function test_input($data){
			$num=[0,1,2,3,4,5,6,7,8,9];
			$data=trim($data);
			$data=stripslashes($data);
			$data=htmlspecialchars($data);
			$data=str_replace($num,"",$data);
			return $data;
		}
		?>
		<main>
			<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
				<textarea type="text" rows="5" cols=" 40" name="string"></textarea>
				<input type="submit" name="Submit">
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
			<?php
			echo "<h3>Your Input is :</h3>";
			echo "$str";
			?>
		</footer>
	</body>
</html>