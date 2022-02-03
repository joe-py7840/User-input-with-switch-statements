<?php
$grade = "A";
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
			echo "You will attend vocational training";
			break;
		case 'E':
			echo "You will need to resit the exam";
			break;
		default:
			echo "enter your grade";
	}
?>