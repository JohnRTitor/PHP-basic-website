<!DOCTYPE html>
<html>
	<head>
		<title>Book my Trip | Hotel Booking</title>
		<style>
			*{
				box-sizing: border-box;
			}
			main{
				padding: 20px;
				font: 18px Calibri;
			}
		</style>
	</head>
	<body>
		<header>
			<h1>Now Book Your Hotels and Rooms at Few Clicks!</h1>
		</header>
		<?php
		if($_SERVER['REQUEST_METHOD']=="POST"){
			$name=$_POST['cname'];
			$price=$_POST['price'];
			$days=$_POST['days'];
			$total="0";
			if(!empty($price)&&!empty($days)){
				$rental=(int)($price*$days);
				if($rental>=10000){
					$tax=(($rental*12)/100);
				}
				else{
					$tax=(($rental*10)/100);
				}
			$total=$rental+$tax;
			}
			
		}
		?>
		<main>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
				(a) Name of customer: <input type="text"  name="cname">
				<br/><br/>
				(b) Type of Room:	<select name="price">
									<option value="0">-select-</option>
									<option value="3000">Luxury</option>
									<option value="2500">Superior</option>
									<option value="2000">Classic</option>
								</select>
				<br/><br/>			
				(c) Number of Days to Stay: <input type="number" name="days">
				<br/><br/>
				<input type="submit" value="Check for Price">
			</form>
		</main>
		<br/><hr/><br/>
		<footer>
			<?php
				echo "<h3>Total Price for your booking:</h3>";
				echo "$name you need to pay a total of $total INR for your room.";
			?>
		</footer>
	</body>
</html>