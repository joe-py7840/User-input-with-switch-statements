<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			text-align: center;
		}
	</style>
	<title>Using switch statement with user input</title>
</head>
<body>
	<form action="user_switch.php" method="post">
		<input type="text" name="grade" placeholder="Enter your grade" maxlength="1"><br>
		<input type="submit">
	</form>
	<?php
		if (isset($_POST["grade"]) && !empty($_POST["grade"])) {
			$grade =  ucfirst(strtolower($_POST["grade"]));

			switch ($grade) {
				case 'A':
					echo "You will take an aviation course";
					break;
				case 'B':
					echo "You will take an architectural course";
					break;
				case 'C':
					echo "You will take an education course";
					break;
				case 'D':
					echo "You will join vocational training";
					break;
				case 'E':
					echo "You will need to resit the exam";
					break;
				
				default:
					echo '<span style="color: red;">Enter a valid grade!</span>';
					
			}
		}

	?>

</body>
</html>