<!DCOTYPE html>
<html>
	<head>
		<title>Adress Prototype</title>
	</head>
	<body>
		<header>
			<h2>Please enter your address here: </h2>
		</header>
		<main>
			<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
				Street Number: <input type="number" name="st_num">
				<br/><br/>
				Street Name: <input type="text" name="st_name">
				<br/><br/>
				Building Name: <input type="text" name="bd_name">
				<br/><br/>
				City Name: <input type="text" name="ct_name">
				<br/><br/>
				State Name: <input type="text" name="state_name">
				<br/><br/>
				Pin Code: <input type="number" name="pin">
				<br/><br/>
				<input type="submit" value="Submit">
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
		<?php
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$street_num=$_POST['st_num'];
			$street_name=$_POST['st_name'];
			$building_name=$_POST['bd_name'];
			$city_name=$_POST['ct_name'];
			$state_name=$_POST['state_name'];
			$pin=$_POST['pin'];
			if(!is_numeric($city_name)&&!is_numeric($state_name)&&is_numeric($pin)){
				echo "<big>Your address is: </big>";
				echo "<em>$street_num $street_name $building_name $city_name $state_name $pin</em>";
			}
			else{
				echo "<big><em>You have either entered invalid pin code or invalid city name and state name</em></big>";
			}
		}
		?>
		</footer>
	</body>
</html>