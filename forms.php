<!DOCTYPE html>
<html>
<div class="bg-info">
<head>
	<style>
		body {background-size: cover;
			background-repeat: no-repeat;
			background-image: url("col.jpg");
			background-color: rgb(0, 152, 190);
			text-align: inherit;
		}
		h1 {
			text-align: center;
		}
		form {
			
			margin: 30px 40px;
			border-radius: 10px;
			top: 10px;
			background-color: transparent;
			left: 20%;
			color: black;
			position: left;
			
			column-width: auto;
		}
		input[type=text] {
  			transition: width 0.8s ease-in-out;
}
		input {
			border-radius: 8px;
			font-size: 20px;
			
		}
		input[type=text]:focus {

  			width: 18%;
		}
		col-auto {
			border-radius: 8px;
			font-size: 20px;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Validation</title>
	<h1><strong>Secure PHP Form</strong></h1>
</head>

<body>

	<?php
	$name = $email = $gender = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = user_input($_POST["fname"]);
  $lname = user_input($_POST["lname"]);
  $email = user_input($_POST["email"]);
  $comment = user_input($_POST["comment"]);
  $gender = user_input($_POST["gender"]);
}

function user_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} 

?>

<?php
	echo "<h2>We have recorded the following:</h2>";
	echo "Name: $fname $lname <br><br>";
	echo "Email: $email <br><br>";
	echo "gender: $gender <br><br>";
	echo "Comment: $comment";
?>

	<form class="row gy-2 gx-3 align-items-center" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<div class="row g-3">
		  	<div class="col-auto">
		    	<input type="text" class="form-control" name="fname" placeholder="First name" aria-label="First name">
		    	<?php if (empty($_POST["fname"])) {


    				$errMsg = "You have not entered the first Name.";  
					echo $errMsg; 
					} else { 
    					$name = $_POST["fname"];  
						} 
						if (!preg_match("/^[a-zA-z]*$/", $fname)) {  
    					$ErrMsg = "Only alphabets and whitespace are allowed.";  
             			echo $ErrMsg; 
   						}

						?>
		  	</div><br>
  			<div class="col-auto">
    			<input type="text" class="form-control" name="lname" placeholder="Last name" aria-label="Last name">
    			<?php if (empty($_POST["fname"])) {


    				$errMsg = "You have not entered the last Name.";  
					echo $errMsg; 
					} else { 
    					$name = $_POST["$lname"];  
						} 
						if (!preg_match("/^[a-zA-z]*$/", $lname)) {  
    					$ErrMsg = "Only alphabets and whitespace are allowed.";  
             			echo $ErrMsg; 
   						}

						?>
  			</div><br>
  			<div class="col-auto">
  				<input type="email" class="form-control" name="email" placeholder="Email Address" arial-label="Email Address">
  				<?php
  				if (empty($_POST["email"])) {
  					$errMsg = "You have not entered an email address";  
					echo $errMsg;  
				} else {  
    				$name = $_POST["email"];  
				}
				$pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";  
				if (!preg_match ($pattern, $email)){  
    					$ErrMsg = "Email is not valid.";  
            			echo $ErrMsg;
            		}  
				?> 
  			</div><br>
  			
  			<div class="col-auto">
  				Gender:
  				<input selected type="radio" name="gender">Male
  				<input type="radio" name="gender">Female
  				<input type="radio" name="gender">Other
  			</div><br>
  			<textarea name="comment" rows="5" cols="40" placeholder="Comment..."></textarea>
		</div>
		<div class="col-auto">
			<input type="submit" value="Sign in">
		</div>
		
	</form>



</body>
</div>
</html>
