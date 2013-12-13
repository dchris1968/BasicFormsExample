<?php 
	if (isset($_POST["firstname"])) 
	{
		echo $_POST["firstname"]; 
		echo $_POST["lastname"];
		echo $_POST["age"];
	}
	else 
	{
		
?>

<!DOCTYPE html>

<head>
	<title>Basic Forms Example</title>
	<meta charset="utf-8" />
	
</head>

<body>

	<div id="main-content">
		<form method="post" action="#">
			firstName: <input type="text" name="firstname" />
			lastName: <input type="text" name="lastname" />
			age: <input type="text" name="age" />
			<input type="submit" />
		</form>
	</div>

</body>
</html>
<?php
	}
?>