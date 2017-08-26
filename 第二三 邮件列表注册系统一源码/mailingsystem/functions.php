<?php 
function add_registered_user($name,$email){
	file_put_contents('mailing_list.php',"$name:$email\n",FILE_APPEND);
}

function old($key){
	if(!empty($_REQUEST[$key])){
		return htmlspecialchars($_REQUEST[$key]);
	}
	return '';
}

function valid_mail($email){
	//return preg_match('/regular expression/', subject)
	return filter_var($email,FILTER_VALIDATE_EMAIL);
}

?>