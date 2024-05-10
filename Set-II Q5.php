<!DOCTYPE html>
<html>
	<head>
		<title>University of Calcutta</title>
		<style>
		
		</style>
	</head>
	<body>
		<header>
			<h1>University of Calcutta</h1>
		</header>
		<?php
		if ($_SERVER["REQUEST_METHOD"]=="POST"){
			$data=test_input($_POST["reg"]);
			if(empty($_POST["reg"])){
				$reg = "Empty University Reg. No.";
			}
			
			else if($data === 0){
				//echo "$data";
				$name=$_POST['sname'];
				$roll=$_POST['roll'];
				$reg=$_POST['reg'];
				$sem=$_POST['sem'];
				$session=$_POST['session'];
				$cc=$_POST['CC'];
			}
			else {
				$reg="Invalid University Reg. No.";
			}
		}
		function test_input($data){
			$data=strpos($data,"CU-2022");
			//echo "<br/>$data<br/>";
			return $data;
		}
		?>
		<main>
			<h2>Please Fill the Following Details:</h2>
			<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
				Name : <input type="text" name="sname"><br/><br/>
				University Roll No.: <input type="number" name="roll"><br/><br/>
				University Reg. No.: <input type="text" name="reg"><br/><br/>
				Semester:	<input type="radio" value="I" name="sem"> I
							<input type="radio" value="II" name="sem"> II
							<input type="radio" value="III" name="sem"> III
							<input type="radio" value="IV" name="sem"> IV
							<input type="radio" value="V" name="sem"> V
							<input type="radio" value="VI" name="sem"> VI
				<br/><br/>
				Academic Session: 
				<select name="session">
					<option value="0" >-select-</option>
					<option value="2019" >2019</option>
					<option value="2020" >2020</option>
					<option value="2021" >2021</option>
					<option value="2022" >2022</option>
					<option value="2023" >2023</option>
				</select>
				<br/><br/>
				Core Course Papers:	<input type="text" name="CC">
										<!--input type="checkbox" value="CC1" name="CC"> CC2
										<input type="checkbox" value="CC1" name="CC"> CC3
										<input type="checkbox" value="CC1" name="CC"> CC4
										<input type="checkbox" value="CC1" name="CC"> CC5
										<input type="checkbox" value="CC1" name="CC"> CC6
										<input type="checkbox" value="CC1" name="CC"> CC7
										<input type="checkbox" value="CC1" name="CC"> CC8
										<input type="checkbox" value="CC1" name="CC"> CC9
										<input type="checkbox" value="CC1" name="CC"-->
				<br/><br/>
				<input type="submit"  value="Submit">
			</form>
			<br/><hr/><br/>
		</main>
		<footer>
			<?php
			global $name,$roll,$reg,$sem,$session,$cc;
				echo "<h2>Given Inputs:</h2>";
				echo "Name: $name<br/>";
				echo "Roll No.: $roll<br/>";
				echo "Reg. No.: $reg<br/>";
				echo "Semester: $sem<br/>";
				echo "Session: $session<br/>";
				echo "CC papers: $cc";
			?>
		</footer>
	</body>
</html>