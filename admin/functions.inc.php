	<?php

	function validation_Email($email){
		return filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	function message_error($errors, $input){
		if (count($_POST)>0 && $errors[$input] != '') {
			return $errors[$input];
		}
	} 

	function message_congrate($congrate, $input){
		if (count($_POST)>0 && $congrate[$input] != '') {
			return $congrate[$input];
		}
	} 
?>