<?php 

function is_logged_in(){

	//第一次改进
	//if(!isset($_SESSION['username'])){
	//	header('Location:logout.php');
	//	die();
	//	return false;
	//} else {
	//	return true;
	//}

	//第二次改进
	//if(!isset($_SESSION['username'])){
		//header('Location:logout.php');
		//die();
	//	return false;
	//} else {
	//	return true;
	//}

	//第三次改进

	return isset($_SESSION['username']);
}


//第二步：验证输入信息
function validate_user_creds($username,$password){
	return ($username === USERNAME && $password === PASSWORD);
}

?>