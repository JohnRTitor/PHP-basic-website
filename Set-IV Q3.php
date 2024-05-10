<!DOCTYPE hmtl>
<html>
	<head>
		<title>Valid or Invalid Text</title>
	</head>
	<body>
		<div>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
				Input your text here:<br/>
				<textarea rows="5" cols="40" name="txt"></textarea>
				<input type="submit" value="Submit">
			</form>
		</div>
		<br/><hr/><br/>
		<div>
			<?php
			if($_SERVER['REQUEST_METHOD']=="POST"){
				$str=$_POST["txt"];
				if(!empty($str)){
					$data=test_input($_POST["txt"]);
					//echo $data;
					if($data===""){
						echo "Your input is <em>valid</em>.";
					}
					else{
						echo "Your input is <em>invalid</em>.";
					}
				}
			}
			function test_input($data){
				$str=$data;
				$data=trim($str);
				$data=stripslashes($str);
				$data=htmlspecialchars($str);
				if(strpos($str,"0")!=""||strpos($str,"1")!=""||strpos($str,"2")!=""||strpos($str,"3")!=""||strpos($str,"4")!=""||strpos($str,"5")!=""||strpos($str,"6")!=""||strpos($str,"7")!=""||strpos($str,"8")!=""||strpos($str,"9")!=""){
					$data=1;
					return $data;
				}
				else{
					$data="";
					return $data;
				}
			}
			?>
		</div>
	</body>
</html>