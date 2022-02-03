<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
</head>
<body>
	<form>
		<input type="text" name="name" placeholder="Name"><br>
		<input type="number" name="age" placeholder="age"><br>
		<input type="submit">
	</form>
	Hello <?php echo $_GET["name"] ?>
	Your age is  <?php echo $_GET["age"] ?>
</body>
</html>