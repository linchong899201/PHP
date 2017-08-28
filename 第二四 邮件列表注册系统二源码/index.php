<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	if (empty($name) || empty($email) || !valid_mail($email)) {
		$status = '请输入用户名和有效的电子邮箱地址';
	}else{
		add_registered_user($name,$email);
		$status = "谢谢你的注册，你的信息被添加到邮件列表。";
	}
}
require 'index.tmpl.php';
?>