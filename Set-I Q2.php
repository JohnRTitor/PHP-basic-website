<!DOCTYPE html>
<html>
	<head>
		<title>String reduce</title>
	</head>
	<body>
		<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
			Enter your text: <input type="text" name="inp">
			<input type="submit">
		</form>
		<br/><hr/><br/>
		<?php
		$str="";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$str=$_POST["inp"];
			if(empty($str)){
				echo "Input field is empty!<br/>";
			}
			else{
				$n=strlen($str);
				echo "$n ";
				$n=(int)($n/2);
				echo "$n<br/>";
				$str=substr($str,0,$n);
				echo "$str.<br/>";
			}
		}
		?>
	</body>
</html>