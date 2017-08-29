<?php 

define('MAILING_LIST', '../../mailing_list.php');

//define('MAILING_LIST', $_SERVER['DOCUMENT_ROOT'].'mailing_list.php');


//echo $_SERVER['DOCUMENT_ROOT'].'/mailing_list.php';

/*注册电子邮箱地址*/
function add_registered_user($name,$email){
	file_put_contents(MAILING_LIST,"$name:$email\n",FILE_APPEND);
}

/*电子邮箱地址是否有效*/
function valid_mail($email){
	//return preg_match('/regular expression/', subject)
	return filter_var($email,FILTER_VALIDATE_EMAIL);
}

/*保留表单状态*/
function old($key){
	if(!empty($_REQUEST[$key])){
		return htmlspecialchars($_REQUEST[$key]);
	}
	return '';
}

/*获取注册电子邮箱地址和用户*/
function get_registered_users($path=MAILING_LIST){
	$users = file($path);
	//print_r(explode(':', $users[0]));
	//print_r($users);
	if(count($users)){
		return array_map(function($user){
			return explode(':', htmlspecialchars($user));
			//return array_map('htmlspecialchars', $bits);
			//$bits = explode(':', htmlspecialchars($user));
			//print_r(array_map('htmlspecialchars', $bits));
		}, $users);
	}
	return false;
}

?>