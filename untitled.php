<!DOCTYPE html>
<html>
<style >
	input{
		color: green;
	}
	form{
		text-align: center;
	}
	body{
		text-align: center;
		color: green;
	}
</style>
<head>
	<title></title>
</head>
<body>
	<form action="untitled.php" method="post">
		<input type="number" name="num1" placeholder="Enter a number"><br>
		<input type="number" name="num2" placeholder="Enter a second number"><br>
		<input type="submit">

	</form>
	The sum is <?php echo $_POST["num1"] + $_POST["num2"] ?><br>
	The product is <?php echo $_POST["num1"] * $_POST["num2"] ?><br>
	The difference is <?php echo $_POST["num1"] - $_POST["num2"] ?><br>
	The quotient is <?php echo $_POST["num1"] / $_POST["num2"] ?>


</body>
</html>